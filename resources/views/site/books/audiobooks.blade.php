@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')
    <div class="books_category" style="background: #EFFFF5;">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a class="button active">Barchasi</a></li>
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
        <div class="second-content-head flex items-center justify-between">
            <h1 class="">Audio kitoblar</h1>
        </div>
        <div class="line-gradient"></div>

        <div class="allbooks_cards">
          @foreach($books as $book)
            <div class="all_books_card">
                <div class="all_books_card_box">
                    <div class="card_box_img">
                        <img src="{{ Voyager::image(json_decode($book->image)[0]) }}" alt="">
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
                    <a href="{{ route('audiobook', ['id' => $book->id]) }}">{{ $book->title }}</a>
                </div>
            </div>
          @endforeach
        </div>

    </section>




@endsection
