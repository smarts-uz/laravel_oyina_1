<?php

namespace App\View\Components\site;

use Illuminate\View\Component;

class document extends Component
{
    public $documents;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->documents = \App\Models\Admin\Docuemnt::query()
            ->orderBy('id', 'desc')
            ->where('id', '!=', $id)
            ->limit(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.document');
    }
}
