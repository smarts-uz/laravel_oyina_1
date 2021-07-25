@foreach($articles as $article)
    <a href="{{ route('teahause', ['id' => $article->id]) }}" class="interview-cards-content">
        <div class="interview-img-content">
             <img src="{{ Voyager::image($article->image) }}" alt="">
        </div>
        <div class="interview-text-content">
            <p>{{ $article->title }}</p>
        </div>
    </a>
@endforeach
