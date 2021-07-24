<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use App\Models\Admin\Category;
use Illuminate\View\Component;

class science extends Component
{
    public $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $category = Category::query()->firstWhere('slug', '=', 'ilm-fan');
        $this->news = Post::query()
            ->where('category_id', '=', $category->id)
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
        return view('components.site.science');
    }
}
