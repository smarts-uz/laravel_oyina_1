<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use Illuminate\View\Component;

class newscategory extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($category)
    {

            $this->posts = Post::query()
                ->where('category_id', '=', $category)
                ->where('lang', '=', app()->getLocale())
                ->orderBy('id', 'desc')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.newscategory');
    }
}
