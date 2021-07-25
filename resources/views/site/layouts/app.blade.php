<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="content-language" content="{{ str_replace('_', '-', app()->getLocale()) }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/news.css') }}">
        {{--<link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/news.css">--}}
          <!-- Mediatwk -->
        <link rel="stylesheet" href="{{ asset('css/mediateka.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
        <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">


        <!-- Announcement link -->
        <link rel="stylesheet" href="{{ asset('css/announcement.css') }}">

        <!-- Books -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
        <link rel="stylesheet" href="{{ asset('css/books.css') }}">

{{--        Document--}}
        <link rel="stylesheet" href="{{ asset('css/document.css') }}">

        <link rel="stylesheet" type="text/css" href="./css/splide.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/glide.core.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/glide.theme.min.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

{{--        Error modal css--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link rel="stylesheet" href="{{ asset('css/errormodal.css') }}">

{{--Contact--}}
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

        <link rel="stylesheet" href="{{ asset('css/symbol.css') }}">




        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <style>
            .filter{
                filter: grayscale(100%);
            }
            .darkfilter{
                background-color: rgb(0,0,0,0.5);

            }
            html.darkfilter {
                background: #121212;
                filter: grayscale(100%) contrast(200%);

            }
            html.darkfilter h1, html.darkfilter p, html.darkfilter a, html.darkfilter span, html.darkfilter h2, html.darkfilter h3, html.darkfilter h4, html.darkfilter h5, html.darkfilter div{
                color: #eee !important;

            }

        </style>


    </head>
    <body class="font-sans antialiased" onkeypress="ctrlEnter(event, this);">
        <a id="headerpage"></a>

        <x-navbar/>

        <x-settings/>

        @yield('content')
{{--        Error modali--}}
        <div id="ex1" class="modal error_modal">
            <form>
                <div class="error_content">

                    <textarea class="error_text" id="error"></textarea>
                    <input type="text" name="" placeholder="Ismingiz" required>
                    <input type="text" name="" placeholder="Emailgiz" required>

                </div>


                <input type="submit" name="" value="Yuborish">
            </form>
        </div>

        <x-footer/>

        <a href="#headerpage"  class="topbtn " id="myBtn" title="Go to top">
            <p class="flex items-center justify-center w-full h-full align-center"><svg width="25" height="18" viewBox="0 0 37 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.6525 22L18.5 8.40216L4.3475 22L3.44872e-06 17.8138L18.5 -2.19738e-06L37 17.8138L32.6525 22Z" fill="white"/>
                </svg>
            </p>
        </a>

    </body>


{{--    <script src="https://code.responsivevoice.org/responsivevoice.js?key=MjGmRzg5"></script>--}}
    <!-- Scripts -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <!-- Mediatek -->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
        <script type="text/javascript" src="{{ asset('js/lg-thumbnail.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/lg-rotate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/lg-video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fancybox.min.js') }}"></script>

        <!-- Mediatek -->
        <script src="http://vjs.zencdn.net/4.12/video.js"></script>

        



    <script src="{{ mix('js/app.js') }}" defer></script>

    <script type="text/javascript" src="{{ asset('js/splide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/splide.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/glide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/glide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mainvideo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/settings.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/top.js') }}"></script>

     <!-- Mediatek -->
    <script type="text/javascript" src="{{ asset('js/mediateka.js') }}"></script>


    <!-- books -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="{{ asset('js/books.js') }}"></script>

{{--Error modal--}}

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script type="text/javascript">





        function ctrlEnter(event, formElem)
        {
            if((event.ctrlKey) && ((event.keyCode == 0xA)||(event.keyCode == 0xD)))
            {
                function getSelectionText() {
                    var text = "";
                    var activeEl = document.activeElement;
                    var activeElTagName = activeEl ? activeEl.tagName.toLowerCase() : null;
                    if (
                        (activeElTagName == "textarea") || (activeElTagName == "input" &&
                        /^(?:text|search|password|tel|url)$/i.test(activeEl.type)) &&
                        (typeof activeEl.selectionStart == "number")
                    ) {
                        text = activeEl.value.slice(activeEl.selectionStart, activeEl.selectionEnd);
                    } else if (window.getSelection) {
                        text = window.getSelection().toString();
                    }
                    return text;
                }
                if(getSelectionText()){
                    $("#ex1").modal({
                        fadeDuration: 100
                    });

                    document.getElementById('error').value = getSelectionText();

                }

            }

        }
    </script>
</html>
