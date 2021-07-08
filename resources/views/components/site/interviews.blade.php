<div class="section-three-first-content-head-text flex items-center justify-between">
      <h1 class="">Intervyular</h1>
      <a href="#">Barchasi</a>
    </div>
    <div class="line-gradient-five"></div>
    <div class="interview-cards flex">
    @foreach($interviews as $interview)
      <a href="" class="interview-cards-content">
        <div class="interview-img-content">
        @php $images = json_decode($interview->image); @endphp
        @foreach($images as $image)
            @if ($loop->first)
                    <img src="{{ Voyager::image($image) }}" alt="">
                @endif
          @endforeach
        </div>
        <div class="interview-text-content">
          <p>{{ $interview->title }}</p>
          </div>
      </a>
    @endforeach
    </div>
