<div style="background: #EFFFF5;" id="filtercontainer">
      <div class="splide container mx-auto flex justify-between">
        <div class="splide__track" style="order: 1;">
          <ul class="splide__list">
            <li class="splide__slide "><a class="button active" onclick="filterSelection('all')">Barchasi</a></li>
             @foreach($categories as $category)
                  <li class="splide__slide"><a href="/category/{{ $category->slug }}" class="button">{{ $category->name }}</a></li>
             @endforeach
            {{--<li class="splide__slide"><a class="button">Jamiyat</a></li>
            <li class="splide__slide"><a class="button">Ilm-fan</a></li>
            <li class="splide__slide"><a class="button">Madaniyat</a></li>
            <li class="splide__slide"><a class="button">Ma’naviyat</a></li>
            <li class="splide__slide"><a class="button">Yoshlar</a></li>
            <li class="splide__slide"><a class="button">Meros</a></li>
            <li class="splide__slide"><a class="button">Vatandosh</a></li>
            <li class="splide__slide"><a class="button">Dunyo</a></li>
            <li class="splide__slide"><a class="button">Tabassum</a></li>--}}

          </ul>
        </div>
      </div>
    </div>
