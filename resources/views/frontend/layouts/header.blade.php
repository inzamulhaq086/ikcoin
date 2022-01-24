<header class="relative "
        style="background-image: url('frontend/image/home.png'); background-repeat: no-repeat; background-size: 100% 100%; ">

        <!-- ==========================NAV BAR START========================== -->

        <div class="w-full ">
            <nav class="mx-auto px-4 sm:py-8 py-2 max-width">
                <div class="row items-center justify-between">
                    <div class="w-4/12 sm:w-2/12 px-4 ">
                        <a href=""><img class="" src="{{asset('frontend/image/logo.png')}}" alt=""></a>
                    </div>
                    <div class="w-5/6 px-4 lg:flex hidden nav-bar justify-between">
                        <ul class="w-full flex justify-between space-x-3">
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Home.html">Home</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Ourvalues.html">iK Finance</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Contacts.html">Parsonal</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">Merchant</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">Advantages</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">Where to buy</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">Where to spend</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">Roadmap</a></li>
                            <li class="text-gray-300 hover:text-primary-color font-semibold"><a class="relative"
                                    href="Services.html">ICO</a></li>
                        </ul>
                    </div>
                    <div class="lg:hidden mobile-menu flex  z-10">
                        <span id="main-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white cursor-pointer"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </span>  

                        <ul id="main-menu"
                            class="bg-gradient-to-r from-black to-gray-900 p-2 hidden mt-12 w-full top-7 left-0 absolute divide-y divide-gray-700">
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Home </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> iK Finance </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Personal </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Merchant </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Advantages </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Where to buy </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Where to spend </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> Roadmap </a>
                            </li>
                            <li class="hover:bg-primary-color lg:w-44 transition duration-500 rounded-sm">
                                <a class='text-white hover:text-black py-4 px-4 flex items-center transition duration-400'
                                    href=''> ICO </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- ==========================NAV BAR END========================== -->

        <!-- ========================= BANNER START =========================== -->
        @include('frontend.layouts.banner')        
    </header>