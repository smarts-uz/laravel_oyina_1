<div class="section-three-first-content-head-text flex items-center justify-between">
      <h1 class="">@lang('site.content_menus.useful')</h1>
      <a href="{{ route('usefullinkall') }}">@lang('site.navbar.all')</a>
    </div>
    <div class="line-gradient-five"></div>

    <div class="grid-template-card">
     @foreach($usefuls as $useful)
      @php $icons = json_decode($useful->icon) @endphp
      <a target="_blank" href="{{ $useful->link }}" class="grid-card-items">
        <div>
          @foreach($icons as $icon)
              @if ($loop->first)
                    <img src="{{ Voyager::image($icon) }}" alt="">
              @endif
          @endforeach
        </div>
        <p>{{ $useful->title }}</p>
      </a>
     @endforeach
    </div>
