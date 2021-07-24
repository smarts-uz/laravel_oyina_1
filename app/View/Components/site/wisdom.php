<?php

namespace App\View\Components\site;

use App\Models\Admin\Content;
use Illuminate\View\Component;

class wisdom extends Component
{
    public $content;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->content = Content::inRandomOrder()->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.wisdom');
    }
}
