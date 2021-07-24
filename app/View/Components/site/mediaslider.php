<?php

namespace App\View\Components\site;

use App\Models\Admin\Image;
use App\Models\Admin\Video;
use Illuminate\View\Component;

class mediaslider extends Component
{
    public $photos;

    public $videos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->photos = Image::query()->orderBy('id', 'desc')->limit(6)->get();
        $this->videos = Video::query()->orderBy('id', 'desc')->limit(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.mediaslider');
    }
}
