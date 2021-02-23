<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleIssueController;
use App\Http\Controllers\JournalsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\UploadsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

#Home Page
Route::get('/', [HomeController::class, 'index'])->name('home.index');

#Contacts Page
Route::get('contacts',[ContactsController::class, 'index'])->name('contacts.index');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');

#News Page
Route::get('news', [NewsController::class, 'index'])->name('news.index');

#Contents Page
// Route::get('contents', [ContentsController::class, 'index'])->name('contents.index');
// Route::resource('contents', ContentsController::class);
Route::resource('journal', JournalsController::class);

#Issue Page
// Route::resource('articles', ArticleIssueController::class);
Route::get('articles/{article}', [ArticleIssueController::class, 'index_all'])->name('articles.index_all');
Route::get('articles/{article}/edit', [ArticleIssueController::class, 'edit'])->name('articles.edit');
Route::get('articles/{article}/show', [ArticleIssueController::class, 'show'])->name('articles.show');
Route::put('articles/{article}', [ArticleIssueController::class, 'update'])->name('articles.update');

# Download Files
Route::get('journal/{journal}/download', [DownloadsController::class, 'downloadJournal'])->name('journal.download');
Route::get('content/{content}/download', [DownloadsController::class, 'downloadJournalContent'])->name('content.download');
Route::get('article/{article}/download', [DownloadsController::class, 'downloadArticle'])->name('article.download');

# Upload Files
Route::post('upload/journal', [UploadsController::class, 'uploadJournal'])->name('upload.journal');
