<?php

namespace App\View\Components\site;

use App\Models\Admin\Funny;
use Illuminate\View\Component;

class teahausesidebar extends Component
{
    public $news;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->news = Funny::query()->orderBy('id', 'desc')
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
        return view('components.site.teahausesidebar');
    }
}
