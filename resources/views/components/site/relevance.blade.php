{{-- Allomalar haqida section --}}
<section class="relevance">

    <div class="container flex items-center justify-between mx-auto align-middle">
      <div id="filters-relevance" class="flex filters-relevance">
        <button class="filter-option-relevance " data-filter="day" onclick=filterrelevance(event)>@lang('site.content_menus.rel_day')<div class="div-bootom-line-relevance"></div></button>
        <button class="filter-option-relevance"  data-filter="week" onclick=filterrelevance(event)>@lang('site.content_menus.rel_week') <div class="div-bootom-line-relevance"></div></button>
        <button class="filter-option-relevance active-4"  data-filter="month" onclick=filterrelevance(event)>@lang('site.content_menus.rel_month') <div class="div-bootom-line-relevance"></div></button>
      </div>
      <a href="{{ route('news') }}" class="all-relevance">@lang('site.navbar.all')</a>
    </div>
    <div class="flex flex-row items-center align-middle">
        <div class="transform">@lang('site.content_menus.current')</div>
            <div class="swiper-container relevance-slide">
                <div class="swiper-wrapper">

                    {{-- Oy davomida --}}
                    @foreach ($relevance_month as $item)

                        <div class="swiper-slide month ">

                            <div class="rel-image">
                                <img src="{{ Voyager::image($item->thumbnail('medium', 'image')) }}" alt="">
                                <div class="absolute flex items-center justify-center bookmark-rel">
                                    <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                                </div>
                                <p class="absolute flex items-center text-white"><span class="text-white iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> {{ $item->category->name }}</p>
                            </div>
                            <div class="flex items-center justify-between rel-date">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                                <div class="flex items-center">
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> {{ $item->views }}</span>
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                                </div>
                            </div>
                            <a class="swiper-slide-text-link" href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>

                        </div>
                    @endforeach



                     {{-- Hafta davomida --}}

                    @foreach ($relevance_week as $item)
                        <div class="hidden swiper-slide week">

                            <div class="rel-image">
                                <img src="{{ Voyager::image($item->thumbnail('medium', 'image')) }}" alt="">
                                <div class="absolute flex items-center justify-center bookmark-rel">
                                    <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                                </div>
                                <p class="absolute flex items-center text-white"><span class="text-white iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> {{ $item->category->name }}</p>
                            </div>
                            <div class="flex items-center justify-between rel-date">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>{{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                                <div class="flex items-center">
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> {{ $item->views }}</span>
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                                </div>
                            </div>
                            <a class="swiper-slide-text-link" href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>
                            </div>
                    @endforeach

                    {{-- Kun davomida --}}
                    @foreach ($relevance_day as $item)
                        <div class="hidden swiper-slide day">

                            <div class="rel-image">
                                <img src="{{ Voyager::image($item->thumbnail('medium', 'image')) }}" alt="">
                                <div class="absolute flex items-center justify-center bookmark-rel">
                                    <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                                </div>
                                <p class="absolute flex items-center text-white"><span class="text-white iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> {{ $item->category->name }}</p>
                            </div>
                            <div class="flex items-center justify-between rel-date">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>{{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                                <div class="flex items-center">
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> {{ $item->views }}</span>
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                                </div>
                            </div>
                            <a class="swiper-slide-text-link" href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>
                        </div>
                    @endforeach

                 </div>
            </div>
    </div>
  </section>
