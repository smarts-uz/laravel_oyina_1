<div class="books_first_box_content_one">
    @foreach($books as $book)
        <div class="all_books_card">
        <div class="all_books_card_box">
            <div class="card_box_img">
                @php $images = json_decode($book->image) @endphp
                @foreach($images as $image)
                    @if ($loop->first)
                        <img src="{{ Voyager::image($image) }}" alt="">
                    @endif
                @endforeach
            </div>
            <div class="all_books_back-line"></div>
            <div class="bookmark_all_books">
                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
            </div>
        </div>
        <div class="all_books_star">
            @for ($i = 1; $i <= 8; $i++)
                @if ($book->stars >= $i)
                    <img src="../images/starfull.png" alt="">
                @else
                    <img src="../images/star.png" alt="">
                @endif
            @endfor
        </div>

        <div class="all_books_text">
            <a  href="{{ route('singleBook', ['id' => $book->id]) }}">{{ $book->title }}</a>
        </div>
    </div>
    @endforeach
</div>
