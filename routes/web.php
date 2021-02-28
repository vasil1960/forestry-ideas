<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleIssueController;
use App\Http\Controllers\JournalsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\InstructionsController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\PubEthicsController;
use App\Http\Controllers\SubscriptionController;
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
Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');

#News Page
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');



#Contents Page
// Route::get('contents', [ContentsController::class, 'index'])->name('contents.index');
// Route::resource('contents', ContentsController::class);
Route::resource('journal', JournalsController::class);

#Issue Page
// Route::resource('articles', ArticleIssueController::class);
Route::get('articles/{article}/create', [ArticleIssueController::class, 'create'])->name('articles.create');
// Route::post('articles', [ArticleIssueController::class, 'store'])->name('articles.store');
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
Route::post('upload/article', [UploadsController::class, 'uploadArticle'])->name('upload.article');

# Instructions yo the authors
Route::get('instructions', [InstructionsController::class, 'index'])->name('instructions.index');
Route::get('instructions/{instructions}/edit', [InstructionsController::class, 'edit'])->name('instructions.edit');
Route::put('instructions/{article}', [InstructionsController::class, 'update'])->name('instructions.update');

# Conferences
Route::get('conferences', [ConferencesController::class, 'index'])->name('conferences.index');
Route::get('conferences/{conferences}/edit', [ConferencesController::class, 'edit'])->name('conferences.edit');
Route::put('conferences/{conferences}', [ConferencesController::class, 'update'])->name('conferences.update');

# Pub Ethics
Route::get('pub-ethics', [PubEthicsController::class, 'index'])->name('pub-ethics.index');
Route::get('pub-ethics/{pubethics}/edit', [PubEthicsController::class, 'edit'])->name('pub-ethics.edit');
Route::put('pub-ethics/{pubethics}', [PubEthicsController::class, 'update'])->name('pub-ethics.update');

# Subscription
Route::get('subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
Route::get('subscription/{subscription}/edit', [SubscriptionController::class, 'edit'])->name('subscription.edit');
Route::put('subscription/{subscription}', [SubscriptionController::class, 'update'])->name('subscription.update');

