@extends('site.layouts.app')

@section('content')
<x-category/>
    <div class="category-news container mx-auto my-8">
    <div class="section-two-content-one-head flex items-center justify-between">
          <h1 class="">Rasmiy hujjatlar</h1>

        </div>
        <div class="line-gradient-two"></div>
        <div class="category-news-content flex">

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

        </div>
        {{ $documents->links() }}
        {{--<div class="pagination">
            <ul class="pagination-content">
                <a href=""><li><</li></a>
                <a href=""><li>1</li></a>
                <a class="active-pagination" href=""><li>2</li></a>
                <a href=""><li>3</li></a>
                <a href=""><li>4</li></a>
                <a href=""><li>5</li></a>
                <a class="dot" href=""><li>...</li></a>
                <a href=""><li>25</li></a>
                <a href=""><li>26</li></a>
                <a href=""><li>></li></a>
            </ul>
        </div>--}}
    </div>
@endsection
