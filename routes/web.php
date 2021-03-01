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

// Auth::routes();

Auth::routes(['register' => false]);

#Home Page
Route::get('/', [HomeController::class, 'index'])->name('home.index');

#Contacts Page
Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');

#News Page
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::post('news/store', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update')->middleware('auth');



#Contents Page
// Route::get('contents', [ContentsController::class, 'index'])->name('contents.index');
// Route::resource('contents', ContentsController::class);
// Route::resource('journal', JournalsController::class);
Route::get('journal',[JournalsController::class, 'index'])->name('journal.index');
Route::get('journal/create',[JournalsController::class, 'create'])->name('journal.create')->middleware('auth');

#Issue Page
// Route::resource('articles', ArticleIssueController::class);
Route::get('articles/{article}/create', [ArticleIssueController::class, 'create'])->name('articles.create')->middleware('auth');
// Route::post('articles', [ArticleIssueController::class, 'store'])->name('articles.store');
Route::get('articles/{article}', [ArticleIssueController::class, 'index_all'])->name('articles.index_all');
Route::get('articles/{article}/edit', [ArticleIssueController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::get('articles/{article}/show', [ArticleIssueController::class, 'show'])->name('articles.show')->middleware('auth');
Route::put('articles/{article}', [ArticleIssueController::class, 'update'])->name('articles.update')->middleware('auth');

# Download Files
Route::get('journal/{journal}/download', [DownloadsController::class, 'downloadJournal'])->name('journal.download');
Route::get('content/{content}/download', [DownloadsController::class, 'downloadJournalContent'])->name('content.download');
Route::get('article/{article}/download', [DownloadsController::class, 'downloadArticle'])->name('article.download');

# Upload Files
Route::post('upload/journal', [UploadsController::class, 'uploadJournal'])->name('upload.journal')->middleware('auth');
Route::post('upload/article', [UploadsController::class, 'uploadArticle'])->name('upload.article')->middleware('auth');

# Instructions yo the authors
Route::get('instructions', [InstructionsController::class, 'index'])->name('instructions.index');
Route::get('instructions/{instructions}/edit', [InstructionsController::class, 'edit'])->name('instructions.edit')->middleware('auth');
Route::put('instructions/{article}', [InstructionsController::class, 'update'])->name('instructions.update')->middleware('auth');

# Conferences
Route::get('conferences', [ConferencesController::class, 'index'])->name('conferences.index');
Route::get('conferences/{conferences}/edit', [ConferencesController::class, 'edit'])->name('conferences.edit')->middleware('auth');
Route::put('conferences/{conferences}', [ConferencesController::class, 'update'])->name('conferences.update')->middleware('auth');

# Pub Ethics
Route::get('pub-ethics', [PubEthicsController::class, 'index'])->name('pub-ethics.index');
Route::get('pub-ethics/{pubethics}/edit', [PubEthicsController::class, 'edit'])->name('pub-ethics.edit')->middleware('auth');
Route::put('pub-ethics/{pubethics}', [PubEthicsController::class, 'update'])->name('pub-ethics.update')->middleware('auth');

# Subscription
Route::get('subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
Route::get('subscription/{subscription}/edit', [SubscriptionController::class, 'edit'])->name('subscription.edit')->middleware('auth');
Route::put('subscription/{subscription}', [SubscriptionController::class, 'update'])->name('subscription.update')->middleware('auth');

