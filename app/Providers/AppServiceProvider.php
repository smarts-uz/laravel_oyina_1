<?php

namespace App\Providers;

use App\View\Components\site\bookslide;
use App\View\Components\site\footer;
use App\View\Components\site\mediaslider;
use App\View\Components\site\navbar;
use App\View\Components\site\newsvideo;
use App\View\Components\site\relevance;
use App\View\Components\site\scholars;
use App\View\Components\site\settings;
use App\View\Components\site\news;
use App\View\Components\site\booklist;
use App\View\Components\site\current;
use App\View\Components\site\heard;
use App\View\Components\site\wisdom;
use App\View\Components\site\science;
use App\View\Components\site\newdocument;
use App\View\Components\site\dayhistory;
use App\View\Components\site\morereading;
use App\View\Components\site\article;
use App\View\Components\site\audiobook;
use App\View\Components\site\interviews;
use App\View\Components\site\usefullink;
use App\View\Components\site\usefullinkall;
use App\View\Components\site\category;
use App\View\Components\site\newscategory;
use App\View\Components\site\bookscategory;
use App\View\Components\site\articlecategory;
use App\View\Components\site\announcement;
use App\View\Components\site\teahausecategory;
use App\View\Components\site\documentcategory;
use App\View\Components\site\articlesidebar;

use App\View\Components\site\teahausesidebar;
use App\View\Components\site\generationsidebar;
use App\View\Components\site\interviewsidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::useModel('Post', \App\Models\Admin\Post::class);
        Voyager::useModel('Category', \App\Models\Admin\Category::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('bookslide', bookslide::class);
        Blade::component('footer', footer::class);
        Blade::component('navbar', navbar::class);
        Blade::component('relevance', relevance::class);
        Blade::component('scholars', scholars::class);
        Blade::component('settings', settings::class);
        Blade::component('mediaslider', mediaslider::class);
        Blade::component('latest-news', news::class);
        Blade::component('current', current::class);
        Blade::component('heard', heard::class);
        Blade::component('wisdom', wisdom::class);
        Blade::component('science', science::class);
        Blade::component('newdocument', newdocument::class);
        Blade::component('dayhistory', dayhistory::class);
        Blade::component('morereading', morereading::class);
        Blade::component('article', article::class);
        Blade::component('audiobook', audiobook::class);
        Blade::component('interviews', interviews::class);
        Blade::component('usefullink', usefullink::class);
        Blade::component('category', category::class);
        Blade::component('newsvideo', newsvideo::class);
        Blade::component('newscategory', newscategory::class);
        Blade::component('articlecategory', articlecategory::class);
        Blade::component('announcement', announcement::class);
        Blade::component('document', document::class);
        Blade::component('booklist', booklist::class);
        Blade::component('bookscategory', bookscategory::class);
        Blade::component('teahausecategory', teahausecategory::class);
        Blade::component('documentcategory', documentcategory::class);
        Blade::component('articlesidebar', articlesidebar::class);
<<<<<<< HEAD
=======
        Blade::component('teahausesidebar', teahausesidebar::class);
        Blade::component('generationsidebar', generationsidebar::class);
        Blade::component('interviewsidebar', interviewsidebar::class);
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
    }
}
