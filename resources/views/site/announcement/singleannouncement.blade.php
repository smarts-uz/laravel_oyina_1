@extends('site.layouts.app')

<link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery.css')}}" />
@section('content')

    <section class="announcement container mx-auto">
        <div class="single_announcement">
            <div class="single_announcement_first">
                <h1 class="head_text_announcement_single">{{ $announcement->title }}</h1>

                <div class="single_announcement_line_head"></div>

                <div class="announcement_card_icons">
                    <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
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
                        <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                    </a>
                </div>

                <div class="single_announcement_paragraph_text">
                    {!! $announcement->description !!}
                </div>


                <div class="comment_news">
                    <h4>3 Comments</h4>
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
                        <div class="input_form">
                            <label for="name">Ismingiz</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input_form">
                            <label for="email">Emailingiz</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input_form">
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
