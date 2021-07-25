<?php

namespace App\View\Components\site;
use App\Models\Admin\Generation;

use Illuminate\View\Component;

class scholars extends Component
{

    public $generations1;

    public $generations2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->generations1 = Generation::query()
            ->where('type', '=', 'option1')
            ->where('lang', '=', app()->getLocale())
            ->limit(7)->get();

        $this->generations2 = Generation::query()
            ->where('type', '=', 'option2')
            ->where('lang', '=', app()->getLocale())
            ->limit(7)->get();
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
