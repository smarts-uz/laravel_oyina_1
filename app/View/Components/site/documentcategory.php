<?php

namespace App\View\Components\site;

use App\Models\Admin\Document;
use Illuminate\View\Component;

class documentcategory extends Component
{
    public $documents;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($category)
    {
        $this->documents = Document::query()
            ->where('category_id', '=', $category)
            ->orderBy('id', 'desc')->limit(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.documentcategory');
    }
}
