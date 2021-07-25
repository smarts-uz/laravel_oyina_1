<?php

namespace App\View\Components\site;

use App\Models\Admin\Article;
use Illuminate\View\Component;

class articlesidebar extends Component
{
    public $news;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($id)
    {
        $this->news = Article::query()->orderBy('id', 'desc')
            ->where('lang', '=', app()->getLocale())
            ->where('id', '!=', $id)
            ->limit(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.articlesidebar');
    }
}
