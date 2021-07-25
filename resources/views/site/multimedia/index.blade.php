@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />

<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />

@section('content')
<div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a href="{{ route('multimedia') }}" class="button active">Barchasi</a></li>
                    <li class="splide__slide"><a href="{{ route('photo') }}" class="button">Foto</a></li>
                    <li class="splide__slide"><a href="{{ route('video') }}" class="button">Video</a></li>
                    <li class="splide__slide"><a href="#" class="button">Audio</a></li>
                </ul>
            </div>
        </div>
    </div>
<section class="mediateka container mx-auto">
    <!-- Media fotolari -->
    <div class="mediateka_photo ">
        <div class="second-content-head flex items-center justify-between">
            <h1 class="">Fotolavhalar</h1>
            <a href="{{ route('photo') }}">Barchasi</a>
        </div>
        <div class="line-gradient"></div>
        <ul class="mediateka_photo_cards">
            @foreach($photos as $key => $photo)
                <!--  data-fancybox bir xil bolganlari bitta galaeriyada ochadi  -->
                @php $images = json_decode($photo->content); @endphp
                @foreach($images as $image)
                    @if ($loop->first)
                            <a class="boxItem" href="{{ Voyager::image($image) }}" data-fancybox="img{{ $key + 1 }}" data-caption="{{ $photo->title }} <span>08.04.2021</span>">
                             <div class="mediateka_photo_content">
                                 <img src="{{ Voyager::image($image) }}" alt="">
                             </div>
                    @endif
                @endforeach
                <div class="media-date flex items-center">
                    <span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>
                    <span>{{ \Carbon\Carbon::parse($photo->created_at)->format('H:m / d.m.Y') }}</span>
                </div>
                <p>{{ $photo->title }}</p>
            </a>
                <!-- data-fancybox="img1" ga tegishli rasmlar galeriyasi Data caption tepadagi bilan bir xil boladi  -->
                <div style="display: none;">
                @foreach($images as $image)
                <a style="display: none;" class="boxItem" href="{{ Voyager::image($image) }}" data-fancybox="img{{ $key + 1 }}" data-caption="Электрон хизматларни кўпайтириш бўйича кўрсатмалар берилди <span>08.04.2021</span>">
                    <div class="mediateka_photo_content">
                        <img src="{{ Voyager::image($image) }}" alt="">
                    </div>
                </a>
                @endforeach
            </div>
            @endforeach
        </ul>

    </div>
    <!-- media videolar -->
    <div class="mediateka_video">
        <div class="second-content-head flex items-center justify-between">
            <h1 class="">Videolavhalar</h1>
            <a href="{{ route('video') }}">Barchasi</a>
        </div>
        <div class="line-gradient"></div>
        <div class="mediateka_video_cards">
{{--            @foreach($videos as $key => $item)--}}
{{--                <div style="display:none;" id="video{{ $key + 1 }}">--}}
{{--                    <video class="lg-video-object lg-html5 video-js vjs-default-skin"  controls preload="">--}}
{{--                        <source src="{{ Voyager::image($item->video) }}" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
{{--            @endforeach--}}
            <ul class="mediateka_video_card" id="video-gallery">
                @foreach($videos as $key => $item)
                    <a class="swiper-slide mediateka_cards"
                       data-lg-size="1280-720"
                       data-src="//www.youtube.com/watch?v=egyIeygdS_E"
                       data-poster="https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg"
                       data-sub-html="<h4>Visual Soundscapes - Mountains | Planet Earth II | BBC America</h4><p>On the heels of Planet Earth II’s record-breaking Emmy nominations, BBC America presents stunning visual soundscapes from the series' amazing habitats.</p>"
                    >
                        <div  class="relative block link-img-video" >
                            <img src="{{ Voyager::image($item->image) }}" alt="">
                            <div class="play-icon">
                                <svg width="70" height="70" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.75" d="M31.0041 61.4717L31.0125 61.4671L31.0208 61.4623L59.3993 45.1769C63.0612 43.1352 63.0529 37.8642 59.4198 35.8024L31.0534 18.557L31.0273 18.5411L31.0006 18.5263C27.4509 16.5617 23.0161 19.0987 23.0161 23.2258V56.7742C23.0161 60.9223 27.4732 63.4383 31.0041 61.4717ZM1.5 40C1.5 18.7317 18.7317 1.5 40 1.5C61.2683 1.5 78.5 18.7317 78.5 40C78.5 61.2683 61.2683 78.5 40 78.5C18.7317 78.5 1.5 61.2683 1.5 40Z" stroke="white" stroke-width="3"/>
                                </svg>
                            </div>
                        </div>
                        <div class="media-date flex items-center">
                            <span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>
                            <span>{{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y | H:m') }}</span>
                        </div>
                        <p href="#"> {{ $item->title }} </p>
                    </a>
                @endforeach
            </ul>

        </div>

    </div>
    <!-- media Audiolar -->

    <div class="mediateka_interview">
        <div class="second-content-head flex items-center justify-between">
            <h1 class="">Audiolar</h1>
            <a href="{{ route('audio') }}">Barchasi</a>
        </div>
        <div class="line-gradient"></div>
        <div class="mediateka_audio_cards">
          @foreach($audios as $audio)
            <div class="audio_cards_media">
                <div class="audio_cards_text">
                    <p>{{ $audio->title }}</p>
                </div>

                <audio id="player" class="js-player" controls>
                    @foreach (json_decode($audio->audio) as  $item)
                        <source src="{{ Voyager::image($item->download_link) }}" type="audio/mp3" />
                    @endforeach
                </audio>

            </div>
          @endforeach
        </div>



    </div>


</section>
<script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', () => {
        // Controls (as seen below) works in such a way that as soon as you explicitly define (add) one control
        // to the settings, ALL default controls are removed and you have to add them back in by defining those below.

        // For example, let's say you just simply wanted to add 'restart' to the control bar in addition to the default.
        // Once you specify *just* the 'restart' property below, ALL of the controls (progress bar, play, speed, etc) will be removed,
        // meaning that you MUST specify 'play', 'progress', 'speed' and the other default controls to see them again.

        const controls = [
            'play-large', // The large play button in the center
            'restart', // Restart playback
            'rewind', // Rewind by the seek time (default 10 seconds)
            'play', // Play/pause playback
            'fast-forward', // Fast forward by the seek time (default 10 seconds)
            'progress', // The progress bar and scrubber for playback and buffering
            'current-time', // The current time of playback
            'duration', // The full duration of the media
            'mute', // Toggle mute
            'volume', // Volume control
            'captions', // Toggle captions
            'settings', // Settings menu
            'pip', // Picture-in-picture (currently Safari only)
            'airplay', // Airplay (currently Safari only)
            'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
            'fullscreen' // Toggle fullscreen
        ];

        const player = Plyr.setup('.js-player', { controls });

    });

</script>



@endsection
