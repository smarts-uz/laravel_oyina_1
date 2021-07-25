@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')
    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a href="{{ route('multimedia') }}" class="button">Barchasi</a></li>
                    <li class="splide__slide"><a href="{{ route('photo') }}" class="button">Foto</a></li>
                    <li class="splide__slide"><a href="{{ route('video') }}" class="button active">Video</a></li>
                    <li class="splide__slide"><a href="{{ route('audio') }}" class="button">Audio</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="mediateka container mx-auto">
        <!-- media videolar -->
        <div class="mediateka_video">
            <div class="second-content-head flex items-center justify-between">
                <h1 class="">Videolavhalar</h1>
            </div>
            <div class="line-gradient"></div>
            <div class="mediateka_video_cards">

                @foreach($videos as $key => $item)
                    <div style="display:none;" id="video{{ $key + 1 }}">
                        <video class="lg-video-object lg-html5 video-js vjs-default-skin"  controls preload="">
                            <source src="{{ Voyager::image($item->video) }}" type="video/mp4">
                        </video>
                    </div>
                @endforeach

                <ul class="mediateka_video_card_single" id="video-gallery">
                    @foreach($videos as $key => $item)
                        <li class="swiper-slide mediateka_cards" data-poster="{{ Voyager::image($item->image) }}" data-html="#video{{ $key + 1 }}" >
                            <a href="#" class="relative block link-img-video" >
                                <img src="{{ Voyager::image($item->image) }}" alt="">
                                <div class="play-icon">
                                    <svg width="70" height="70" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.75" d="M31.0041 61.4717L31.0125 61.4671L31.0208 61.4623L59.3993 45.1769C63.0612 43.1352 63.0529 37.8642 59.4198 35.8024L31.0534 18.557L31.0273 18.5411L31.0006 18.5263C27.4509 16.5617 23.0161 19.0987 23.0161 23.2258V56.7742C23.0161 60.9223 27.4732 63.4383 31.0041 61.4717ZM1.5 40C1.5 18.7317 18.7317 1.5 40 1.5C61.2683 1.5 78.5 18.7317 78.5 40C78.5 61.2683 61.2683 78.5 40 78.5C18.7317 78.5 1.5 61.2683 1.5 40Z" stroke="white" stroke-width="3"/>
                                    </svg>
                                </div>
                            </a>
                            <div class="media-date flex items-center">
                                <span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>
                                <span>{{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y | H:m') }}</span>
                            </div>
                            <a href="#"> {{ $item->title }} </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>


@endsection
