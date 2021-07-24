<?php

namespace App\View\Components\site;

use Illuminate\View\Component;


class article extends Component
{
    public $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->articles = \App\Models\Admin\Article::query()
            ->orderBy('id', 'desc')
            ->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.article');
    }
}
