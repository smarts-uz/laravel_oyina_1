<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use Illuminate\View\Component;

class news extends Component
{
    public $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit)
    {
        $this->news = Post::query()->orderBy('id', 'desc')
            ->where('lang', '=', app()->getLocale())
            ->limit($limit)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.news');
    }
}
