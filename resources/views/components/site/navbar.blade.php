{{-- max 1024px --}}
<div class="sidebar-nav-container" tabindex="0">

    <div class="sidebar-nav-menu">
        {{-- date and time --}}
        <div class="flex items-center date">
            <span class="iconify" data-icon="mdi-light:calendar" data-inline="false"></span>
            <span id="datefull" class="text-lg font-normal text-white"></span>
            <span  class="vertical_line"></span>
            <span id="timefull" class="text-lg font-normal text-white"></span>
        </div>
        {{-- social icons --}}
        <div class="social-icons">
            <ul class="flex">
                <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="mdi-telegram" data-inline="false"></span></li></a>
                <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="bx:bxl-facebook" data-inline="false"></span></li></a>
                <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="ant-design:instagram-outlined" data-inline="false"></span></li></a>
                <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="ant-design:youtube-filled" data-inline="false"></span></li></a>
                <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="mdi:signal-variant" data-inline="false"></span></li></a>
            </ul>
        </div>
        <div class="sidebar-nav-line"></div>
      {{-- Language --}}
        <ul class="lang-container">
            <li class="flex items-center lang-head">
                O'zbekcha
                <svg class="w-5 h-5 text-white arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#46494F">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </li>
            <li class="lang-head-2">
                <ul class="lang-body">
                    <li><a href="/uz-Latn">O'zbek</a></li>
                    <li><a href="/ru">Ruscha</a></li>
                    <li><a href="/uz">Ўзбек</a></li>
                    <li><a href="/en">Ingliz</a></li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-nav-line"></div>
        {{-- Davlat ramzlari --}}

         {{-- Bo'limlar  --}}
        <div class="nav-section">
            <ul class="flex text-lg">
                @php $menu = 'site_'.app()->getLocale() @endphp
                @foreach(menu("$menu", '_json') as $item)
                    @if ($_SERVER['REQUEST_URI'] == $item->url)
                        <li><a class="active-link" target="{{ $item->target }}"  href="{{ $item->url }}">{{ $item->title }}</a></li>
                    @else
                        <li><a target="{{ $item->target }}"  href="{{ $item->url }}">{{ $item->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="sidebar-nav-line"></div>

        <div class="nav-section">
            <ul class="flex text-lg">
                <li><a class="active-link" href="#">Kontakt</a></li>
                <li><a class="" href="#">Kirish</a></li>

            </ul>
        </div>

    </div>
  </div>



  {{-- min 1024px --}}
<nav class="">
    <div class="w-full first_nav">
        <div class="container flex justify-between mx-auto">

            <div class="flex items-center nav-col-1">
                <div class="social-icons">
                    <ul class="flex">
                        <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="mdi-telegram" data-inline="false"></span></li></a>
                        <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="bx:bxl-facebook" data-inline="false"></span></li></a>
                        <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="ant-design:instagram-outlined" data-inline="false"></span></li></a>
                        <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="ant-design:youtube-filled" data-inline="false"></span></li></a>
                        <a href=""><li class="flex items-center justify-center"><span class="iconify" data-icon="mdi:signal-variant" data-inline="false"></span></li></a>
                    </ul>
                </div>
                <div class="flex items-center date">
                    <svg class="w-5 h-5 calendar-icon"  viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.7857 3.125V3.625H17.2857H19.6429C20.6707 3.625 21.5 4.45363 21.5 5.46875V7.22656C21.5 7.27 21.4614 7.3125 21.4107 7.3125H11H0.589286C0.538631 7.3125 0.5 7.27 0.5 7.22656V5.46875C0.5 4.45363 1.32926 3.625 2.35714 3.625H4.71429H5.21429V3.125V0.585938C5.21429 0.542496 5.25292 0.5 5.30357 0.5H7.26786C7.31851 0.5 7.35714 0.542496 7.35714 0.585938V3.125V3.625H7.85714H14.1429H14.6429V3.125V0.585938C14.6429 0.542497 14.6815 0.5 14.7321 0.5H16.6964C16.7471 0.5 16.7857 0.542496 16.7857 0.585938V3.125ZM21.4107 9.875C21.4614 9.875 21.5 9.9175 21.5 9.96094V22.6562C21.5 23.6714 20.6707 24.5 19.6429 24.5H2.35714C1.32926 24.5 0.5 23.6714 0.5 22.6562V9.96094C0.5 9.9175 0.538631 9.875 0.589286 9.875H21.4107Z" stroke="white"/>
                    </svg>
                    <span id="datefull1" class="text-lg font-normal text-white"></span>
                    <span  class="vertical_line"></span>
                    <span id="timefull1" class="text-lg font-normal text-white"></span>
                </div>
                <div class="date">
                    <a class="text-lg font-normal text-white hover:text-gray-300" href="{{ route('symbols') }}">@lang('site.top')</a>
                </div>
            </div>

            <div class="flex items-center nav-col-2">
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 flex flex-row items-center gap-1 font-normal align-middle focus:outline-none">
                       <span class="text-lg text-white" id="change_lang_value">O'zbek</span>
                        <svg class="w-5 h-5 text-white arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                    <div x-show="dropdownOpen" class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dropdow">
                        <a onchange="document.getElementById('change_lang_value').innerHTML = this.innerHTML" href="/uz" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                            O'zbek
                        </a>
                        <a href="/en" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                           Ingliz
                        </a>
                        <a href="/ru" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                            Rus
                        </a>
                        <a href="/kiril" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                            Ўзбек
                        </a>
                    </div>
                </div>

                <div class="vertical_line"></div>

                <div>
                    <a class="flex flex-row items-center text-lg font-normal text-white" href="">
                        <svg class="enter-icon" width="22" height="28" viewBox="0 0 30 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.52099 11.3566L8.5209 11.3567C8.10191 11.7821 8.1106 12.4765 8.53839 12.893L8.53842 12.893L13.9173 18.1506L13.9601 18.1925H13.9002H1.07131C0.491695 18.1925 0.0244141 18.671 0.0244141 19.2672V20.7328C0.0244141 21.329 0.491695 21.8075 1.07131 21.8075H13.9002H13.9601L13.9173 21.8494L8.53848 27.1069L8.53842 27.107M8.52099 11.3566L8.5035 28.6604C8.07944 28.2253 8.08837 27.5155 8.52136 27.0895L8.53842 27.107M8.52099 11.3566L9.51194 10.3399C9.92201 9.91919 10.5846 9.91933 10.9901 10.3398L10.9902 10.3399L19.6678 19.2385C20.0782 19.6595 20.0781 20.3405 19.6679 20.7569L19.6678 20.7569L10.9902 29.6601C10.5801 30.0808 9.91751 30.0807 9.51203 29.6602L9.51194 29.6601L8.52099 28.6434C8.10636 28.218 8.11503 27.5235 8.53842 27.107M8.52099 11.3566L8.53842 27.107M8.5035 11.3396L9.49446 10.3229C9.91406 9.89237 10.5926 9.89237 11.0077 10.3229L19.6853 19.2214C20.1049 19.6519 20.1049 20.3481 19.6853 20.774L8.5035 11.3396Z" fill="white" stroke="white" stroke-width="0.0488281"/>
                            <path d="M10.0001 2H27.0001C27.5524 2 28.0001 2.44772 28.0001 3V35C28.0001 35.5523 27.5524 36 27.0001 36H10.0001" stroke="white" stroke-width="3" stroke-linejoin="round"/>
                        </svg>
                       Kirish

                    </a>
                </div>
                <div>
                    <a class="flex flex-row items-center text-lg font-normal text-white" href="">
                        Kontakt
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="relative w-full main-nav">
        <div class="bg-img">
            <img src="{{ asset('images/splash-2.png') }}" alt="">
        </div>
        <div class="container flex items-center justify-between mx-auto">
            <a href="#" class="flex items-center logo-container">

                <img src="{{ asset('images/logo.png') }}" alt="">

                <div class="flex-shrink-0 logo-item">
                    <h1 class="font-bold ">OYINA</h1>
                    <p>ma’naviy-ma’rifiy portal</p>
                </div>
            </a>

            <div class="climate">
                    <div class="wheather-img">
                        <img id="wheahterimg" src="">
                    </div>
                    <div class="wheahter-main">
                        <div class="flex items-center ">
                            <h1 id="gradus"></h1>
                            <sup>°C</sup>
                        </div>

                        <form>
                            <select onChange="myNewFunction(this);">
                                <option value="Tashkent">Toshkent</option>
                                <option value="Jizzakh">Jizzax</option>
                                <option value="Qarshi">Qarshi</option>
                                <option value="Bukhara">Buxoro</option>
                                <option value="Samarkand">Samarqand</option>
                                <option value="Sirdaryo">Sirdaryo</option>
                                <option value="Fergana">Farg'ona</option>
                                <option value="Namangan">Namangan</option>
                                <option value="Andijan">Andijon</option>
                                <option value="Navoiy">Navoiy</option>
                                <option value="Termiz">Termiz</option>
                            </select>
                        </form>
                    </div>
            </div>
        </div>

    </div>
    <div class="relative w-full end-nav ">
        <div class="container flex justify-between mx-auto">
            <div class="nav-section">
                <ul class="flex text-lg">
                    @php $menu = 'site_'.app()->getLocale() @endphp
                    @foreach(menu("$menu", '_json') as $item)
                      @if ($_SERVER['REQUEST_URI'] == $item->url)
                          <li><a target="{{ $item->target }}" class="" href="{{ $item->url }}">{{ $item->title }}
                               <div class="active line-bottom "></div></a></li>
                      @else
                          <li><a target="{{ $item->target }}" class="" href="{{ $item->url }}">{{ $item->title }}
                               <div class="line-bottom "></div></a></li>
                      @endif
                    @endforeach
                    {{--<li><a class="" href="/">Asosiy sahifa <div class="active line-bottom "></div></a></li>--}}
                </ul>
            </div>
            <div class="flex items-center nav-search">
                <div class="flex items-center search-box">
                    <button class="flex items-center justify-center btn-search">
                        <span class="iconify" data-icon="fa-solid:search" data-inline="false"></span>
                    </button>
                    <input type="text" class="input-search" placeholder="Type to Search...">
                </div>

                <a class="relative flex flex-col items-center justify-center hamburber ">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>


<script>

</script>


