        <div class="section-three-first-content-head-text flex items-center justify-between">
          <h1 class="">@lang('site.content_menus.new_reg')</h1>
          <a href="{{ route('documents') }}">@lang('site.navbar.all')</a>
        </div>
        <div class="line-gradient-four"></div>

        <div class="section-three-cards">
         @foreach($documents as $document)
                @php
                    $file = json_decode($document->content);
                @endphp
                <a data-fancybox data-type="iframe" href="{{ Voyager::image($file[0]->download_link) }}"  class="cards-flag flex flex-row justify-center items-center align-middle">
                    <div class="gerb-img">
                        <img src="./images/gerb.png" alt="Gerb">
                    </div>
                    <p>{{ $document->title }}</p>
                </a>
         @endforeach
        </div>
