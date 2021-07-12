        <div class="section-three-first-content-head-text flex items-center justify-between">
          <h1 class="">Yangi me’yoriy hujjatlar</h1>
          <a href="#">Barchasi</a>
        </div>
        <div class="line-gradient-four"></div>

        <div class="section-three-cards">
         @foreach($documents as $document)
          <a href="{{ route('document', ['id' => $document->id]) }}" class="cards-flag flex flex-row justify-center items-center align-middle">
            <div class="gerb-img">
              <img src="./images/gerb.png" alt="Gerb">
            </div>
            <p>{{ $document->title }}</p>
          </a>
         @endforeach
        </div>
