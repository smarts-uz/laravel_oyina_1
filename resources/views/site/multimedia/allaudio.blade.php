@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')

    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
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
    <section class="mediateka container mx-auto">
<!-- media Audiolar -->

        <div class="mediateka_interview">
            <div class="second-content-head flex items-center justify-between">
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



@endsection
