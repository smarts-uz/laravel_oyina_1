<?php

namespace App\View\Components\site;

use App\Models\Admin\Funny;
use Illuminate\View\Component;


class teahausecategory extends Component
{
    public $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($category)
    {

        $this->articles = Funny::query()
            ->where('category_id', '=', $category)
            ->orderBy('id', 'desc')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.teahausecategory');
    }
}
