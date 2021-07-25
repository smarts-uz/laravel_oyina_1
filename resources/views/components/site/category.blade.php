<div style="background: #EFFFF5;" id="filtercontainer">
      <div class="splide container mx-auto flex justify-between">
        <div class="splide__track" style="order: 1;">
          <ul class="splide__list">
            <li class="splide__slide "><a href="{{ route('news') }}" class="button active"
                                          onclick="filterSelection('all')">Barchasi</a></li>
             @foreach($categories as $category)
                  <li class="splide__slide"><a href="{{ route('category', ['category_slug' => $category->slug]) }}"
                                               class="button">{{ $category->name }}</a></li>
             @endforeach
          </ul>
        </div>
      </div>
    </div>
