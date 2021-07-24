<?php

namespace App\View\Components\site;

use App\Models\Admin\Post;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class relevance extends Component
{
    public $relevance_day;
    public $relevance_week;
    public $relevance_month;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->relevance_day = Post::query()->orderBy('views', 'desc')->orderBy('views', 'desc')->whereDate('created_at', Carbon::today())->get();
        $this->relevance_week = Post::query()->orderBy('views', 'desc')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $this->relevance_month = Post::whereMonth(
            'created_at', '=', Carbon::now()->subMonth()->month
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.relevance');
    }
}
