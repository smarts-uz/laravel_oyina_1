{{-- Allomalar haqida section --}}
<section class="relevance">
    
    <div class="container mx-auto flex items-center align-middle justify-between">
      <div id="filters-relevance" class="filters-relevance flex">
        <button class="filter-option-relevance active-4" data-filter="day" onclick=filterrelevance(event)>Kun davomida <div class="div-bootom-line-relevance"></div></button>
        <button class="filter-option-relevance"  data-filter="week" onclick=filterrelevance(event)>Hafta davomida <div class="div-bootom-line-relevance"></div></button>
        <button class="filter-option-relevance"  data-filter="month" onclick=filterrelevance(event)>Oy davomida <div class="div-bootom-line-relevance"></div></button>
      </div>
      <a href="#" class="all-relevance">Barchasi</a>
    </div>
    <div class="flex flex-row items-center align-middle">
        <div class="transform">Dolzarb</div>
            <div class="swiper-container relevance-slide">
                <div class="swiper-wrapper">

                    {{-- Kun davomida --}}
                    <div class="swiper-slide day">
                        
                            <div class="rel-image">
                                <img src="../images/rel1.png" alt="">
                                <div class="bookmark-rel flex justify-center items-center absolute">
                                    <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                                </div>
                                <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                            </div>
                            <div class="rel-date flex items-center justify-between">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                                <div class="flex items-center">
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                    <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                                </div>
                            </div>
                            <a class="swiper-slide-text-link" href="">O’zbekiston - Markaziy Osiyoning yangi
                                yo’lbarsi”</a>
                     </div>

                    <div class="swiper-slide day">
                        
                        <div class="rel-image">
                            <img src="../images/rel2.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Uch tilda Buxoro ziyoratgohlari xaritasi
                            ishlab chiqildi</a>
                     </div>

                     <div class="swiper-slide day">
                        
                        <div class="rel-image">
                            <img src="../images/rel3.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Birlashgan Qirollikda iqtisodiy o’sish
                            kuzatilmoqda</a>
                     </div>

                     <div class="swiper-slide day">
                        
                        <div class="rel-image">
                            <img src="../images/rel4.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Xalqaro innovatsion g’oyalar xaftaligi
                            davom etmoqda</a>
                     </div>

                     {{-- Hafta davomida --}}
                     <div class="swiper-slide week hidden">
                        
                        <div class="rel-image">
                            <img src="../images/video1.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">O’zbekiston - Markaziy Osiyoning yangi
                            yo’lbarsi”</a>
                    </div>

                    <div class="swiper-slide week hidden">
                        
                        <div class="rel-image">
                            <img src="../images/video2.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Uch tilda Buxoro ziyoratgohlari xaritasi
                            ishlab chiqildi</a>
                    </div>

                    <div class="swiper-slide week hidden">
                        
                        <div class="rel-image">
                            <img src="../images/video3.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Birlashgan Qirollikda iqtisodiy o’sish
                            kuzatilmoqda</a>
                    </div>

                    <div class="swiper-slide week hidden">
                        
                        <div class="rel-image">
                            <img src="../images/video4.png" alt="">
                            <div class="bookmark-rel flex justify-center items-center absolute">
                                <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                            </div>
                            <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                        </div>
                        <div class="rel-date flex items-center justify-between">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                            <div class="flex items-center">
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                                <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                            </div>
                        </div>
                        <a class="swiper-slide-text-link" href="">Xalqaro innovatsion g’oyalar xaftaligi
                            davom etmoqda</a>
                    </div>


                 {{-- Oy davomida --}}

                 <div class="swiper-slide month hidden">
                        
                    <div class="rel-image">
                        <img src="../images/rew1.png" alt="">
                        <div class="bookmark-rel flex justify-center items-center absolute">
                            <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                        </div>
                        <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                    </div>
                    <div class="rel-date flex items-center justify-between">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                        <div class="flex items-center">
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                            <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                        </div>
                    </div>
                    <a class="swiper-slide-text-link" href="">O’zbekiston - Markaziy Osiyoning yangi
                        yo’lbarsi”</a>
             </div>

            <div class="swiper-slide month hidden">
                
                <div class="rel-image">
                    <img src="../images/rew2.png" alt="">
                    <div class="bookmark-rel flex justify-center items-center absolute">
                        <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>
                    <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                </div>
                <div class="rel-date flex items-center justify-between">
                    <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                    <div class="flex items-center">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                    </div>
                </div>
                <a class="swiper-slide-text-link" href="">Uch tilda Buxoro ziyoratgohlari xaritasi
                    ishlab chiqildi</a>
             </div>

             <div class="swiper-slide month hidden">
                
                <div class="rel-image">
                    <img src="../images/rew3.png" alt="">
                    <div class="bookmark-rel flex justify-center items-center absolute">
                        <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>
                    <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                </div>
                <div class="rel-date flex items-center justify-between">
                    <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                    <div class="flex items-center">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                    </div>
                </div>
                <a class="swiper-slide-text-link" href="">Birlashgan Qirollikda iqtisodiy o’sish
                    kuzatilmoqda</a>
             </div>

             <div class="swiper-slide month hidden">
                
                <div class="rel-image">
                    <img src="../images/rew4.png" alt="">
                    <div class="bookmark-rel flex justify-center items-center absolute">
                        <a href="#"><span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span> </a>
                    </div>
                    <p class="text-white flex items-center absolute"><span class="iconify text-white" data-icon="ic:sharp-radio-button-checked" data-inline="false"></span> Siyosat</p>
                </div>
                <div class="rel-date flex items-center justify-between">
                    <span class="flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false"></span> 19:27 / 08.04.2021</span>
                    <div class="flex items-center">
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:eye" data-inline="false"></span> 4878</span>
                        <span class="flex items-center"><span class="iconify" data-icon="mdi:message-text" data-inline="false"></span> 28</span>
                    </div>
                </div>
                <a class="swiper-slide-text-link" href="">Xalqaro innovatsion g’oyalar xaftaligi
                    davom etmoqda</a>
             </div>

                    


                 </div>
            </div>
      
    </div>   
  </section>
  