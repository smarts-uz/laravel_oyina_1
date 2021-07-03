<div class="second-content-head flex items-center justify-between">
          <h1 class="">Ko‘p o‘qilgan</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient"></div>
      @foreach($news as $item)
        <div class="second-content-body flex">
          <div class="img-content relative">
            <img src="{{ Voyager::image($item->thumbnail('medium', 'image')) }}" alt="">
            <span class="eye-review flex"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4874</span>
          </div>
          <div class="text-content-second">
            <div class="icon-text flex items-center justify-between align-middle">
              <p class="bell flex items-center align-middle"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>{{ $item->category->name }}</p>
              <div class="date-icons flex items-center">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span>{{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>

              </div>
            </div>
            <a class="" href="#">{{ $item->title }}
              </a>
          </div>
        </div>

        @if (!$loop->last)
            <div class="line-hr"></div>
        @endif
       @endforeach




