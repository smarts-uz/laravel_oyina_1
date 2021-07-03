<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use Illuminate\View\Component;

class current extends Component
{
    public $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->news = Post::query()->orderBy('id', 'desc')
            ->where('type', '=', 'option2')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.current');
    }
}
