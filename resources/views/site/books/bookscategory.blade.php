@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />

<style>

    /* audio */

    @import url("https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap");






    .add-bottom { margin-bottom:2rem !important; }
    .left { float:left; }
    .right { float:right; }
    .center { text-align:center; }
    .hidden { display:none; }

    .no-support {
        margin:2rem auto;
        text-align:center;
        width:90%;
    }


    /* Audio Player Styles
    ================================================== */

    audio {
        display:none !important;
    }

    #audiowrap,
    #plwrap {
        margin:0 auto;
    }

    #tracks {
        font-size:0;
        position:relative;
        text-align:center;
    }

    #nowPlay {
        display:block;
        font-size:0;
    }

    #nowPlay span {
        display:inline-block;
        font-size:1.05rem;
        vertical-align:top;
    }

    #nowPlay span#npAction {
        padding:21px;
        width:30%;
        display: none;
    }

    #nowPlay span#npTitle {
        padding:0.3rem 0;
        text-align:center;
        width:100%;
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 28px;
        line-height: 1.2;
        /* identical to box height */

        letter-spacing: 0.02em;

        color: #8090AD;
    }
    #npPara{
        text-align:center;
        width:100%;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 28px;

        color: #8090AD;
    }
    #plList{
        overflow-y: auto;
        height: 550px;
    }
    #plList li {
        cursor:pointer;
        display:block;
        margin:0;
        padding:21px 0;
        border-bottom: 3px solid #ECEFF5;
    }

    #plList li:hover span{
        color: #000;
    }

    .plItem {
        position:relative;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
    .names{
        display: flex;
        flex-direction: column;

    }

    .plTitle {
        text-overflow:ellipsis;
        white-space:nowrap;
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 37px;
        /* identical to box height */

        letter-spacing: 0.02em;

        color: #8090AD;
    }
    .pltagname{
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 28px;

        color: #8090AD;

    }


    .plLength {
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 28px;

        color: #8090AD;
    }

    .plSel span,
    .plSel:hover span{
        color:#000 !important;
        cursor:default !important;
    }

    #tracks a {
        border-radius:3px;
        color:#8090AD;
        cursor:pointer;
        display:inline-block;
        font-size:2.3rem;
        line-height:.2;
        margin: 2rem 0;
        padding: 1rem 1rem;
        text-decoration:none;
        transition: background .3s ease;

    }

    #tracks a:hover,
    #tracks a:active {
        background-color:rgba(0, 0, 0, .1);
        color:#000;
    }

    #tracks a::-moz-focus-inner {
        border:0;
        padding:0;
    }


    /* Plyr Overrides
    ================================================== */

    .plyr--audio .plyr__controls {
        background-color:transparent;
        border:none;
        color:#8090AD;
        font-family:"Source Sans Pro", arial, sans-serif;
        padding:20px 20px 20px 13px;
        width:100%;
    }
    .plyr__controls{
        justify-content: space-around !important;
    }
    .plyr__control{
        margin-right: 0 !important;
    }

    a.plyr__controls__item.plyr__control:hover,
    .plyr--audio .plyr__controls button:hover,
    .plyr--audio .plyr__controls button.tab-focus:focus,
    .plyr__play-large {
        background-color:rgba(0, 0, 0, .1);
    }

    .plyr__progress--played,
    .plyr__volume--display {
        color:rgba(0, 0, 0, .1);
    }

    .plyr--audio .plyr__progress--buffer,
    .plyr--audio .plyr__volume--display {
        background-color:rgba(0, 0, 0, .1);
    }

    .plyr--audio .plyr__progress--buffer {
        color:rgba(0, 0, 0, .1);
    }

    .plyr--full-ui input[type="range"] {
        width:100%;
    }

    .plyr__controls .plyr__controls__item.plyr__time {
        font-size:14px;
        margin-left:7px;
    }
    .plyr__progress__container{
        position: absolute;
        bottom: -1rem;
        left: 0;
        width: 100%;

    }

    @media(max-width: 1536px){


        .add-bottom { margin-bottom:1rem !important; }

        /* Audio Player Styles
        ================================================== */



        #nowPlay span {
            font-size:1.05rem;
        }

        #nowPlay span#npTitle {
            padding:0.3rem 0;
            font-size: 22px;
            line-height: 1.2;
        }
        #npPara{
            font-size: 18px;
        }
        #plList{
            overflow-y: auto;
            height: 400px;
        }
        #plList li {
            padding:15px 0;
        }

        .plTitle {
            font-size: 20px;
            line-height: 1.2;
        }
        .pltagname{
            font-size: 17px;
            line-height: 28px;
        }


        .plLength {
            font-size: 15px;
            line-height: 1.1;
        }


        #tracks a {
            font-size:1.5rem;
            line-height:.2;
            margin: 1rem 0;
            padding: 0.7rem 0.7rem;
        }

    }


    @media(max-width: 1024px){


        .add-bottom { margin-bottom:1rem !important; }

        /* Audio Player Styles
        ================================================== */



        #nowPlay span {
            font-size:1rem;
        }

        #nowPlay span#npTitle {
            padding:0.2rem 0;
            font-size: 20px;
            line-height: 1.2;
        }
        #npPara{
            font-size: 16px;
        }
        #plList{
            overflow-y: auto;
            height: 600px;
        }
        #plList li {
            padding:12px 0;
        }

        .plTitle {
            font-size: 19px;
            line-height: 1.2;
        }
        .pltagname{
            font-size: 16px;
            line-height: 28px;
        }


        .plLength {
            font-size: 13px;
            line-height: 1.1;
        }


        #tracks a {
            font-size:1.5rem;
            line-height:.2;
            margin: 1rem 0;
            padding: 0.7rem 0.7rem;
        }

    }



    @media(max-width: 768px){



        .add-bottom { margin-bottom:1rem !important; }

        /* Audio Player Styles
        ================================================== */



        #nowPlay span {
            font-size:1rem;
        }

        #nowPlay span#npTitle {
            padding:0.2rem 0;
            font-size: 20px;
            line-height: 1.2;
        }
        #npPara{
            font-size: 16px;
        }
        #plList{
            overflow-y: auto;
            height: 500px;
        }
        #plList li {
            padding:12px 0;
        }

        .plTitle {
            font-size: 19px;
            line-height: 1.2;
        }
        .pltagname{
            font-size: 16px;
            line-height: 28px;
        }


        .plLength {
            font-size: 13px;
            line-height: 1.1;
        }


        #tracks a {
            font-size:1.5rem;
            line-height:.2;
            margin: 1rem 0;
            padding: 0.7rem 0.7rem;
        }

    }


    /* Media Queries
    ================================================== */

    @media only screen and (max-width:600px) {
        #nowPlay span#npAction { display:none; }
        #nowPlay span#npTitle { display:block; text-align:center; width:100%; }
    }
