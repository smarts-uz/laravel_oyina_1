{{-- Allomalar haqida section --}}
<section class="books">

    <div class="container mx-auto flex items-center align-middle justify-between">
      <div class="filters-books flex">
        <button class="filter-option-books active-3" >@lang('site.content_menus.new_public') <div class="div-bootom-line-books"></div></button>
      </div>
      <a href="{{ route('libary') }}" class="all-books">@lang('site.navbar.all')</a>
    </div>
    <div class="flex flex-row items-center align-middle">
      <div class="transform">@lang('site.content_menus.literature')</div>
      <div class="swiper-container booksslide">
        <div class="swiper-wrapper">
            @foreach ($publications as $item)

          <div class="swiper-slide">
              <div class="slide-outline relative">
                  <div class="slide-inline">
                    @php
                        $images = json_decode($item->image);
                    @endphp
                    @foreach ($images as $i)
                      @if ($loop->first)
                        <img src="{{ Voyager::image($i) }}" alt="">
                      @endif
                    @endforeach
                  </div>
                  <div class="back-line absolute"></div>
                  <div class="bookmark-books flex justify-center items-center absolute">
                    <a href=""><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                  </div>
              </div>
              <div class="slide-star flex items-center">
                  @for ($i = 1; $i <= 8; $i++)

                    @if ( $item->stars >= $i)
                      <img src="../images/starfull.png" alt="">
                    @else
                      <img src="../images/star.png" alt="">
                    @endif

                  @endfor
              </div>

              <div class="slide-text">
                  <a href="{{ route('singleBook', ['id' => $item->id]) }}">{{ $item->title }}</a>
              </div>
          </div>
          @endforeach

        </div>
      </div>

    </div>
  </section>
