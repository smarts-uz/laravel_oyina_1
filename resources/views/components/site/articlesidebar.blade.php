<div class="second-content">
    <div class="flex items-center justify-between second-content-head">
        <h1 class="">So`ngi maqolalar</h1>
        <a href="{{ route('articles')}}">@lang('site.navbar.all')</a>
    </div>
    <div class="line-gradient"></div>

    @foreach($news as $item)
        <div class="flex second-content-body">
            <div class="img-content">
                <img src="{{ Voyager::image(json_decode($item->image)[0]) }}" alt="">
            </div>
            <div class="text-content-second">
                <div class="flex items-center justify-between align-middle icon-text">
                    <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>{{ $item->category->name }}</p>
                    <div class="flex items-center date-icons">
                        <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                        <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                    </div>
                </div>
                <a class="" href="{{ route('article', ['id' => $item->id]) }}">{{ $item->title }}</a>
            </div>
        </div>
        @if (!$loop->last)
            <div class="line-hr"></div>
        @endif
    @endforeach




</div>
