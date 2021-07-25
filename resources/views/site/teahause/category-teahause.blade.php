@extends('site.layouts.app')

@section('content')
    <x-category/>
    <div class="category-news container mx-auto my-8">
        <div class="section-two-content-one-head flex items-center justify-between">
            <h1 class="">{{ $category->name }}</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex">

            {{-- Dolzarb --}}
            @foreach($articles as $item)
                <div class="category-news-content-main">
                    <div class="category-news-img">
                             <img src="{{ Voyager::image($item->image) }}" alt="">
                        <div class="category-bookmark flex justify-center items-center">
                            <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                        </div>
                        <p class="text-white"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> {{ $item->category->name }}</p>
                    </div>
                    <div class="category-news-date">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                    </div>
                    <a href="{{ route('teahause', ['id' => $item->id]) }}">{{ $item->title }}</a>
                </div>
            @endforeach

        </div>
        {{ $articles->links() }}
    </div>
@endsection
