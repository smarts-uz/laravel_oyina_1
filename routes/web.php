<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Post;
use App\Models\Admin\Talk;
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


Route::get('/', function () {
    Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
    return view('site.index');
});


Route::get('/posts/{post:slug}', function(Post $post) {
    return view('site.single-news', ['post' => $post]);
})->name('singlePost');


Route::get('/category/{category_slug}', function ($category_slug) {
    $category = \App\Models\Admin\Category::query()->where('slug', '=', $category_slug)->first();
    $post = Post::query()->where('category_id', '=', $category->id)->paginate(20);
    return view('site.category-news', ['post' => $post, 'category' => $category]);
})->name('category');

Route::get('interview/{id}', function (Talk $interview){
    return view('site.interview', ['content' => $interview]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
