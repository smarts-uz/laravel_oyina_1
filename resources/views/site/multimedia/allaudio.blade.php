@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
@section('content')

    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="container flex justify-between mx-auto splide mediateka_splide">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a href="{{ route('multimedia') }}" class="button active">Barchasi</a></li>
                    <li class="splide__slide"><a href="{{ route('photo') }}" class="button">Foto</a></li>
                    <li class="splide__slide"><a href="{{ route('video') }}" class="button">Video</a></li>
                    <li class="splide__slide"><a href="{{ route('audio') }}" class="button">Audio</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="container mx-auto mediateka">
<!-- media Audiolar -->

        <div class="mediateka_interview">
            <div class="flex items-center justify-between second-content-head">
                <h1 class="">Audiolar</h1>
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





{{--            <div class="mediateka_audio_cards">--}}
{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}

{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}
{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}
{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}
{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}
{{--                <a href="#">--}}
{{--                    <div class="audio_img">--}}
{{--                        <img src="../images/cassette.png" alt="">--}}
{{--                    </div>--}}
{{--                    <p>Muhabbat</p>--}}
{{--                    <span>Abdulla Oripov</span>--}}
{{--                </a>--}}



{{--            </div>--}}



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
