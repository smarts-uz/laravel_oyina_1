@extends('user.layouts.app')
<style>
    @media (max-width: 768px){
        aside.mob{
            display:none;
        }
    }
</style>

@section('content')

    <div
            class="flex h-screen bg-gray-50 dark:bg-gray-900"
            :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        @include('user.layouts.sidebar')

        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
                >
                    <!-- Mobile hamburger -->
                    <button
                            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                            @click="toggleSideMenu"
                            aria-label="Menu"
                    >
                        <svg
                                class="w-6 h-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                        >
                            <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div
                                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
                        >
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg
                                        class="w-4 h-4"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                >
                                    <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                            <input
                                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text"
                                    placeholder="Search for projects"
                                    aria-label="Search"
                            />
                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button
                                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                    @click="toggleTheme"
                                    aria-label="Toggle color mode"
                            >
                                <template x-if="!dark">
                                    <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                    >
                                        <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                        ></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                    >
                                        <path
                                                fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </template>
                            </button>
                        </li>

                        <!-- Profile menu -->
                        <li class="relative">
                            <button
                                    class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                                    @click="toggleProfileMenu"
                                    @keydown.escape="closeProfileMenu"
                                    aria-label="Account"
                                    aria-haspopup="true"
                            >
                                <img
                                        class="object-cover w-8 h-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                                        alt=""
                                        aria-hidden="true"
                                />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        @click.away="closeProfileMenu"
                                        @keydown.escape="closeProfileMenu"
                                        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                                        aria-label="submenu"
                                >
                                    <li class="flex">
                                        <a
                                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                                href="{{ route('profileInfo') }}"
                                        >
                                            <svg
                                                    class="w-4 h-4 mr-3"
                                                    aria-hidden="true"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                            >
                                                <path
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                ></path>
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a
                                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                                href="#"
                                        >
                                            <svg
                                                    class="w-4 h-4 mr-3"
                                                    aria-hidden="true"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                            >
                                                <path
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                                ></path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a
                                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                                href="#"
                                        >
                                            <svg
                                                    class="w-4 h-4 mr-3"
                                                    aria-hidden="true"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                            >
                                                <path
                                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                                ></path>
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2
                            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Dashboard
                    </h2>

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                            >


                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" ><path d="M 4.9433594 4 A 1.0001 1.0001 0 0 0 4 5 L 4 43.09375 C 4 44.66261 5.2463594 46 6.8183594 46 L 35 46 A 1.0001 1.0001 0 0 0 35.707031 45.707031 L 45.707031 35.707031 A 1.0001 1.0001 0 0 0 46 35 L 46 5 A 1.0001 1.0001 0 0 0 44.400391 4.1992188 L 41 6.75 L 37.599609 4.1992188 A 1.0001 1.0001 0 0 0 36.400391 4.1992188 L 33 6.75 L 29.599609 4.1992188 A 1.0001 1.0001 0 0 0 28.400391 4.1992188 L 25 6.75 L 21.599609 4.1992188 A 1.0001 1.0001 0 0 0 20.400391 4.1992188 L 17 6.75 L 13.599609 4.1992188 A 1.0001 1.0001 0 0 0 13.042969 4 A 1.0001 1.0001 0 0 0 12.400391 4.1992188 L 9 6.75 L 5.5996094 4.1992188 A 1.0001 1.0001 0 0 0 5.0429688 4 A 1.0001 1.0001 0 0 0 4.9433594 4 z M 13 6.25 L 16.400391 8.8007812 A 1.0001 1.0001 0 0 0 17.599609 8.8007812 L 21 6.25 L 24.400391 8.8007812 A 1.0001 1.0001 0 0 0 25.599609 8.8007812 L 29 6.25 L 32.400391 8.8007812 A 1.0001 1.0001 0 0 0 33.599609 8.8007812 L 37 6.25 L 40.400391 8.8007812 A 1.0001 1.0001 0 0 0 41.599609 8.8007812 L 44 7 L 44 34 L 34 34 L 34 44 L 6.8183594 44 C 6.3903594 44 6 43.62289 6 43.09375 L 6 7 L 8.4003906 8.8007812 A 1.0001 1.0001 0 0 0 9.5996094 8.8007812 L 13 6.25 z M 8 11 L 8 12 L 8 17 L 42 17 L 42 11 L 8 11 z M 10 13 L 40 13 L 40 15 L 10 15 L 10 13 z M 8 21 L 8 22 L 8 35 L 23 35 L 23 21 L 8 21 z M 26 21 L 26 23 L 41 23 L 41 21 L 26 21 z M 10 23 L 21 23 L 21 33 L 10 33 L 10 23 z M 13.199219 25 L 12 26.199219 L 12 29.699219 L 13.199219 30.800781 L 17.800781 30.800781 L 19 29.699219 L 19 28.5 L 19 27.300781 L 17.800781 27.300781 L 16.699219 27.300781 L 15.5 28.5 L 17.800781 28.5 L 17.800781 29.699219 L 14.300781 29.699219 L 13.199219 29.699219 L 13.199219 26.199219 L 13.199219 25 z M 13.199219 26.199219 L 14.300781 26.199219 L 14.300781 29.699219 L 15.5 28.5 L 15.5 26.199219 L 19 26.199219 L 17.800781 25 L 14.300781 25 L 13.199219 26.199219 z M 26 25 L 26 27 L 41 27 L 41 25 L 26 25 z M 26 29 L 26 31 L 41 31 L 41 29 L 26 29 z M 26 34 L 26 36 L 32 36 L 32 34 L 26 34 z M 36 36 L 42.585938 36 L 36 42.585938 L 36 36 z M 8 37 L 8 39 L 23 39 L 23 37 L 8 37 z M 26 38 L 26 40 L 32 40 L 32 38 L 26 38 z"/></svg>
                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Yangiliklar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    34
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                            >


                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"class="w-5 h-5" fill="currentColor"><g id="Outline"><path d="M5.29,5.29a1.032,1.032,0,0,0-.21.33.942.942,0,0,0,0,.76.933.933,0,0,0,.21.33,1.014,1.014,0,0,0,1.42,0,1.014,1.014,0,0,0,0-1.42A1.047,1.047,0,0,0,5.29,5.29Z"/><path d="M8.62,5.08a.933.933,0,0,0-.33.21,1.014,1.014,0,0,0,0,1.42A1,1,0,0,0,10,6a1.052,1.052,0,0,0-.29-.71A1.017,1.017,0,0,0,8.62,5.08Z"/><path d="M11.62,5.08a1.032,1.032,0,0,0-.33.21,1.014,1.014,0,0,0,0,1.42,1.155,1.155,0,0,0,.33.21A1,1,0,0,0,12,7a.99.99,0,0,0,1-1,1.052,1.052,0,0,0-.29-.71A1.037,1.037,0,0,0,11.62,5.08Z"/><rect x="15" y="19" width="14" height="2"/><rect x="15" y="25" width="14" height="2"/><rect x="15" y="31" width="19" height="2"/><rect x="15" y="37" width="13" height="2"/><rect x="15" y="43" width="8" height="2"/><rect x="15" y="49" width="6" height="2"/><path d="M58.171,14a3.8,3.8,0,0,0-2.707,1.122L52,18.586V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V59a3,3,0,0,0,3,3H49a3,3,0,0,0,3-3V29.414l8.878-8.878A3.828,3.828,0,0,0,58.171,14ZM4,5A1,1,0,0,1,5,4H49a1,1,0,0,1,1,1V8H4ZM50,59a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V10H50V20.586l-6,6v-3L33.414,13H10V57H44V37.414l6-6ZM26.126,44.46l-2.707,8.121,8.121-2.707L34.414,47,42,39.414V55H12V15H32V25H42v3.586l-13,13ZM29,44.414,31.586,47,30.46,48.126l-3.879,1.293,1.293-3.879Zm5-28L40.586,23H34ZM33,45.586,30.414,43,54,19.414,56.586,22ZM59.464,19.122,58,20.586,55.414,18l1.464-1.464a1.829,1.829,0,1,1,2.586,2.586Z"/></g></svg>

                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Maqolalar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    10
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                            >

                                <svg  viewBox="0 0 64 64" class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><g id="Advertisment-Browser-Online-Megaphone-Commerce"><path d="m10 55v-3h19v-2h-24a1 1 0 0 1 -1-1v-37h46v17h2v-12h4v10h2v-16a3 3 0 0 0 -3-3h-3v-3a3 3 0 0 0 -3-3h-44a3 3 0 0 0 -3 3v44a3 3 0 0 0 3 3h3v3a3 3 0 0 0 3 3h25v-2h-25a1 1 0 0 1 -1-1zm45-45a1 1 0 0 1 1 1v4h-4v-5zm-50-6h44a1 1 0 0 1 1 1v5h-46v-5a1 1 0 0 1 1-1z"/><path d="m56 55a1 1 0 0 1 -1 1h-6v2h6a3 3 0 0 0 3-3v-4h-2z"/><path d="m8 6h2v2h-2z"/><path d="m12 6h2v2h-2z"/><path d="m16 6h2v2h-2z"/><path d="m21 28a1 1 0 0 0 1-1v-10a1 1 0 0 0 -1-1h-12a1 1 0 0 0 -1 1v10a1 1 0 0 0 1 1zm-11-10h10v8h-10z"/><path d="m26 16h2v2h-2z"/><path d="m30 16h2v2h-2z"/><path d="m34 16h8v2h-8z"/><path d="m26 20h16v2h-16z"/><path d="m26 24h16v2h-16z"/><path d="m26 28h16v2h-16z"/><path d="m8 32h18v2h-18z"/><path d="m8 36h18v2h-18z"/><path d="m8 40h18v2h-18z"/><path d="m8 44h18v2h-18z"/><path d="m43.805 50.465 7.565-1.09a2.983 2.983 0 0 0 3.656.527 3.005 3.005 0 0 0 1.1-4.1l-2.5-4.33a3 3 0 0 0 -3-5.2l-2.5-4.33a3 3 0 0 0 -5.471 2.334l-6.186 7.86-5.03 2.9a3.005 3.005 0 0 0 -1.1 4.1l2 3.464a3 3 0 0 0 4.1 1.1l3.5 6.062a3 3 0 0 0 4.1 1.1l1.732-1a3 3 0 0 0 1.1-4.1zm9.185-12.09a1 1 0 0 1 -.365 1.366l-1-1.732a1 1 0 0 1 1.365.366zm-7.964-5.793a1 1 0 0 1 1.366.365l8 13.857a1 1 0 1 1 -1.731 1l-8-13.857a1 1 0 0 1 .365-1.365zm-1.359 3.644 6.523 11.3-8.529 1.228-3.323-5.754zm-6.9 8.052 3 5.2-1.732 1-3-5.2zm-2.7 7.33-2-3.464a1 1 0 0 1 .366-1.366l.866-.5 3 5.2-.866.5a1 1 0 0 1 -1.361-.37zm10.7 6.526-1.732 1a1 1 0 0 1 -1.366-.366l-3.5-6.062 3.3-1.9.2-.029 3.461 5.995a1 1 0 0 1 -.362 1.362z"/><path d="m56.187 34.375h4v2h-4z" transform="matrix(.866 -.5 .5 .866 -9.892 33.835)"/><path d="m52.016 30.363h4.243v2h-4.243z" transform="matrix(.259 -.966 .966 .259 9.831 75.538)"/><path d="m58.638 38.768h2v4.243h-2z" transform="matrix(.259 -.966 .966 .259 4.707 87.912)"/></g></svg>
                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    E'lonlar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    20
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                            >

                                <svg id="Layer" enable-background="new 0 0 64 64" class="w-5 h-5" fill="currentColor" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="m10 46c-1.104 0-2 .896-2 2s.896 2 2 2h6v4c0 1.104.896 2 2 2s2-.896 2-2v-4h24v4c0 1.104.896 2 2 2s2-.896 2-2v-4h6c1.104 0 2-.896 2-2s-.896-2-2-2h-6v-20.332l2.544 2.703c.378.401.904.629 1.456.629h2c1.104 0 2-.896 2-2s-.896-2-2-2h-1.136l-15.408-16.371c-.378-.401-.904-.629-1.456-.629h-8c-.552 0-1.078.228-1.456.629l-15.408 16.371h-1.136c-1.104 0-2 .896-2 2s.896 2 2 2h2c.552 0 1.078-.228 1.456-.629l2.544-2.703v20.332zm10-24.582 8.864-9.418h6.271l8.865 9.418v24.582h-24z"/><path d="m39 35v-6c1.104 0 2-.896 2-2s-.896-2-2-2c0-1.104-.896-2-2-2s-2 .896-2 2h-6c0-1.104-.896-2-2-2s-2 .896-2 2c-1.104 0-2 .896-2 2s.896 2 2 2v6c-1.104 0-2 .896-2 2s.896 2 2 2c0 1.104.896 2 2 2s2-.896 2-2h6c0 1.104.896 2 2 2s2-.896 2-2c1.104 0 2-.896 2-2s-.896-2-2-2zm-10 0v-6h6v6z"/></svg>

                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Choyxona
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    35
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                            >


                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"class="w-5 h-5" fill="currentColor"><g id="Ebook"><path d="M60,19H57V17a1,1,0,0,0-.684-.949L52,14.612V7a5.006,5.006,0,0,0-5-5H17a5.006,5.006,0,0,0-5,5v7.612L7.684,16.051A1,1,0,0,0,7,17v2H4a1,1,0,0,0-1,1V51a1,1,0,0,0,1,1h8v5a5.006,5.006,0,0,0,5,5H47a5.006,5.006,0,0,0,5-5V52h8a1,1,0,0,0,1-1V20A1,1,0,0,0,60,19ZM47,13.505a25.134,25.134,0,0,0-10.906,1.076L32,15.946l-4.094-1.365A25.134,25.134,0,0,0,17,13.505V8a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1,3,3,0,0,0,3,3h8a3.043,3.043,0,0,0,2.15-.9A2.908,2.908,0,0,0,39,8.013a.976.976,0,0,1,.306-.725A.957.957,0,0,1,40,7h6a1,1,0,0,1,1,1ZM32.947,17.738l3.78-1.259a23.134,23.134,0,0,1,14.546,0L55,17.721V47.613l-3.094-1.032a25.163,25.163,0,0,0-15.812,0L33,47.612V18A.961.961,0,0,0,32.947,17.738ZM17,4H47a3,3,0,0,1,3,3v7.032c-.331-.082-.666-.137-1-.205V8a3,3,0,0,0-3-3H40a3.015,3.015,0,0,0-3,3.036.924.924,0,0,1-.272.661A1.029,1.029,0,0,1,36,9H28a1,1,0,0,1-1-1,3,3,0,0,0-3-3H18a3,3,0,0,0-3,3v5.827c-.334.068-.669.123-1,.205V7A3,3,0,0,1,17,4ZM9,17.721l3.727-1.242a23.134,23.134,0,0,1,14.546,0l3.78,1.259A.961.961,0,0,0,31,18V47.612l-3.094-1.031a25.168,25.168,0,0,0-15.812,0L9,47.613ZM47,60H17a3,3,0,0,1-3-3v-.026A4.948,4.948,0,0,0,17,58H47a4.948,4.948,0,0,0,3-1.026V57A3,3,0,0,1,47,60Zm3-7a3,3,0,0,1-3,3H17a3,3,0,0,1-3-3V52H50Zm9-3H5V21H7V49a1,1,0,0,0,1.316.949l4.411-1.47a23.134,23.134,0,0,1,14.546,0l4.411,1.47a1,1,0,0,0,.632,0l4.411-1.47a23.134,23.134,0,0,1,14.546,0l4.411,1.47A1.01,1.01,0,0,0,56,50a1,1,0,0,0,1-1V21h2Z"/><path d="M26.684,41.18a1,1,0,1,0,.632-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.633,1.9A23.148,23.148,0,0,1,26.684,41.18Z"/><path d="M12.138,37.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.632-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.633,1.9Z"/><path d="M12.138,33.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.632-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.633,1.9Z"/><path d="M12.138,29.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.632-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,0,0,.633,1.9Z"/><path d="M12.138,25.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.632-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,0,0,.633,1.9Z"/><path d="M37.316,41.18a23.148,23.148,0,0,1,14.546,0,1,1,0,0,0,.633-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.632,1.9Z"/><path d="M37.316,37.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.633-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.632,1.9Z"/><path d="M37.316,33.18a23.148,23.148,0,0,1,14.546,0,1,1,0,1,0,.633-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.632,1.9Z"/><path d="M37.316,29.18a23.148,23.148,0,0,1,14.546,0,1,1,0,0,0,.633-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.632,1.9Z"/><path d="M37.316,25.18a23.148,23.148,0,0,1,14.546,0,1,1,0,0,0,.633-1.9,25.146,25.146,0,0,0-15.811,0,1,1,0,1,0,.632,1.9Z"/><rect x="29" y="6" width="2" height="2"/><rect x="33" y="6" width="2" height="2"/><rect x="29" y="53" width="6" height="2"/></g></svg>

                            </div>

                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Elektron kitoblar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    34
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                            >


                                <svg id="Capa_1" enable-background="new 0 0 512 512" class="w-5 h-5" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m486.093 255.403h-10.908v-17.81c0-38.189-9.918-75.579-28.722-108.528l2.531-2.531c6.518-6.518 7.423-16.745 2.154-24.317-44.531-64.005-117.484-102.217-195.148-102.217s-150.617 38.212-195.148 102.217c-5.269 7.574-4.362 17.802 2.158 24.321l2.528 2.528c-18.804 32.948-28.722 70.338-28.722 108.528v17.81h-10.909c-14.285-.001-25.907 11.621-25.907 25.906v124.25c0 14.286 11.622 25.908 25.907 25.908h11.486c2.375 10.525 11.794 18.412 23.026 18.412h23.01c13.019 0 23.61-10.591 23.61-23.61v-18.75c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v18.75c0 4.748-3.862 8.61-8.61 8.61h-23.009c-4.748 0-8.61-3.862-8.61-8.61l.005-165.766c.052-4.698 3.89-8.504 8.605-8.504h23.01c4.748 0 8.61 3.858 8.61 8.6v111.92c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-111.92c0-13.013-10.591-23.6-23.61-23.6h-23.01c-3.036 0-5.937.582-8.605 1.63v-1.037c0-34.43 8.651-68.157 25.079-98.107 3.362 1.931 7.261 2.801 11.221 2.427 5.69-.541 10.801-3.573 14.021-8.321 34.725-51.206 92.245-81.777 153.864-81.777s119.139 30.571 153.865 81.777c3.22 4.748 8.33 7.781 14.021 8.321.605.058 1.209.086 1.81.086 3.328 0 6.555-.889 9.404-2.526 16.432 29.953 25.086 63.685 25.086 98.12v1.037c-2.668-1.048-5.569-1.63-8.605-1.63h-23.01c-13.019 0-23.61 10.587-23.61 23.6v165.67c0 13.013 10.591 23.6 23.61 23.6h23.01c11.232 0 20.65-7.883 23.026-18.402h11.487c14.285 0 25.907-11.622 25.907-25.908v-124.25c-.001-14.285-11.623-25.907-25.908-25.907zm-471.093 150.157v-124.25c0-6.014 4.893-10.907 10.907-10.907h10.903v146.065h-10.903c-6.014 0-10.907-4.893-10.907-10.908zm410.305-278.579c-.718-.068-2.066-.394-3.025-1.808-37.522-55.327-99.682-88.358-166.28-88.358s-128.758 33.031-166.279 88.358c-.958 1.414-2.307 1.739-3.025 1.807-.694.065-2.026.004-3.175-1.144l-9.906-9.906c-1.377-1.377-1.567-3.542-.45-5.147 41.728-59.976 110.078-95.783 182.835-95.783s141.107 35.807 182.835 95.784c1.117 1.604.928 3.768-.448 5.144l-9.91 9.91c-1.148 1.147-2.482 1.209-3.172 1.143zm71.695 278.579c0 6.015-4.893 10.908-10.907 10.908h-10.903v-69.908c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v79.71c0 4.742-3.862 8.6-8.61 8.6h-23.01c-4.748 0-8.61-3.858-8.61-8.6v-165.67c0-4.742 3.862-8.6 8.61-8.6h23.01c4.715 0 8.553 3.806 8.605 8.504l.005 51.056c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-41.157h10.903c6.014 0 10.907 4.893 10.907 10.907z"/><path d="m195.39 202.033c-4.142 0-7.5 3.358-7.5 7.5v70.711c0 4.142 3.358 7.5 7.5 7.5h141.423c4.142 0 7.5-3.358 7.5-7.5v-70.711c0-4.142-3.358-7.5-7.5-7.5zm133.923 70.711h-126.423v-55.711h126.423z"/><path d="m388.76 231.78c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v168.245h-193.522c-16.173 0-30.758 6.901-40.988 17.903v-202.338c0-22.597 18.388-40.98 40.99-40.98h193.52v22.17c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-29.67c0-4.142-3.358-7.5-7.5-7.5h-201.02c-30.873 0-55.99 25.112-55.99 55.98v240.42.001.002c0 30.872 25.116 55.988 55.988 55.988h201.022c4.142 0 7.5-3.358 7.5-7.5zm-15 224.239v8.655h-193.522c-4.776 0-8.663-3.886-8.663-8.663s3.886-8.663 8.663-8.663h193.522v8.66zm-193.522 40.981c-22.601 0-40.988-18.387-40.988-40.988s18.387-40.988 40.988-40.988h193.522v17.325h-193.522c-13.047 0-23.663 10.615-23.663 23.663s10.615 23.663 23.663 23.663h193.522v17.325z"/></g></g></svg>


                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Audio kitoblar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    10
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                            >

                                <svg id="Layer_1" enable-background="new 0 0 512.013 512.013" class="w-5 h-5" fill="currentColor" viewBox="0 0 512.013 512.013"  xmlns="http://www.w3.org/2000/svg"><g><g><path d="m508.437 296.851c-1.071-4.506-5.097-7.686-9.729-7.686-13.617 0-38.048-6.781-58.708-15.76v-43.395c0-16.542-13.458-30-30-30h-20v-180.005c0-11.028-8.972-20-20-20h-300c-11.028 0-20 8.972-20 20v120.005h-30c-11.028 0-20 8.972-20 20v290.001c0 16.542 13.458 30 30 30h324.815c11.763 10.871 25.703 21.246 42.23 30.681 1.536.877 3.247 1.315 4.958 1.315s3.421-.439 4.958-1.315c69.205-39.506 93.157-95.484 101.064-135.487 8.547-43.242.748-76.94.412-78.354zm-438.437-276.846h300v180.005h-173.229l-16.762-41.904c-4.397-10.993-14.557-18.097-25.883-18.097h-84.126zm-50 430.006v-10.001h51.996c5.523 0 10-4.477 10-10s-4.477-10-10-10h-51.996v-260h134.126c3.526 0 6.214 2.774 7.314 5.524l19.277 48.19c1.519 3.797 5.196 6.286 9.285 6.286h220c5.514 0 10 4.486 10 10v33.151c-4.433-2.744-8.201-5.53-10.967-8.266-3.896-3.853-10.166-3.853-14.063 0-16.401 16.218-67.452 34.269-89.675 34.269-4.631 0-8.657 3.18-9.729 7.686-.336 1.414-8.135 35.112.413 78.354 4.886 24.721 15.907 55.542 39.941 84.807h-305.922c-5.514 0-10-4.486-10-10zm468.404-78.685c-9.983 50.501-39.038 90.54-86.402 119.088-47.102-28.392-76.104-68.164-86.243-118.294-5.673-28.053-3.625-52.039-1.985-63.479 25.801-2.903 66.551-17.472 88.229-33.571 21.682 16.103 62.445 30.674 88.246 33.573 1.634 11.289 3.662 34.821-1.845 62.683z"/><path d="m106.501 60.006h226.999c5.523 0 10-4.477 10-10s-4.477-10-10-10h-226.999c-5.523 0-10 4.477-10 10s4.477 10 10 10z"/><path d="m343.5 90.006c0-5.523-4.477-10-10-10h-226.999c-5.523 0-10 4.477-10 10s4.477 10 10 10h226.999c5.522 0 10-4.477 10-10z"/><path d="m333.5 120.006h-113.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h113.5c5.523 0 10-4.477 10-10s-4.478-10-10-10z"/><path d="m333.5 160.006h-59c-5.523 0-10 4.477-10 10s4.477 10 10 10h59c5.523 0 10-4.477 10-10s-4.478-10-10-10z"/><path d="m439.358 327.603c-8.013 0-15.546 3.121-21.212 8.787l-27.6 27.6-4.69-4.69c-5.666-5.666-13.199-8.786-21.212-8.786s-15.546 3.121-21.211 8.786c-5.666 5.666-8.787 13.199-8.787 21.212s3.121 15.546 8.786 21.212l25.902 25.902c5.848 5.848 13.53 8.771 21.211 8.771s15.364-2.924 21.212-8.771l48.812-48.812c11.696-11.696 11.696-30.728 0-42.423-5.664-5.667-13.197-8.788-21.211-8.788zm7.07 37.067-48.811 48.812c-3.898 3.898-10.241 3.897-14.139 0l-25.902-25.902c-1.889-1.888-2.928-4.399-2.928-7.069 0-2.671 1.04-5.181 2.928-7.069 1.888-1.889 4.399-2.928 7.069-2.928s5.181 1.04 7.069 2.928l11.761 11.761c1.875 1.875 4.419 2.929 7.071 2.929s5.196-1.054 7.071-2.929l34.671-34.671c1.888-1.889 4.399-2.928 7.069-2.928 2.671 0 5.181 1.04 7.069 2.928 3.9 3.898 3.9 10.24.002 14.138z"/><path d="m116.993 420.01c-5.523 0-10 4.477-10 10s4.477 10 10 10h.007c5.523 0 9.997-4.477 9.997-10s-4.481-10-10.004-10z"/></g></g></svg>

                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Rasmiy hujjatlar
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    20
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                            >

                                <svg viewBox="0 0 512 512" class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M399,450H115a59.06,59.06,0,0,1-59-59V246a59.06,59.06,0,0,1,59-59h99.86a29,29,0,0,0,29-29h0a59.06,59.06,0,0,1,59-59H399a59.06,59.06,0,0,1,59,59V391A59.07,59.07,0,0,1,399,450ZM115,217a29,29,0,0,0-29,29V391a29,29,0,0,0,29,29H399a29,29,0,0,0,29-29V158a29,29,0,0,0-29-29H302.86a29,29,0,0,0-29,29,59.07,59.07,0,0,1-59,59Z"/><path d="M121,217a15,15,0,0,1-15-15V63a15,15,0,0,1,15-15H393a15,15,0,0,1,15,15v51a15,15,0,0,1-30,0V78H136V202A15,15,0,0,1,121,217Z"/></g></svg>
                            </div>
                            <div>
                                <p
                                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                    Multimedia
                                </p>
                                <p
                                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    35
                                </p>
                            </div>
                        </div>


                        <!-- New Table -->

            </main>
        </div>
    </div>


@endsection
