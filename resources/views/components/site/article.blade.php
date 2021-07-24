<div class="article-content-one-head-text flex items-center justify-between">
          <h1 class="">@lang('site.header.articles')</h1>
          <a href="{{ route('articles') }}">@lang('site.navbar.all')</a>
        </div>
        <div class="line-gradient-four"></div>
        <div class="article-cards flex">
         @foreach($articles as $article)
          <a href="{{ route('article', ['id' => $article->id ]) }}" class="cards-item">
            @php  $images = json_decode($article->image); @endphp
            @foreach($images as $image)
                @if ($loop->first)
                    <img src="{{ Voyager::image($image) }}" alt="">
                @endif
              @endforeach
            <span class="bookmark3"><span class=" iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span></span>

            <p class="text-white">{{ $article->title }}</p>
          </a>
          @endforeach
        </div>
