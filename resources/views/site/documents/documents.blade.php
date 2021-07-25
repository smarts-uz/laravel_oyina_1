@extends('site.layouts.app')

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
    @media (max-width: 419px){
        #center {
            display: flex !important;
        }
    }

</style>
@section('content')
    <div class="mediateka_category" style="background: #EFFFF5;" id="filtercontainer">
        <div class="container flex justify-between mx-auto splide mediateka_splide">
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

    @foreach($categories as $category)
        <div class="container mx-auto my-8 category-news main_document">
            <div class="flex items-center justify-between section-two-content-one-head">
                <h1 class="">{{ $category->name }}</h1>
                <a href="{{ route('documentCategory', ['category_slug' => $category->slug]) }}">Barchasi</a>
            </div>
            <div class="line-gradient-two"></div>
            <div class="flex category-news-content">
                <div class="section-three-cards documents_card">
                    <x-documentcategory :category="$category->id"/>
                    {{--@foreach($documents as $document)
                        <a data-fancybox data-type="iframe" href="../pdf/a.pdf"  class="flex flex-row items-center justify-center align-middle cards-flag">
                            <div class="gerb-img">
                                <img src="./images/gerb.png" alt="Gerb">
                            </div>
                            <p>{{ $document->title }}</p>
                        </a>
                    @endforeach--}}
                </div>
            </div>
        </div>
    @endforeach


@endsection
