        <div class="section-three-first-content-head-text flex items-center justify-between">
          <h1 class="">Ilm-fan yangiliklari</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient-four"></div>
        <div class="section-three-cards-two flex">
        @foreach($news as $item)
          <a href="{{ route('singlePost', ['post' => $item->slug]) }}" class="cards-item">
            <img src="{{ Voyager::image($item->thumbnail('medium', 'image')) }}" alt="">
            <span class="bookmark3"><span class=" iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span></span>
            <span class="cards-icon flex items-center text-white"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>
                {{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>
            <p class="text-white">{{ $item->title }}</p>
          </a>
        @endforeach

        </div>
