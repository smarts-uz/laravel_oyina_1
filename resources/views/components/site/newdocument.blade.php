        <div class="flex items-center justify-between section-three-first-content-head-text">
          <h1 class="">@lang('site.content_menus.new_reg')</h1>
          <a href="{{ route('documents') }}">@lang('site.navbar.all')</a>
        </div>
        <div class="line-gradient-four"></div>

        <div class="section-three-cards">
         @foreach($documents as $document)
                @php
                    $file = json_decode($document->content);
                @endphp
                <a data-fancybox data-type="iframe" href="{{ Voyager::image($file[0]->download_link) }}"  class="flex flex-row items-center justify-center align-middle cards-flag">
                    <div class="gerb-img">
                        <img src="./images/gerb.png" alt="Gerb">
                    </div>
                    <p>{{ $document->title }}</p>
                </a>
         @endforeach
        </div>
