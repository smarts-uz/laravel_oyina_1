<style>
                /* audio */

        @import url("https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap");






        .add-bottom { margin-bottom:0rem !important; }
        .left { float:left; }
        .right { float:right; }
        .center { text-align:center; }
        .hidden { display:none; }

        .no-support {
                margin:0rem auto;
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
                font-size:1rem;
                vertical-align:top;
        }

        #nowPlay span#npTitle {
                padding:0.2rem 0;
                text-align:center;
                width:100%;
                font-family: Roboto;
                font-style: normal;
                font-weight: 500;
                font-size: 25px;
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
                font-size: 18px;
                line-height: 28px;

                color: #8090AD;
        }
        #plList{
                overflow-y: auto;
                height: 180px;
        }
        #plList li {
                cursor:pointer;
                display:block;
                margin:0;
                padding:15px 0;
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
                font-size: 20px;
                line-height: 1.1;
                /* identical to box height */

                letter-spacing: 0.02em;

                color: #8090AD;
        }
        .pltagname{
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 1.1;

                color: #8090AD;

        }


        .plLength {
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 15px;
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
                font-size:1.5rem;
                line-height:.2;
                margin: 0.5rem 0;
                padding: 0.3rem 1rem;
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
                        font-size:1rem;
                }

                #nowPlay span#npTitle {
                        padding:0.2rem 0;
                        font-size: 18px;
                        line-height: 1.1;
                }
                #npPara{
                        font-size: 15px;
                }
                #plList{
                        overflow-y: auto;
                        height: 160px;
                }
                #plList li {
                        padding:12px 0;
                }

                .plTitle {
                        font-size: 18px;
                        line-height: 1.1;
                }
                .pltagname{
                        font-size: 14px;
                        line-height: 1.1;
                }


                .plLength {
                        font-size: 13px;
                        line-height: 1.1;
                }


                #tracks a {
                        font-size:1.1rem;
                        line-height:1.2;
                        margin: 0.4rem 0;
                        padding: 0.2rem 0.7rem;
                }

        }


        @media(max-width: 1024px){


                .add-bottom { margin-bottom:1rem !important; }

                /* Audio Player Styles
                ================================================== */



                #nowPlay span {
                        font-size:0.8rem;
                }

                #nowPlay span#npTitle {
                        padding:0.2rem 0;
                        font-size: 20px;
                        line-height: 1.2;
                }
                #npPara{
                        font-size: 17px;
                }
                #plList{
                        overflow-y: auto;
                        height: 300px;
                }
                #plList li {
                        padding:11px 0;
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
                        font-size:1.2rem;
                        line-height:.2;
                        margin: 0.5rem 0;
                        padding: 0.4rem 0.7rem;
                }

        }



        @media(max-width: 768px){



                .add-bottom { margin-bottom:1rem !important; }

                /* Audio Player Styles
                ================================================== */



                #nowPlay span {
                        font-size:0.8rem;
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
                        font-size: 17px;
                        line-height: 1.2;
                }
                .pltagname{
                        font-size: 15px;
                        line-height: 28px;
                }


                .plLength {
                        font-size: 13px;
                        line-height: 1.1;
                }


                #tracks a {
                        font-size:1.2rem;
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

<div class="article-content-two-head-text flex items-center justify-between">
        <h1 class="">@lang('site.content_menus.audio_books')</h1>
        <a href="#">@lang('site.navbar.all')</a>
</div>
<div class="line-gradient-audio"></div>

<div class="column add-bottom">
        <div id="mainwrap">
                <div id="nowPlay">
                        <span id="npTitle"></span>
                        <span id="npPara"></span>
                </div>
                <div id="audiowrap">
                        <div id="audio0">
                                <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
                        </div>
                        <div id="tracks">
                                <a id="btnPrev"><span class="iconify" data-icon="grommet-icons:chapter-previous" data-inline="false"></span></a><a id="btnNext"><span class="iconify" data-icon="grommet-icons:chapter-next" data-inline="false"></span></a>
                        </div>
                </div>
                <div id="plwrap">
                        <ul id="plList"></ul>
                </div>
        </div>
</div>


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
           controls : [
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