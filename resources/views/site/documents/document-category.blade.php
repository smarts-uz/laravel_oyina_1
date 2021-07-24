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
    <div class="section-one-content single_document container mx-auto">
        <div class="document_one_content">
            <div class="single_document_headtext">
                <h1>{{ $document->title }}</h1>
            </div>
            <div class="single_document_paragraph">
                {!! $document->content !!}
            </div>
        </div>

        <x-document >
        </x-document>

    </div>
  </section>


@endsection
