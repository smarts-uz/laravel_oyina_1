<?php

namespace App\View\Components\site;

use Illuminate\View\Component;

class newsvideo extends Component
{
    public $videocontent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videocontent = \App\Models\Admin\Newsvideo::query()->orderBy('id', 'desc')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.newsvideo');
    }
}
