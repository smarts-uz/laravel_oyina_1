<div class="section-two-content-one-head flex items-center justify-between">
          <h1 class="">@lang('site.content_menus.current')</h1>
          <a href="{{ route('postType', ['id' => 1]) }}">@lang('site.navbar.all')</a>
        </div>
        <div class="line-gradient-two"></div>
        <div class="news-content flex">

          {{-- Dolzarb --}}
        @foreach($news as $item)
          <div class="news-content-main">
            <div class="news-img">
              <img src="{{ Voyager::image($item->thumbnail('cropped', 'image')) }}" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date">
              <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>
            </div>
            <a href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>
          </div>
        @endforeach
        </div>
