<?php

namespace App\View\Components\site;
use App\Models\Admin\Generation;

use Illuminate\View\Component;

class scholars extends Component
{

    public $generations;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->generations = Generation::query()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.scholars');
    }
}
