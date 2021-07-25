@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')

    <section class="announcement container mx-auto">
      @foreach($announcements as $announcement)
          @if ($loop->first)
                <div class="announcement_main">
                    @php $images = json_decode($announcement->image) @endphp
                    @foreach($images as $image)
                        @if ($loop->first)
                            <img src="{{ Voyager::image($image) }}" alt="">
                        @endif
                    @endforeach

                    <a href="#" class="announcement_main_bookmark">
                        <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                    </a>

                    <a href="{{ route('announcement', ['id' => $announcement->id]) }}" class="announcement_main_text">
                        <h1>{{ $announcement->title }}</h1>
                        <p>{{ \Carbon\Carbon::parse($announcement->created_at)->format('d.m.Y | H:m') }}</p>
                    </a>
                </div>
            @endif
        @endforeach

        <div class="announcement_line"></div>

        <div class="announcement_second_box">

            @foreach ($announcements as $announcement)
                @if ($loop->first)
{{--                    <div class="announcement_line_vertical"></div>--}}
                @else
                    <div class="announcement_card">
                        <div class="announcement_card_img">
                            @php $images = json_decode($announcement->image) @endphp
                            @foreach($images as $image)
                                @if ($loop->first)
                                    <img src="{{ Voyager::image($image) }}" alt="">
                                @endif
                            @endforeach
                            <a href="#" class="announcement_four_bookmark">
                                <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                            </a>
                        </div>
                        <div class="announcement_card_icons">
                            <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
                                </span> {{ \Carbon\Carbon::parse($announcement->created_at)->format('H:m / d.m.Y') }}</span>

                        </div>
                        <a href="{{ route('announcement', ['id' => $announcement->id]) }}">{{ $announcement->title }}</a>
                    </div>
                @endif

            @endforeach


        </div>
        <div class="announcement_line"></div>
        <!--
                <div class="announcement_third_box">
                    <div class="announcement_third_card">
                        <div class="third_box_img">
                            <img src="../images/img1.png" alt="">
                            <a href="#" class="announcement_main_bookmark">
                                <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                            </a>
                        </div>
                        <a class="third_box_text" href="">Birinchi chorakda aholi daromadlari 9,8 foizga oshdi.</a>
                    </div>

                    <div class="announcement_third_card">
                        <div class="third_box_img">
                            <img src="../images/img1.png" alt="">
                            <a href="#" class="announcement_main_bookmark">
                                <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                            </a>
                        </div>
                        <a class="third_box_text" href="">Birinchi chorakda aholi daromadlari 9,8 foizga oshdi.</a>
                    </div>

                </div> -->
        {{--<div class="announcement_four_box">
                    <div class="announcement_four_card">
                        <div class="four_card_img">
                            <img src="../images/img1.png" alt="">
                            <a href="#" class="announcement_four_bookmark">
                                <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                            </a>
                        </div>
                        <div class="announcement_card_icons">
                            <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>

                        </div>
                        <a href="#" class="four_card_text">“El-yurt umidi” jamg’armasi xorijiy davlatlarda o’qish “El-yurt umidi” jamg’armasi xorijiy davlatlarda o’qish “El-yurt umidi” jamg’armasi xorijiy davlatlarda o’qish “El-yurt umidi” jamg’armasi xorijiy davlatlarda o’qish “El-yurt umidi” jamg’armasi xorijiy davlatlarda o’qish ...</a>

                    </div>


                </div> --}}


    </section>




@endsection
