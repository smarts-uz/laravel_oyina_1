<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Post;
use App\Models\Admin\Talk;
use App\Models\Admin\Category;
use App\Models\Admin\Document;
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
Route::get('/', function () {
    Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
    return view('site.index');
});



// Post routes
Route::get('/posts/{post:slug}', function(Post $post) {
    return view('site.single-news', ['post' => $post]);
})->name('singlePost');

Route::get('/category/{category_slug}', function ($category_slug) {
    $category = Category::query()
        ->orderBy('id', 'desc')
        ->where('slug', '=', $category_slug)->first();
    $post = Post::query()->where('category_id', '=', $category->id)->paginate(20);
    return view('site.category-news', ['post' => $post, 'category' => $category]);
})->name('category');



// Interview routes
Route::get('interviews', function (){
    $interviews = Talk::query()->orderBy('id', 'desc')->paginate(20);
    return view('site.interviews', compact('interviews'));
})->name('interviews');

Route::get('interview/{id}', function ($id){
    $talk = Talk::query()->find($id);
    return view('site.interview', ['content' => $talk]);
})->name('interview');


//Document routes
Route::get('/documents', function (){
    $documents = Document::query()->orderBy('id', 'desc')->paginate(20);
    return view('site.documents', compact('documents'));
})->name('documents');

Route::get('/document/{id}', function($id) {
    $document = Document::query()->find($id);
    return view('site.document', compact('document'));
})->name('document');


// Article routes
Route::get('/articles', function () {
    $articles = null;
//    return view('site.articles', compact('articles'));
})->name('articles');

Route::get('/article/{id}', function ($id) {
    $article = null;
//    return view('site.article', compact('article'));
})->name('artice');



// Voyager admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
