<?php

namespace App\View\Components\site;

use Illuminate\View\Component;
use App\Models\Admin\Publication;

class bookslide extends Component
{
    public $publications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->publications = Publication::query()
            ->orderBy('created_at', 'desc')
            ->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.bookslide');
    }
}
