@extends('site.layouts.app')

@section('content')

    <section>
        <x-category/>
        <div class="section-one-content single-news container mx-auto">
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
                    <div class="bookmark flex justify-center items-center">
                        <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>

                    <div class="text-content">

                        <div class="statics flex items-center gap-x-8 my-4" >
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

            <!-- o'ng tarafdagi yangiliklar uchun -->

            <x-generationsidebar id="{{ $generation->id }}"/>

        </div>
    </section>


@endsection
