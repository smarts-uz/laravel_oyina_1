<div class="news_body_related">
    <div class="second-content-head flex items-center justify-between">
        <h1 class="">Buyuklar hayoti</h1>
        <a href="{{ route('generations')}}">@lang('site.navbar.all')</a>
    </div>
    <div class="line-gradient"></div>

    @foreach($news as $item)
        <div class="second-content-body flex">
            <div class="img-content">
                <img src="{{ Voyager::image(json_decode($item->image)[0]) }}" alt="">
            </div>
            <div class="text-content-second">
                <a class="" href="{{ route('generation', ['id' => $item->id]) }}">{{ $item->fio }}</a>
            </div>
        </div>
        @if (!$loop->last)
            <div class="line-hr"></div>
        @endif
    @endforeach




</div>
