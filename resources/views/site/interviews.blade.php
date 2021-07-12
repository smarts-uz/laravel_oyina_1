@extends('site.layouts.app')

@section('content')
<x-category/>
    <div class="category-news container mx-auto my-8">
    <div class="section-two-content-one-head flex items-center justify-between">
          <h1 class="">Intervyular</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex">

          @foreach($interviews as $interview)
            <div class="category-news-content-main">
                <div class="category-news-img">
                    @php $images = json_decode($interview->image) @endphp
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
                    <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($interview->created_at)->format('H:m / d.m.Y') }}</span>
                </div>
                <a href="{{ route('interview', ['id' => $interview->id]) }}">{{ $interview->title }}</a>
            </div>
          @endforeach

        </div>
        {{ $interviews->links() }}
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
