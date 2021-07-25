@extends('site.layouts.app')

@section('content')
    <x-category/>
    <div class="container mx-auto my-8 category-news">
        <div class="flex items-center justify-between section-two-content-one-head">
            <h1 class="">{{ $category->name }}</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="flex category-news-content">

            {{-- Dolzarb --}}
            @foreach($articles as $item)
                <div class="category-news-content-main">
                    <div class="category-news-img">
                        @php $images = json_decode($item->image) @endphp
                        @foreach($images as $image)
                            @if ($loop->first)
                                <img src="{{ Voyager::image($image) }}" alt="">
                            @endif
                        @endforeach
                        <div class="flex items-center justify-center category-bookmark">
                            <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                        </div>
                        <p class="text-white"><span class="text-white iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> {{ $item->category->name }}</p>
                    </div>
                    <div class="category-news-date">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                    </div>
<<<<<<< HEAD
                    <a href="{{ route('article', ['id' => $item->id]) }}">{{ $item->title }}</a>
=======
                    <a href="{{ route('teahause', ['id' => $item->id]) }}">{{ $item->title }}</a>
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                </div>
            @endforeach

        </div>
        {{ $articles->links() }}
    </div>
@endsection
