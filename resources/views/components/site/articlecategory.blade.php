@foreach($articles as $article)
    <a href="{{ route('article', ['id' => $article->id]) }}" class="interview-cards-content">
        <div class="interview-img-content">
            @php $images = json_decode($article->image); @endphp
            @foreach($images as $image)
                @if ($loop->first)
                    <img src="{{ Voyager::image($image) }}" alt="">
                @endif
            @endforeach
        </div>
        <div class="interview-text-content">
            <p>{{ $article->title }}</p>
        </div>
    </a>
@endforeach
