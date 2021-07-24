<?php

namespace App\View\Components\site;

use App\Models\Admin\History;
use Illuminate\View\Component;

class dayhistory extends Component
{
    public $history;
    public $day;
    public $month;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $history_content = History::query()
            ->whereDay('day', '=', date('d'))
            ->whereMonth('day', '=', date('m'))->first();

        if (!empty($history_content)) {
            $this->history = $history_content->content;
        } else {
            $this->history = '';
        }

        $month_list = [
            'Yanvar',
            'Fevral',
            'Mart',
            'Aprel',
            'May',
            'Iyun',
            'Iyul',
            'Avgust',
            'Sentyabr',
            'Oktyabr',
            'Noyabr',
            'Dekabr',
        ];

        $this->day = intval(date('d'));
        $this->month = $month_list[intval(date('m')) - 1];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.dayhistory');
    }
}
