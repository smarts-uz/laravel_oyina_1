<?php

namespace App\View\Components\site;

use Illuminate\View\Component;
use App\Models\Admin\Audiobook as Audio;

class audiobook extends Component
{
    public $audiobooks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->audiobooks = Audio::query()
            ->where('lang', '=', app()->getLocale())
            ->orderBy('id', 'desc')->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.audiobook');
    }
}
