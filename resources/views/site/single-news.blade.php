@extends('site.layouts.app')

@section('content')

<section>
    <x-category/>
    <div class="section-one-content single-news container mx-auto">
        <div class="single-news-headtext">
            <h1>{{ $post->title }}</h1>
            <h2>{{ $post->excerpt }}</h2>
        </div>
        <div class="first-content">
            <img class="" src="{{ Voyager::image($post->image) }}" alt="">
            <div class="bookmark flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
            </div>

            <p class="text-white"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>{{ $post->category->name }}</p>
            <div class="text-content">

                <div class="statics flex items-center gap-x-8 my-4" >
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($post->created_at)->format('H:m / d.m.Y') }}</span>
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> {{ $post->views }}</span>
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                </div>
            </div>
        </div>
    </div>
  </section>

    <div class="container mx-auto single-news">
        <div class="single-news-paragraph">
            {!! $post->body !!}
        </div>
    </div>
@endsection