</style>


@section('content')
    <div class="books_category" style="background: #EFFFF5;">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a href="{{ route('libary') }}" class="button active">Barchasi</a></li>
                    <li class="splide__slide"><a class="button">Назм</a></li>
                    <li class="splide__slide"><a class="button">Наср</a></li>
                    <li class="splide__slide"><a class="button">Драма</a></li>
                    <li class="splide__slide"><a class="button">Фольклор</a></li>
                    <li class="splide__slide"><a class="button">Илмий</a></li>
                    <li class="splide__slide"><a class="button">Маърифий</a></li>
                    <li class="splide__slide"><a class="button">Аудио китоб</a></li>
                    <li class="splide__slide"><a class="button">Журналлар</a></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="all_books container mx-auto">

            <div class="all_books_nazm_box">
                <div class="second-content-head flex items-center justify-between">
                    <h1 class="">{{ $category->name }}</h1>
                </div>
                <div class="line-gradient"></div>

                <div class="nazm_cards">
                    @foreach($books as $book)
                        <div class="all_books_card">
                            <div class="all_books_card_box">
                                <div class="card_box_img">
                                    @php $image = json_decode($book->image); @endphp
                                    <img src="{{ Voyager::image($image[0]) }}" alt="">
                                </div>
                                <div class="all_books_back-line"></div>
                                <div class="bookmark_all_books">
                                    <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                                </div>
                            </div>
                            <div class="all_books_star">
                                @for ($i = 1; $i <= 8; $i++)
                                    @if ($book->stars >= $i)
                                        <img src="../images/starfull.png" alt="">
                                    @else
                                        <img src="../images/star.png" alt="">
                                    @endif
                                @endfor
                            </div>
                            <div class="all_books_text" style="margin-top: 8px">
                                <a href="{{ route('singleBook', ['id' => $book->id]) }}">{{ $book->title }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

    </section>


    <!-- Audio uchun script kodlari -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="http://api.html5media.info/1.1.8/html5media.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>

    <script type="text/javascript">
        // Mythium Archive: https://archive.org/details/mythium/

        jQuery(function ($) {
            'use strict'
            var supportsAudio = !!document.createElement('audio').canPlayType;
            if (supportsAudio) {
                // initialize plyr
                var player = new Plyr('#audio1', {
                    controls: [
                        'restart',
                        'play',
                        'progress',
                        'current-time',
                        'duration',
                        'mute',
                        'volume',
                        'download'
                    ]
                });
                // initialize playlist and controls
                var index = 0,
                    playing = false,
                    mediaPath = '../audios/',
                    extension = '',
                    tracks = [{
                        "track": 1,
                        "name": "Muhabbat",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "a"
                    }, {
                        "track": 2,
                        "name": "O’tmishdan ertaklar",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "1"
                    },{
                        "track": 3,
                        "name": "O’tmishdan ertaklar",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "a"
                    }, {
                        "track": 4,
                        "name": "O’tmishdan ertaklar",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "1"
                    }, {
                        "track": 5,
                        "name": "O’tmishdan ertaklar",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "1"
                    }, {
                        "track": 5,
                        "name": "O’tmishdan ertaklar",
                        "tagname": "Abdulla Qahhor",
                        "date": "12.04.2021",
                        "file": "1"
                    }],
                    buildPlaylist = $.each(tracks, function(key, value) {
                        var trackNumber = value.track,
                            trackName = value.name,
                            tracktagName = value.tagname,
                            trackDuration = value.date;
                        if (trackNumber.toString().length === 1) {
                            trackNumber = '0' + trackNumber;
                        }
                        $('#plList').append('<li> \
                    <div class="plItem"> \
                        <div class="names"> \
                            <span class="plTitle">' + trackName + '</span> \
                            <span class="pltagname">' + tracktagName + '</span> \
                        </div> \
                        <span class="plLength">' + trackDuration + '</span> \
                    </div> \
                </li>');
                    }),
                    trackCount = tracks.length,
                    npAction = $('#npAction'),
                    npTitle = $('#npTitle'),
                    npPara = $('#npPara'),
                    audio = $('#audio1').on('play', function () {
                        playing = true;
                        npAction.text('Now Playing...');
                    }).on('pause', function () {
                        playing = false;
                        npAction.text('Paused...');
                    }).on('ended', function () {
                        npAction.text('Paused...');
                        if ((index + 1) < trackCount) {
                            index++;
                            loadTrack(index);
                            audio.play();
                        } else {
                            audio.pause();
                            index = 0;
                            loadTrack(index);
                        }
                    }).get(0),
                    btnPrev = $('#btnPrev').on('click', function () {
                        if ((index - 1) > -1) {
                            index--;
                            loadTrack(index);
                            if (playing) {
                                audio.play();
                            }
                        } else {
                            audio.pause();
                            index = 0;
                            loadTrack(index);
                        }
                    }),
                    btnNext = $('#btnNext').on('click', function () {
                        if ((index + 1) < trackCount) {
                            index++;
                            loadTrack(index);
                            if (playing) {
                                audio.play();
                            }
                        } else {
                            audio.pause();
                            index = 0;
                            loadTrack(index);
                        }
                    }),
                    li = $('#plList li').on('click', function () {
                        var id = parseInt($(this).index());
                        if (id !== index) {
                            playTrack(id);
                        }
                    }),
                    loadTrack = function (id) {
                        $('.plSel').removeClass('plSel');
                        $('#plList li:eq(' + id + ')').addClass('plSel');
                        npTitle.text(tracks[id].name );
                        npPara.text( tracks[id].tagname);
                        index = id;
                        audio.src = mediaPath + tracks[id].file + extension;
                        updateDownload(id, audio.src);
                    },
                    updateDownload = function (id, source) {
                        player.on('loadedmetadata', function () {
                            $('a[data-plyr="download"]').attr('href', source);
                        });
                    },
                    playTrack = function (id) {
                        loadTrack(id);
                        audio.play();
                    };
                extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
                loadTrack(index);
            } else {
                // no audio support
                $('.column').addClass('hidden');
                var noSupport = $('#audio1').text();
                $('.container').append('<p class="no-support">' + noSupport + '</p>');
            }
        });

    </script>

@endsection
