<div class="section-two-content-two-head flex items-center justify-between">
          <h1 class="">@lang('site.content_menus.not_heard')...</h1>
          <a href="{{ route('postType', ['id' => 2]) }}">@lang('site.navbar.all')</a>
        </div>
        <div class="line-gradient-three"></div>
        <div class="news-content flex">

        @foreach($news as $item)
          <div class="news-content-main">
            <div class="news-img-two">
              <img src="{{ Voyager::image($item->thumbnail('small', 'image')) }}" alt="">
              <div class="bookmark2 flex justify-center items-center">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
              </div>
            </div>
            <div class="news-date flex items-center justify-between flex-wrap">
              <span class="flex items-center"><div class="dot-green"></div><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span>
              {{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>
            </div>
            <div class="news_text_height">
               <a href="{{ route('singlePost', ['post' => $item->slug]) }}">{{ $item->title }}</a>
            </div>

          </div>
        @endforeach
        </div>
