@extends('site.layouts.app')

@section('content')
<x-category/>
    <div class="category-news container mx-auto my-8">
    <div class="section-two-content-one-head flex items-center justify-between">
          <h1 class="">{{ $category->name }} yangiliklari</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex">

          {{-- Dolzarb --}}
          @foreach($post as $item)
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
                    <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span>{{ $item->views }}</span>
                </div>
                <a href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>
            </div>
          @endforeach

        </div>
        {{ $post->links() }}
        {{--<div class="pagination">
            <ul class="pagination-content">
                <a href=""><li><</li></a>
                <a href=""><li>1</li></a>
                <a class="active-pagination" href=""><li>2</li></a>
                <a href=""><li>3</li></a>
                <a href=""><li>4</li></a>
                <a href=""><li>5</li></a>
                <a class="dot" href=""><li>...</li></a>
                <a href=""><li>25</li></a>
                <a href=""><li>26</li></a>
                <a href=""><li>></li></a>
            </ul>
        </div>--}}
    </div>
@endsection
