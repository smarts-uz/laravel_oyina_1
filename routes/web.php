<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Post;
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


Route::get('/category/{category_name}', function ($category_name) {
    $post = Post::query()->where('category_id', '=', $category_id)->paginate(20);
    $category_name = \App\Models\Admin\Category::query()->find($category_id);
    return view('site.category-news', ['post' => $post, 'category_name' => $category_name]);
})->name('category');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
