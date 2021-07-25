<?php

namespace App\View\Components\site;

use App\Models\Admin\Useful;
use Illuminate\View\Component;

class usefullink extends Component
{
    public $usefuls;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->usefuls = Useful::query()
            ->orderBy('id', 'desc')
            ->where('lang', '=', app()->getLocale())
            ->limit(8)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.usefullink');
    }
}
