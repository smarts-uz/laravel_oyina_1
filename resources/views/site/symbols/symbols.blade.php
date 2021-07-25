@extends('site.layouts.app')

@section('content')
    <x-category/>
    <div class="category-news container mx-auto my-8">
        <div class="section-two-content-one-head flex items-center justify-between">
            <h1 class="">@lang('site.top')</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex symbol">

            @foreach($symbols as $s)
                <div class="category-news-content-main">
                    <div class="category-news-img">
                        @php $images = json_decode($s->image) @endphp
                        @foreach($images as $image)
                            @if ($loop->first)
                                <img class="" src="{{ Voyager::image($image) }}" alt="">
                            @endif
                        @endforeach
                        <div class="category-bookmark flex justify-center items-center">
                            <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                        </div>
                    </div>
                    <div class="category-news-date">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($s->created_at)->format('H:m / d.m.Y') }}</span>
                    </div>
                    <a href="{{ route('symbol', ['id' => $s->id]) }}">{{ $s->title }}</a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
