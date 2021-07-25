@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')
    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="container flex justify-between mx-auto splide mediateka_splide">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a href="{{ route('multimedia') }}" class="button">Barchasi</a></li>
                    <li class="splide__slide"><a href="{{ route('photo') }}" class="button active">Foto</a></li>
                    <li class="splide__slide"><a href="{{ route('video') }}" class="button">Video</a></li>
                    <li class="splide__slide"><a href="{{ route('audio') }}" class="button">Audio</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="container mx-auto mediateka">
        <!-- Media fotolari -->
        <div class="mediateka_photo ">
            <div class="flex items-center justify-between second-content-head">
                <h1 class="">Fotolavhalar</h1>
            </div>
            <div class="line-gradient"></div>

            <ul class="mediateka_photo_cards_single">
                 @foreach($photos as $key => $photo)
                <!--  data-fancybox bir xil bolganlari bitta galaeriyada ochadi  -->
                    @php $images = json_decode($photo->content); @endphp
                    @foreach($images as $image)
                        @if ($loop->first)
                            <a class="boxItem" href="{{ Voyager::image($image) }}" data-fancybox="img{{ $key + 1 }}" data-caption="{{ $photo->title }} <span>{{ \Carbon\Carbon::parse($photo->created_at)->format('H:m / d.m.Y') }}</span>">
                                <div class="mediateka_photo_content">
                                    <img src="{{ Voyager::image($image) }}" alt="">
                                </div>
                        @endif
                    @endforeach
                                <div class="flex items-center media-date">
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

    </section>



@endsection
