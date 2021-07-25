@extends('site.layouts.app')

@section('content')

    <section>
        <x-category/>
        <div class="container mx-auto section-one-content single-news">
            <!-- Asosiy yangilik -->
            <div class="news_body_main">
                <div class="single-news-headtext">
                    <h1>{{ $article->title }}</h1> <br>
                </div>
                <div class="first-content">
                    @php $images = json_decode($article->image) @endphp
                    @foreach ($images as $image)
                        @if ($loop->first)
                            <img class="" src="{{ Voyager::image($image) }}" alt="">
                        @endif
                    @endforeach
                    <div class="flex items-center justify-center bookmark">
                        <a href="#"><span class="text-white iconify" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>

                    <p class="text-white"><span class="text-white iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>{{ $article->category->name }}</p>
                    <div class="text-content">

                        <div class="flex items-center my-4 statics gap-x-8" >
                            <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> {{ \Carbon\Carbon::parse($article->created_at)->format('H:m / d.m.Y') }}</span>
                            <span class="flex items-center gap-x-2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                        </div>
                    </div>
                </div>
                <div class="single-news-paragraph">
                    <p>
                        {!! $article->content !!}
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
                    <form action="{{ route('comment.store', ['id' => $article->id]) }}" method="POST">
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
                            <input type="text" name="type" value="articles" hidden>
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
            <x-articlesidebar/>
            {{--<div class="news_body_related">
                <!-- Songi yangiliklar uchun -->
                <div class="flex items-center justify-between second-content-head">
                    <h1 class="">So’nggi yangiliklar</h1>
                    <a href="#">Barchasi</a>
                </div>
                <div class="line-gradient"></div>

                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>


                <!-- ushbu yangilklarga tegishlilari -->
                <div class="flex items-center justify-between second-content-head" style="margin-top: 3rem;">
                    <h1 class="">Related to this post</h1>
                </div>
                <div class="line-gradient"></div>

                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>
                <div class="line-hr"></div>
                <div class="flex second-content-body">
                    <div class="img-content">
                        <img src="../images/img1.png" alt="">
                    </div>
                    <div class="text-content-second">
                        <div class="flex items-center justify-between align-middle icon-text">
                            <p class="flex items-center align-middle bell"><span class="iconify" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span>siyosat</p>
                            <div class="flex items-center date-icons">
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 17.07.2021</span>
                                <span class="flex items-center bell2"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="" href="">3 bosqichli sinov, talabalar uchun alohida narxlar – Aston universiteti magistranti bilan suhbat</a>
                    </div>
                </div>

            </div>--}}

        </div>
    </section>


@endsection
