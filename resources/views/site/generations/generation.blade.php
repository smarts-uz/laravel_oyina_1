@extends('site.layouts.app')

@section('content')

    <section>
        <x-category/>
        <div class="container mx-auto section-one-content single-news">
            <!-- Asosiy yangilik -->
            <div class="news_body_main">
                <div class="single-news-headtext">
                    <h1>{{ $generation->title }}</h1> <br>
                </div>
                <div class="first-content">
                    @php $images = json_decode($generation->image) @endphp
                    @foreach($images as $image)
                        @if ($loop->first)
                            <img class="" src="{{ Voyager::image($image) }}" alt="">
                        @endif
                    @endforeach
                    <div class="flex items-center justify-center bookmark">
                        <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>

                    <div class="text-content">
                        <div class="flex items-center my-4 statics gap-x-8" >
                        <div class="flex items-center my-4 statics gap-x-8" >
                            <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($generation->created_at)->format('H:m / d.m.Y') }}</span>
                            <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                        </div>
                    </div>
                </div>
                <div class="single-news-paragraph">
                    <p>
                        {!! $generation->content !!}
                    </p>
                </div>

                <div class="comment_news">
                    <h4>{{ count($comments)==0 ? "" : count($comments)}} {{ count($comments)>0 ? (count($comments)>1 ? "Comments" : "Comment") : "No Comment" }} </h4>

                    @foreach ($comments as $comment)
                    <div class="comment_news_card">
                        <div class="comment_news_left">
                            <div class="img_comment_news">
                                <img src="../images/img2.png" alt="">
                            </div>
                        </div>
                        <div class="comment_news_right">
                            <div class="comment_news_head_text">
                                <h1>{{ $comment->name }}</h1>
                                @php
                                    $days_ago = date('d') - date('d', strtotime($comment->created_at));
                                @endphp
                                <p>{{ $days_ago != 0 ? $days_ago : "" }} {{ ($days_ago)==0 ? "TODAY" : (($days_ago)>1 ? "DAYS AGO" : "DAY AGO") }} </p>
                            </div>
                            <div class="comment_news_body_text">
                                <p>{{ $comment->text }}</p>
                            </div>
                        </div>
                    </div>
                    @if (count($comments) > 1)
                        <div class=comment_hr></div>
                    @endif
                    @endforeach

                </div>
                <div class="comment_news_form">
                    <h4>Comment qoldirish</h4>
                    <form action="{{ route('comment.store', ['id' => $generation->id]) }}" method="POST">
                        @csrf
                        <div class="input_form">
                            <label for="name">Ismingiz</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input_form">
                            <label for="email">Emailingiz</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input_form">
                            <input type="text" name="type" value="generations" hidden>
                        </div>
                        <div class="input_form">
                            <label for="text" >Sizning commentingiz</label>
                            <textarea name="text" id="" ></textarea>
                        </div>
                        <input type="submit" class="comment_btn">


                    </form>
                </div>

            </div>

            <!-- o'ng tarafdagi yangiliklar uchun -->
            <x-generationsidebar id="{{ $generation->id }}"/>
        </div>
    </section>


@endsection
