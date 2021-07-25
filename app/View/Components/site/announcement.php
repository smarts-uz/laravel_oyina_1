<?php

namespace App\View\Components\site;

use Illuminate\View\Component;


class announcement extends Component
{
    public $announcements;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->announcements = \App\Models\Admin\Announcement::query()
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
        return view('components.site.announcement');
    }
}
