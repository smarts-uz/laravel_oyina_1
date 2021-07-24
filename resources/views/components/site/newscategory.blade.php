@foreach($posts as $post)
    <a href="{{ route('singlePost', ['post' => $post->slug]) }}" class="interview-cards-content">
             <div class="interview-img-content">
                   <img src="{{ Voyager::image($post->image) }}" alt="">
             </div>
             <div class="interview-text-content">
                  <p>{{ $post->title }}</p>
             </div>
    </a>
@endforeach
