<?php

namespace App\View\Components\site;

use App\Models\Admin\Talk;
use Illuminate\View\Component;

class interviews extends Component
{
    public $interviews;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->interviews = Talk::query()
            ->where('lang', '=', app()->getLocale())
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
        return view('components.site.interviews');
    }
}
