@extends('site.layouts.app')

@section('content')



  {{-- Yangiliklar section --}}
  <section class="news-filter-dark">
    {{--<x-category/>--}}
    <div class="container flex mx-auto section-one-content">
        <x-newsvideo/>
        <x-latest-news limit=4/>
    </div>
  </section>


  {{-- Second section --}}
  <section class="container flex mx-auto section-two">
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

  <section class="container flex mx-auto section-three ">
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
      <div class="flex book-layer">
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
  <section class="container flex mx-auto article ">
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
  <section class="container mx-auto section-five">
    <x-interviews/>
  </section>


  {{-- Section Dolzarb sider --}}
  <x-relevance/>

{{-- section 6 havolalar --}}
  <section class="container mx-auto section-six">
    <x-usefullink/>
  </section>

  @include('sweetalert::alert')
  <?php Session::forget('sweet_alert'); ?>

@endsection
