{{-- Media section --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
<style>

    .awesome-gally .fancybox-inner {
        background: #0c1019;
        /*background: rgba(0, 0, 0, .5);*/
        height: 100%;
        top: 50%;
        right: 0 !important;
        transform: translateY(-50%);
    }

    .awesome-gally .fancybox-thumbs {
        top: auto;
        width: auto;
        bottom: 0;
        left: 0;
        right: 0;
        height: 70px;
        padding: 10px 10px 5px 10px;
        box-sizing: border-box;
        background: none;
        margin: 0 auto;
    }

    .awesome-gally .fancybox-thumbs .fancybox-thumbs__list {
        margin: 0 auto;
        max-width: 80% !important;
        overflow: hidden;
    }

    .awesome-gally .fancybox-thumbs .fancybox-thumbs__list a {
        opacity: 0.5;
        transition: opacity 0.3s ease;
        height: 50px;
        width: 70px;
    }

    .awesome-gally .fancybox-thumbs .fancybox-thumbs__list a:hover {
        opacity: 1;
    }

    .awesome-gally .fancybox-thumbs .fancybox-thumbs__list a.fancybox-thumbs-active {
        opacity: 1;
    }

    .awesome-gally .fancybox-thumbs .fancybox-thumbs__list a::before {
        border-width: 3px;
        border-color: #0445b1;
    }

    .awesome-gally .fancybox-slide--image {
        padding: 100px 0 40px 0 !important;
    }

    .awesome-gally .fancybox-caption {
        top: 0;
        text-align: center;
        width: 100%;
        margin: 20px auto;
        padding: 0;
        padding-left: 2rem;
        background: none;
        font-size: 16px;
        color: #fff;
    }

    .awesome-gally .fancybox-caption .fancybox-caption__body {
        position: absolute;
        width: 200px;
        bottom: 60px;
        display: -webkit-box;
        -webkit-line-clamp: 15;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-align: left;
    }
    .awesome-gally .fancybox-caption .fancybox-caption__body span{
        display: block;
        margin: 5px 0;
        font-size: 14px;
    }

    .awesome-gally .fancybox-navigation .fancybox-button {
        background: none;
    }

    .awesome-gally .fancybox-navigation .fancybox-button div,
    .awesome-gally .fancybox-toolbar .fancybox-button {
        background: none;
        border: 2px solid #fff;
        border-radius: 50%;
        color: #fff;
    }

    .awesome-gally .fancybox-navigation .fancybox-button:disabled div {
        opacity: 0.5;
    }

    .awesome-gally .fancybox-navigation .fancybox-button:hover div,
    .awesome-gally .fancybox-toolbar .fancybox-button:hover {
        border-color: #1EB980;
        color: #1EB980;
    }

    .awesome-gally .fancybox-navigation .fancybox-button--arrow_right {
        right: 200px;
    }

    .awesome-gally .fancybox-navigation .fancybox-button--arrow_left {
        left: 200px;
    }

    .awesome-gally .fancybox-toolbar {
        height: 100%;
    }

    .awesome-gally .fancybox-toolbar .fancybox-button {
        background: none;
    }

    .awesome-gally .fancybox-toolbar .fancybox-button--close {
        top: 30px;
        right: 20px !important;
    }

    .awesome-gally .fancybox-toolbar .fancybox-button--share,
    .awesome-gally .fancybox-toolbar .fancybox-button--download,
    .awesome-gally .fancybox-toolbar .fancybox-button--close {
        right: 50px;
        position: absolute;
        opacity: 0.7;
        width: 38px;
        height: 38px;
        padding: 7px;
    }

    .awesome-gally .fancybox-toolbar .fancybox-button--share{
        bottom: 200px;
    }

    .awesome-gally .fancybox-toolbar .fancybox-button--download{
        bottom: 140px;
    }


    @media (max-width: 1024px){

        .awesome-gally .fancybox-navigation .fancybox-button--arrow_right {
            right: 20px;
        }

        .awesome-gally .fancybox-navigation .fancybox-button--arrow_left {
            left: 20px;
        }

    }

    @media(max-width: 768px){

        .awesome-gally .fancybox-caption .fancybox-caption__body {
            position: absolute;
            width: 90%;
            bottom: 60px;
        }
        .awesome-gally .fancybox-toolbar .fancybox-button--share,
        .awesome-gally .fancybox-toolbar .fancybox-button--download,
        .awesome-gally .fancybox-toolbar .fancybox-button--close {
            right: 20px;

        }
    }
</style>
<section class="media">

    <div class="container mx-auto flex items-center justify-between">
        <div id="filters-media" class="filters-media flex">
          <button class="filter-option active-1" data-filter="video" onclick=filtervidfoto(event)>@lang('site.content_menus.video') <div class="div-bootom-line"></div></button>
          <button class="filter-option"  data-filter="foto" onclick=filtervidfoto(event)>@lang('site.content_menus.foto') <div class="div-bootom-line"></div></button>
        </div>
        <a href="{{ route('multimedia') }}" class="all-media">@lang('site.navbar.all')</a>
    </div>
    <div class="media_filter_container flex flex-row items-center">
        <div class="transform">MEDIA</div>
      <div class="swiper-container mediaswipe video">



          {{--    Videolar uchun--}}
          @foreach($videos as $key => $item)
              <div style="display:none;" id="video{{ $key + 1 }}">
                  <video class="lg-video-object lg-html5 video-js vjs-default-skin"  controls preload="">
                      <source src="{{ Voyager::image($item->video) }}" type="video/mp4">
                  </video>
              </div>
          @endforeach


        <div class="swiper-wrapper" id="video-gallery_main">


         @foreach($videos as $key => $item)
            <div class="swiper-slide " data-poster="{{ Voyager::image($item->image) }}" data-html="#video{{ $key + 1 }}">
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
              <a href="#">{{ $item->title }} </a>
          </div>
         @endforeach

        </div>
      </div>

            <div class="swiper-container splide fotoswipe foto hidden" id="splidefoto">
                <div class="splide__track">
                    <div class="splide__list">
                    @foreach($photos as $key => $photo)
                      <div class="splide__slide ">
                          @php $images = json_decode($photo->content); @endphp
                          @foreach($images as $image)
                              @if ($loop->first)
                                <a href="{{ Voyager::image($image) }}" data-fancybox="img{{ $key + 1 }}" data-caption="{{ $photo->title }} <span>{{ \Carbon\Carbon::parse($photo->created_at)->format('H:m / d.m.Y') }}</span>" class="relative link-img-video block photos boxItem">
                                  <img src="{{ Voyager::image($image) }}" alt="">
                                </a>
                              @endif
                          @endforeach
                          <div class="media-date flex items-center">
                              <span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>
                              <span>{{ \Carbon\Carbon::parse($photo->created_at)->format('H:m / d.m.Y') }}</span>
                          </div>
                          <a>{{ $photo->title }}</a>

                      </div>
                            <!-- data-fancybox="img1" ga tegishli rasmlar galeriyasi Data caption tepadagi bilan bir xil boladi  -->
                      <div style="display:none;">
                          @foreach($images as $image)
                              <a style="display: none;" class="boxItem relative link-img-video block photos" href="{{ Voyager::image($image) }}" data-fancybox="img{{ $key + 1 }}" data-caption="{{ $photo->title }} <span>{{ \Carbon\Carbon::parse($photo->created_at)->format('H:m / d.m.Y') }}</span>">
                                  <img src="{{ Voyager::image($image) }}" alt="">
                              </a>
                          @endforeach
                      </div>
                    @endforeach

                    </div>
                </div>
            </div>
    </div>
</section>



