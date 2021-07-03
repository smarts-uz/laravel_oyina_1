
      <div class="second-content">
        <div class="second-content-head flex items-center justify-between">
          <h1 class="">So’nggi yangiliklar</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient"></div>

        @foreach($news as $item)
              <div class="second-content-body flex">
                  <div class="img-content">
                      <img src="{{ Voyager::image($item->thumbnail('small', 'image')) }}" alt="">
                  </div>
                  <div class="text-content-second">
                      <div class="icon-text flex items-center justify-between align-middle">
                          <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>{{ $item->category->name }}</p>
                          <div class="date-icons flex items-center">
                              <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($item->created_at)->format('H:m / d.m.Y') }}</span>
                              <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                          </div>
                      </div>
                      <a class="" href="posts/firibgarlarga-aldanib-qolmaslik-bo-yicha-yetti-tavsiya">{{ $item->title }}</a>
                  </div>
              </div>
              @if (!$loop->last)
                  <div class="line-hr"></div>
              @endif
        @endforeach




      </div>
