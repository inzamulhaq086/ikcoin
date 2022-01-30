@extends('frontend.layouts.app')
@section('content')
    <!-- ========================= BANNER START =========================== -->
    <div class="relative "
        style="background-image: url(frontend/image/banner.jpg); background-repeat: no-repeat; background-size: 100% 100%; margin-top: -126px; ">
        <div class="banner relative  z-10">
            <div class="mx-auto px-4 md:py-48 py-16 h-full max-width flex items-center relative">
                <div class="">
                    <img class="absolute hidden lg:block -bottom-32 right-72 lg:w-52" src="{{asset('frontend/image/leaft-3.png')}}" alt="">
                </div>
                <div class="">
                    <img class="absolute hidden lg:block right-32 top-20 w-24" src="{{asset('frontend/image/leaft-5.png')}}" alt="">
                </div>
                <div class="row">
                    <div class="relative w-full px-4  mx-auto lg:mx-0 md:w-2/3 lg:w-1/2 text-white text-center lg:text-left">
                        <img class="absolute -top-4 hidden lg:block md:left-96 lg:left-36" src="{{asset('frontend/image/leaft-1.png')}}" alt="">
                        <h2 class="text-xl md:text-2xl uppercase">ik coin</h2>
                        <h1
                            class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-8 lg:leading-snug md:leading-tight">
                            Equipa <span class="text-primary-color"> iK Coin</span></h1>
                        <p class="text-sm sm:text-base md:text-lg font-normal leading-relaxed lg:leading-loose text-gray-200">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s
                            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= BANNER END =========================== -->
    <main>
        <!--================================ CARD START ==================================== -->
        <div class="lg:py-24 py-14">
            <div class="max-width mx-auto px-4">
                <div class="row">
                    <div class="w-full px-4">
                        <h1
                            class="lg:text-5xl md:text-4xl text-2xl text-center md:text-left font-bold lg:pb-10 text-deepblack">
                            Conheça cada elemento da equipa</h1>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6 ">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mt-14">
                            <div class="mb-12 h-80 bg-black">

                            </div>
                            <h2 class="text-2xl md:text-3xl text-deepblack font-bold">John Dos Santos</h2>
                            <h3 class="text-primary-color font-semibold pt-4">CEO</h3>
                            <p class="text-sm lg:text-base text-gray-500 leading-relaxed lg:leading-loose py-6">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex</p>
                            <a class="text-blue-600 text-lg" href="#"><i
                                    class="fab fa-linkedin text-2xl mr-4"></i>linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================================ CARD START ==================================== -->

        <!-- ==============================START Preparado ======================================= -->
        <div class="relative overflow-hidden"
            style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; ">
            <div class="">
                <img class="absolute hidden lg:block w-56 -right-16 top-24" src="image/leaft-3.png" alt="">
            </div>
            <div class="absolute top-4 left-1/2 lg:block hidden">
                <img class="w-36" src="{{asset('frontend/image/coin-blur-1.png')}}" alt="">
            </div>
            <div class="absolute top-16 right-0 lg:block hidden">
                <img class="" src="{{asset('frontend/image/leaft-8.png')}}" alt="">
            </div>
            <div class="absolute left-36 bottom-16  lg:block hidden">
                <img class="" src="{{asset('frontend/image/leaft-9.png')}}" alt="">
            </div>
            <div class="mx-auto px-4 max-width relative">
                <div class="absolute bottom-20 right-0 lg:block hidden">
                    <img class="" src="{{asset('frontend/image/coin-blur-2.png')}}" alt="">
                </div>
                <div class="row  items-center">
                    <div
                        class="relative w-full px-4 lg:py-40 md:py-24 py-16  mx-auto lg:mx-0 md:w-2/3 lg:w-1/2 text-white text-center lg:text-left space-y-6">
                        <h1
                            class="text-3xl md:text-4xl lg:text-5xl font-extrabold pr-4md:py-8 lg:leading-snug md:leading-tight">
                            Preparado para<span class="text-primary-color"> investir na iK Coin</span></h1>
                        <p
                            class="text-sm sm:text-base md:text-lg font-normal leading-relaxed lg:leading-loose text-gray-200">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem beatae vitae dicta sunt
                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <div class="flex md:flex-row flex-col mt-8 lg:mt-10 font-extrabold text-md md:text-xl text-center">
                            <a class="w-full sm:w-1/2  mx-auto bg-primary-color whitespace-nowrap font-black border-primary-color border-4 hover:bg-transparent hover:text-primary-color duration-300 text-black py-3 md:py-4 rounded-full"
                                href="#">Baixe o whihtepaper</a>
                            <a class="w-full sm:w-1/2 md:ml-6 mt-2 md:mt-0 block mx-auto whitespace-nowrap font-black border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-3 md:py-4 rounded-full duration-300"
                                href="#">Compare IK Coin</a>
                        </div>
                    </div>
                    <div class="md:w-1/2 px-4 hidden lg:block">
                        <div class="flex items-center justify-center">
                            <img src="{{asset('frontend/image/Ik-golden.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==============================START Preparado ======================================= -->

    </main>
@endsection
