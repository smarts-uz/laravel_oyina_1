<?php

namespace App\View\Components\site;

use App\Models\Admin\Publication;
use Illuminate\View\Component;

class bookscategory extends Component
{
    public $books;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($category)
    {
        $this->books = Publication::query()
            ->where('category_id', '=', $category)
            ->where('lang', '=', app()->getLocale())
            ->orderBy('id', 'desc')->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.bookscategory');
    }
}
