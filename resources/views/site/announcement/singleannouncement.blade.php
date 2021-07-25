@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')

<<<<<<< HEAD
    <section class="container mx-auto announcement">
=======
    <section class="announcement container mx-auto">
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
        <div class="single_announcement">
            <div class="single_announcement_first">
                <h1 class="head_text_announcement_single">{{ $announcement->title }}</h1>

                <div class="single_announcement_line_head"></div>

                <div class="announcement_card_icons">
<<<<<<< HEAD
                    <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
=======
                    <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                        </span> {{ \Carbon\Carbon::parse($announcement->created_at)->format('H:m / d.m.Y') }} </span>

                </div>

                <div class="single_announcement_main_img">
                    @php $images = json_decode($announcement->image) @endphp
                    @foreach($images as $image)
                        @if ($loop->first)
                            <img src="{{ Voyager::image($image) }}" alt="">
                        @endif
                    @endforeach

                    <a href="#" class="announcement_main_bookmark">
<<<<<<< HEAD
                        <span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span>
=======
                        <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                    </a>
                </div>

                <div class="single_announcement_paragraph_text">
                    {!! $announcement->description !!}
                </div>


                <div class="comment_news">
<<<<<<< HEAD
                    <h4>{{ count($comments)==0 ? "" : count($comments)}} {{ count($comments)>0 ? (count($comments)>1 ? "Comments" : "Comment") : "No Comment" }} </h4>
                    @foreach ($comments as $comment)
=======
                    <h4>3 Comments</h4>
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                    <div class="comment_news_card">
                        <div class="comment_news_left">
                            <div class="img_comment_news">
                                <img src="../images/img2.png" alt="">
                            </div>
<<<<<<< HEAD
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
                    <form action="{{ route('comment.store', ['id' => $announcement->id]) }}" method="POST">
                        @csrf

=======

                        </div>
                        <div class="comment_news_right">
                            <div class="comment_news_head_text">
                                <h1>Prezident</h1>
                                <p>5 DAYS AGO</p>
                            </div>
                            <div class="comment_news_body_text">
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                            </div>
                        </div>
                    </div>

                    <div class="comment_hr"></div>

                    <div class="comment_news_card">
                        <div class="comment_news_left">
                            <div class="img_comment_news">
                                <img src="../images/img2.png" alt="">
                            </div>

                        </div>
                        <div class="comment_news_right">
                            <div class="comment_news_head_text">
                                <h1>Prezident</h1>
                                <p>5 DAYS AGO</p>
                            </div>
                            <div class="comment_news_body_text">
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                            </div>
                        </div>
                    </div>

                    <div class="comment_hr"></div>

                    <div class="comment_news_card">
                        <div class="comment_news_left">
                            <div class="img_comment_news">
                                <img src="../images/img2.png" alt="">
                            </div>

                        </div>
                        <div class="comment_news_right">
                            <div class="comment_news_head_text">
                                <h1>Prezident</h1>
                                <p>5 DAYS AGO</p>
                            </div>
                            <div class="comment_news_body_text">
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="comment_news_form">
                    <h4>Comment qoldirish</h4>
                    <form action="">
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                        <div class="input_form">
                            <label for="name">Ismingiz</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input_form">
                            <label for="email">Emailingiz</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input_form">
<<<<<<< HEAD
                            <input type="text" name="type" value="announcements" hidden>
                        </div>
                        <div class="input_form">
=======
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
                            <label for="text" >Sizning commentingiz</label>
                            <textarea name="text" id="" ></textarea>
                        </div>
                        <input type="submit" class="comment_btn">


                    </form>
                </div>

            </div>

            <x-announcement :id="$announcement->id"/>

        </div>

    </section>



@endsection
