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
