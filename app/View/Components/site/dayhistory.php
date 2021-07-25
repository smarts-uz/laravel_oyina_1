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
            ->orderBy('id', 'desc')
            ->whereDay('day', '=', date('d'))
            ->whereMonth('day', '=', date('m'))
            ->where('lang', '=', app()->getLocale())
            ->first();
        if (!empty($history_content)) {
            $this->history = $history_content->content;
        } else {
            $this->history = '';
        }

        $month_list = [
            'uz' => [
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
            ],
            'ru' => [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь',
            ],
            'en' => [
                'Yanvar',
                'Fevral',
                'Mart',
                'Aprel',
                'May',
                'Iyun',
                'July',
                'Avgust',
                'Sentyabr',
                'Oktyabr',
                'Noyabr',
                'Dekabr',
            ],
            'kiril' => [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь',
            ],

        ];

        $this->day = intval(date('d'));
        $this->month = $month_list[app()->getLocale()][intval(date('m')) - 1];
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
