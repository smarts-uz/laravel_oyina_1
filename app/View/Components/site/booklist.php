<?php

namespace App\View\Components\site;

use App\Models\Admin\Publication;
use Illuminate\View\Component;

class booklist extends Component
{
    public $books;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->books = Publication::query()
            ->where('lang', '=', app()->getLocale())
            ->orderBy('id', 'desc')
            ->paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.booklist');
    }
}
