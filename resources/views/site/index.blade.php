@extends('site.layouts.app')

@section('content')



  {{-- Yangiliklar section --}}
  <section>
    <x-category/>
    <div class="section-one-content container mx-auto flex">
        <x-newsvideo/>
        <x-latest-news/>
    </div>
  </section>


  {{-- Second section --}}
  <section class="section-two container mx-auto flex">
    <div class="section-two-content-one">
      <div class="news-one">
      <!-- Dolzarb -->
        <x-current/>

        {{-- Eshitmadim demanglar --}}
        <x-heard/>
      </div>
    </div>
    <div class="section-two-content-two">
      <div class="section-two-content-two-main">
          <!-- Boqiy hikmatlar  -->
        <x-wisdom/>

      </div>
    </div>
  </section>


  {{-- Media section --}}

  <x-mediaslider/>

  <section class="container mx-auto section-three flex ">
    <div class="section-three-first-content">
      <div class="section-three-first-content-head-one">
        {{-- Ilm-fan yangiliklar section --}}
        <x-science/>

      </div>

      <div class="section-three-first-content-head-two">
        <x-newdocument/>

      </div>

    </div>
    <div class="section-three-second-content">
      <div class="book-layer flex">
        <x-dayhistory/>
      </div>
      <div class="section-three-second-content-main">
        <x-morereading/>

      </div>


    </div>
  </section>

  {{-- Section Buyuklar hayoti slider --}}
<x-scholars/>


  {{-- Section 4 Maqolalar --}}
  <section class="article container mx-auto flex ">
    <div class="article-content-one">
      <div class="article-content-one-head">
        <x-article/>

      </div>
    </div>

    <div class="article-content-two">
      <x-audiobook/>
    </div>
  </section>



  {{-- Section book slide --}}
  <x-bookslide/>

  {{-- Section five --}}
  <section class="section-five container mx-auto">
    <x-interviews/>

  </section>


  {{-- Section Dolzarb sider --}}
  <x-relevance/>

{{-- section 6 havolalar --}}
  <section class="section-six container mx-auto">
    <x-usefullink/>
  </section>

  @include('sweetalert::alert')
  <?php Session::forget('sweet_alert'); ?>

@endsection
