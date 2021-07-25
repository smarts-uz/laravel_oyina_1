<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Post;
use App\Models\Admin\Talk;
use App\Models\Admin\Category;
use App\Models\Admin\Document;
use App\Models\Admin\Article;
use App\Http\Controllers\Admin\MainPageController;
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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
   ], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
        return View::make('site.index');
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
    Route::get('/documents/{category_slug}', [MainPageController::class, 'documentCategory'])->name('documentCategory');



    // Generation routes
    Route::get('generations', [MainPageController::class, 'generations'])->name('generations');
    Route::get('generation/{id}', [MainPageController::class, 'generation'])->name('generation');



    // Books routes
    Route::get('/libary', [MainPageController::class, 'libary'])->name('libary');
    Route::get('/book/{id}', [MainPageController::class, 'singleBook'])->name('singleBook');
    Route::get('/books/{category_slug}', [MainPageController::class, 'bookCategory'])->name('bookCategory');
    Route::get('/audiobooks', [MainPageController::class, 'audiobooks'])->name('audiobooks');
    Route::get('/audiobook/{id}', [MainPageController::class, 'audiobook'])->name('audiobook');



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
});




// Voyager admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Login
// Route::get('login', function()
// {
//     return View::make('site.login.login');
// });


Route::get('contact', function()
{
    return View::make('site.contact.contact');
});


Route::get('user', function()
{
    return View::make('user.index');
})->name('user');

Route::get('new', function()
{
    return View::make('user.news.news');
})->name('new');

Route::get('articl', function()
{
    return View::make('user.article.article');
})->name('articl');

Route::get('announ', function()
{
    return View::make('user.announcement.announcements');
})->name('announ');

Route::get('tea', function()
{
    return View::make('user.teahouse.teahouses');
})->name('tea');

Route::get('eboo', function()
{
    return View::make('user.ebook.ebooks');
})->name('eboo');

Route::get('aboo', function()
{
    return View::make('user.audiobook.audiobooks');
})->name('aboo');

Route::get('doc', function()
{
    return View::make('user.document.documents');
})->name('doc');

Route::get('profile', function()
{
   return View::make('user.profile.profile');
})->name('profileInfo');
