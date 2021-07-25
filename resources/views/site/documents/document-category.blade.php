@extends('site.layouts.app')

@section('content')

<section>
    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="splide mediateka_splide container mx-auto flex justify-between">
            <div class="splide__track" style="order: 1;">
                <ul class="splide__list">
                    <li class="splide__slide "><a class="button active">Barchasi</a></li>
                    <li class="splide__slide"><a class="button">Қонунлар</a></li>
                    <li class="splide__slide"><a class="button">Фармонлар</a></li>
                    <li class="splide__slide"><a class="button">Қарорлар</a></li>
                    <li class="splide__slide"><a class="button">Фармойишлар</a></li>
                    <li class="splide__slide"><a class="button">Буйруқлар</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="category-news container mx-auto my-8 main_document">
        <div class="section-two-content-one-head flex items-center justify-between">
            <h1 class="">{{ $category->name }}</h1>
        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex">
            <div class="section-three-cards documents_card">
                @foreach($documents as $document)
                    @php
                        $file = json_decode($document->content);
                    @endphp
                    <a data-fancybox data-type="iframe" href="{{ Voyager::image($file[0]->download_link) }}"  class="cards-flag flex flex-row justify-center items-center align-middle">
                        <div class="gerb-img">
                            <img src="{{ asset('images/gerb.png') }}" alt="Gerb">
                        </div>
                        <p>{{ $document->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
  </section>


@endsection
