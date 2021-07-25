<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\UserAuthController;
use App\Http\Controllers\Admin\VoyagerContactController;
use App\Http\Controllers\ReviewsController;

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

// Main page route

//Route::get('/', function () {
//    Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
//    return view('site.index');
//});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
        return View::make('site.index');
    });
});



// Post routes --------------------------------------------------------------------------------------------
Route::get('/posts/{post:slug}',  [MainPageController::class, 'singlePost'])->name('singlePost');
Route::get('/category/{category_slug}', [MainPageController::class, 'category'])->name('category');
Route::get('/post/type/{id}', [MainPageController::class, 'postType'])->name('postType');
Route::get('/news', [MainPageController::class, 'news'])->name('news');



// Article routes
Route::get('/articles', [MainPageController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [MainPageController::class, 'article'])->name('article');
Route::get('/articles/{category_slug}', [MainPageController::class, 'articleCategory'])->name('articleCategory');



// Interview routes
Route::get('interviews', [MainPageController::class, 'interviews'])->name('interviews');
Route::get('interview/{id}', [MainPageController::class, 'interview'])->name('interview');



// Document routes
Route::get('/documents', [MainPageController::class, 'documents'])->name('documents');
Route::get('/documents/{category_slug}', [MainPageController::class])->name('documentCategory');



// Generation routes
Route::get('generations', [MainPageController::class, 'generations'])->name('generations');
Route::get('generation/{id}', [MainPageController::class, 'generation'])->name('generation');



// Books routes
Route::get('/libary', [MainPageController::class, 'libary'])->name('libary');
Route::get('/book/{id}', [MainPageController::class, 'singleBook'])->name('singleBook');
Route::get('/books/{category_slug}', [MainPageController::class, 'bookCategory'])->name('bookCategory');
Route::view('/books', 'site.books.allbooks');
Route::view('/singlebook', 'site.books.audiosinglebook');



// Multimedia routes
Route::get('/multimedia', [MainPageController::class, 'multimedia'])->name('multimedia');
Route::get('/multimedia/photo', [MainPageController::class, 'photo'])->name('photo');
Route::get('/multimedia/video', [MainPageController::class, 'video'])->name('video');
Route::get('/multimedia/audio', [MainPageController::class, 'audio'])->name('audio');



// Announcement Routes
Route::get('/announcements', [MainPageController::class, 'announcements'])->name('announcements');
Route::get('/announcement/{id}', [MainPageController::class, 'announcement'])->name('announcement');


// Usefullinkall Routes
Route::get('/usefullinkall', [MainPageController::class, 'usefullinkall'])->name('usefullinkall');

// Symbols Routes
Route::get('/symbols', [MainPageController::class, 'symbols'])->name('symbols');
Route::get('/symbol/{id}', [MainPageController::class, 'symbol'])->name('symbol');


// Teahause routes
Route::get('/teahauses', [MainPageController::class, 'teahauses'])->name('teahauses');
Route::get('/teahause/{id}',  [MainPageController::class, 'teahause'])->name('teahause');
Route::get('/teahauses/{category_slug}', [MainPageController::class, 'teahauseCategory'])->name('teahauseCategory');

//comment
Route::post('/book/{id}/comment/store', [ReviewsController::class, 'store'])->name('comment.store');

// Voyager admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Login

Route::get('login', [UserAuthController::class, 'login'])->name('login');
Route::get('register', [UserAuthController::class, 'register'])->name('register');


Route::get('contact', [VoyagerContactController::class, 'contact'])->name('contact');
Route::post('contact',[VoyagerContactController::class, 'contactMessage'])->name('contactMessage');
