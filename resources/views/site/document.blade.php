@extends('site.layouts.app')

@section('content')

<section>
    <x-category/>
    <div class="section-one-content single-news container mx-auto">
        <div class="single-news-headtext">
            <h1>{{ $document->title }}</h1>
        </div>
        <div class="first-content">
            <div class="bookmark flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
            </div>

            <div class="text-content">

                <div class="statics flex items-center gap-x-8 my-4" >
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($document->created_at)->format('H:m / d.m.Y') }}</span>
                </div>
            </div>
        </div>
    </div>
  </section>

    <div class="container mx-auto single-news">
        <div class="single-news-paragraph">
            {!! $document->content !!}
        </div>
    </div>
@endsection
