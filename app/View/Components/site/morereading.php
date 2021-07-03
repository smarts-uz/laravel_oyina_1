<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use Illuminate\View\Component;

class morereading extends Component
{
    public $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->news = Post::query()->orderBy('views', 'desc')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.morereading');
    }
}
