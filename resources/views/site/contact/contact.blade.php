@extends('site.layouts.app')

@section('content')
    <section class="contact container mx-auto">
        <h1>Iltimos, bog'laning va bizning mutaxassislarni qo'llab-quvvatlash guruhimiz barcha savollaringizga javob beradi.</h1>

        <div class="contact_row">
            <div class="contact_card_one">
                <form>
                    <div class="form_group">

                        <input class="require" type="text" name="" required="" placeholder="Ism Familiya *">
                    </div>

                    <div class="form_group">
                        <input class="require" type="email" name="" required="" placeholder="Email *">
                    </div>

                    <div class="form_group">
                        <input class="require" type="text" name="" required="" placeholder="Telefon *">
                    </div>

                    <div class="form_group">
                        <input type="text" name="" placeholder="Kompaniya">
                    </div>

                    <div class="form_group">
                        <textarea placeholder="Sizning xabaringiz..."></textarea>
                    </div>

                    <div class="contact_button">
                        <input type="submit" name="" value="Jo'natish">

                    </div>
                    <span> <span class="iconify" data-icon="ant-design:lock-filled" data-inline="false"></span> Biz sizning ma’lumotingizni havfsiz saqlaymiz</span>

                </form>




            </div>

            <div class="contact_card_two">
                <div class="inner_contact">
                    <div class="text_contact">
                        <h2>Bizning ajoyib va ​​bilimdon qo'llab-quvvatlash jamoamiz bilan tanishing</h2>
                        <p>Jonli qo'llab-quvvatlash dushanba-juma soat 5 dan 19 gacha mavjud</p>
                    </div>


                    <div class="line-contact"></div>

                    <div class="contact_img">
                        <div class="card_contact">
                            <div class="img_contact_inner">
                                <img src="../images/img2.png">
                            </div>
                            <p>Oybekjon Isroilov</p>
                        </div>

                        <div class="card_contact">
                            <div class="img_contact_inner">
                                <img src="../images/img2.png">
                            </div>
                            <p>Oybekjon Isroilov</p>
                        </div>

                        <div class="card_contact">
                            <div class="img_contact_inner">
                                <img src="../images/img2.png">
                            </div>
                            <p>Oybekjon Isroilov</p>
                        </div>
                    </div>
                </div>

                <div class="contact_social">
                    <a href="" class="face">
                        <span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false"></span>
                    </a>
                    <a href="" class="in">
                        <span class="iconify" data-icon="entypo-social:linkedin-with-circle" data-inline="false"></span>
                    </a>
                    <a href="" class="tg">
                        <span class="iconify" data-icon="fontisto:telegram" data-inline="false"></span>
                    </a>
                </div>
            </div>


        </div>
    </section>

@endsection