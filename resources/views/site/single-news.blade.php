@extends('site.layouts.app')

@section('content')

<section>
    <x-category/>
    <div class="section-one-content single-news container mx-auto flex">
        <div class="first-content">
            <img class="" src="../images/img1.png" alt="">
            <div class="bookmark flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
            </div>
                
            <p class="text-white"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
            <div class="text-content">
            
                <div class="statics flex items-center gap-x-8 my-4" >
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                    <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                </div>
            </div>
        </div>
    </div>
  </section>

    <div class="container mx-auto single-news">
        <div class="single-news-headtext">
            <h1>Tadbirkorlarni qo‘llab-quvvatlash bo‘yicha qo‘shimcha mexanizmlar yaratiladi</h1>
        </div>
        <div class="single-news-paragraph">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur quos eligendi, corporis reiciendis quo incidunt eum, culpa dolores accusamus laudantium laboriosam omnis ad magni iusto, illo voluptates? Quibusdam, sequi?</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur quos eligendi, corporis reiciendis quo incidunt eum, culpa dolores accusamus laudantium laboriosam omnis ad magni iusto, illo voluptates? Quibusdam, sequi?</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur quos eligendi, corporis reiciendis quo incidunt eum, culpa dolores accusamus laudantium laboriosam omnis ad magni iusto, illo voluptates? Quibusdam, sequi?</p>   
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur quos eligendi, corporis reiciendis quo incidunt eum, culpa dolores accusamus laudantium laboriosam omnis ad magni iusto, illo voluptates? Quibusdam, sequi?</p>
        </div>
    </div>
@endsection