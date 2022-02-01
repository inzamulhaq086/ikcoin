@extends('frontend.layouts.app')
@section('content')
    <!-- ========================= BANNER START =========================== -->
    <div class="relative "
        style="background-image: url(frontend/image/home.png); background-repeat: no-repeat; background-size: 100% 100%; margin-top: -126px;">
        <div class="relative">
            <div class="relative z-0 mx-auto py-28 px-4 max-width">
                <div class="row justify-end">
                    <div class="md:w-5/12 sm:w-4/12 w-3/12 flex items-center ">
                        <img class="" src="{{ asset('frontend/image/coin.png') }}" alt="">
                    </div>
                    <div class="md:w-7/12 sm:w-8/12 w-9/12 px-4 lg:py-60 md:py-48 sm:py-28 py-16 flex justify-end">
                        <div class="w-11/12 md:space-y-10 sm:space-y-8 space-y-5">
                            <h1
                                class="w-full lg:text-4xl md:text-3xl sm:text-2xl text-white text-right font-bold lg:leading-snug leading-tight ">
                                Faça as suas compras e pagamentos com a iK Coin <br><span class="font-normal">ou iK Coin
                                    A mudança nos seus pagamentos
                                </span>
                            </h1>
                            <div class="sm:flex  w-full sm:space-x-16 space-x-0 sm:space-y-0 space-y-2 justify-end ">
                                <a class="sm:w-1/3 w-full font-bold border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-2 sm:py-3 md:py-4 px-2 rounded-full duration-300 flex justify-center items-center text-center lg:text-base md:text-sm text-xs"
                                    href="#">Baixe o whihtepaper</a>
                                <a class="sm:w-1/3 w-full font-bold border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-2 sm:py-3 md:py-4  px-2 rounded-full duration-300 flex justify-center items-center text-center lg:text-base md:text-sm text-xs"
                                    href="#">Compare IK Coin</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= BANNER END =========================== -->

    <!-- ========================= All START =========================== -->
    <main>
        <section>
            <!-- ========================== PAYMENT SUCCESSFUL START ========================= -->
            <div class=" md:relative md:py-24  ">
                <div class="max-width mx-auto ">
                    <div class="w-full flex flex-wrap">
                        <div class="md:w-7/12 px-12 md:py-0 py-16 text-left sm:space-y-12 space-y-4">
                            <div class="space-y-6">
                                <h1 class="text-2xl md:text-3xl lg:text-6xl  lg:leading-tight leading-tight ">Use iK
                                    Coin para os seus <span class="font-bold">pagamentos e recebimentos diários.</span>
                                </h1>
                                <p class="text-sm sm:text-md md:text-lg text-gray-900 md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut
                                    labore et
                                    dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <a class="w-1/2 block font-bold border-primary-color border-4 bg-primary-color hover:bg-black hover:text-primary-color text-black py-2 sm:py-3 md:py-4 lg:px-20 md:px-14 sm:px-8 px-2 rounded-full duration-300 text-center sm:text-base text-xs"
                                href="#">CTA</a>
                        </div>
                        <div class="md:w-5/12 w-full md:h-full md:absolute md:top-0 md:right-0">
                            <img src="{{ asset('frontend/image/payment-success.png') }}" alt=""
                                class="w-full md:h-full object-cover object-top">
                            <span class="absolute top-0 -left-6 w-6 h-28 bg-primary-color"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==========================PAYMENT SUCCESSFUL START END ========================= -->


            <!-- ======================ICO START ========================= -->
            <div class=""
                style="background-image: url('frontend/image/icobanner.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="mx-auto px-4 max-width">
                    <div class="row">
                        <div class="flex justify-end">
                            <div
                                class="w-full md:w-7/12 sm:w-8/12 px-4 lg:py-60 md:py-48 sm:py-28 py-16 flex sm:justify-end justify-start">
                                <div class="sm:w-11/12 w-full md:space-y-10 sm:space-y-8 space-y-5">
                                    <h1
                                        class="w-full lg:text-5xl md:text-4xl sm:text-3xl text-2xl text-primary-color text-left font-bold lg:leading-tight leading-tight ">
                                        Compre a moeda durante o nosso ICO
                                    </h1>
                                    <p
                                        class="w-full lg:text-4xl md:text-3xl sm:text-2xl text-white text-left lg:leading-tight leading-tight ">
                                        Falar do preço baixo da moeda durante esta fase do lançamento
                                    </p>
                                    <a class="sm:w-1/2 w-1/2 block font-bold border-primary-color border-4 bg-primary-color hover:bg-black hover:text-primary-color text-black py-2 sm:py-3 md:py-4 lg:px-20 md:px-14 sm:px-8 px-2 rounded-full duration-300 text-center sm:text-base text-xs"
                                        href="#">CTA</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====================== ICO END ========================= -->


            <!-- ====================== IK FINANCE START =========================== -->
            <div class=" md:relative md:py-24  ">
                <div class="max-width mx-auto ">
                    <div class="w-full flex flex-wrap">
                        <div class="md:w-7/12 px-12 md:py-0 py-16 text-left md:space-y-12 space-y-4">
                            <div class="space-y-6">
                                <h1 class="font-bold text-2xl md:text-3xl lg:text-6xl py-6 lg:leading-tight leading-tight ">
                                    iK Finance</h1>
                                <p class="text-sm sm:text-md md:text-lg text-gray-900 md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut
                                    labore et
                                    dolore magnam aliquam quaerat voluptatem.</p>
                                <p class="text-sm sm:text-md md:text-lg text-gray-900 md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut
                                    labore et
                                    dolore magnam aliquam</p>
                            </div>
                            <a class="sm:w-1/2 w-1/2 block font-bold border-primary-color border-4 bg-primary-color hover:bg-black hover:text-primary-color text-black py-2 sm:py-3 md:py-4 lg:px-20 md:px-14 sm:px-8 px-2 rounded-full duration-300 text-center sm:text-base text-xs"
                                href="#">CTA</a>
                        </div>

                    </div>
                    <div class="md:w-5/12 w-full md:h-full md:absolute md:top-0 md:right-0">
                        <img src="{{ asset('frontend/image/ik-finance.png') }}" alt=""
                            class="w-full md:h-full object-cover object-top">
                        <span class="absolute top-0 -left-6 w-6 h-28 bg-primary-color"></span>
                    </div>
                </div>
            </div>
            </div>
            <!-- ====================== IK FINANCE END =========================== -->


            <!--============================= USAR START============================== -->
            @if(!empty($gastars))
            <div class="relative"
                style="background-image: url('frontend/image/banner-bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; ">
                <div class="max-width mx-auto px-4 lg:py-60 md:py-28 py-16 md:space-y-20 space-y-10 ">
                    <div class="row md:justify-center">
                        <div class="w-full  sm:w-3/4 px-4 md:text-center text-left lg:space-y-6 md:space-y-4 space-y-2">
                            <h1 class="text-primary-color lg:text-6xl md:text-4xl text-2xl font-bold ">Onde
                                usar a iK Coin</h1>
                            <p class="text-gray-300 lg:text-2xl md:text-xl sm:text-lg text-base">Falar do preço baixo da
                                moeda durante esta fase do lançamento.</p>
                        </div>
                    </div>
                    <div class="row ">
                            @foreach ( $gastars as $gastar)
                                <div class="w-full px-4 my-4 md:w-1/4 sm:w-1/2 ">
                                    <div class="card-color  text-center space-y-9 rounded-2xl group py-14 relative px-2">
                                        <h1 class="w-full text-primary-color text-2xl font-bold leading-9">{{$gastar->title}}</h1>
                                        <p class="w-full text-gray-300 text-lg leading-8">{{$gastar->discription}}</p>
                                        <span
                                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif                        
            <!--============================= USAR END ============================== -->


            <!-- =============================ROAD MAP START =================================== -->
            @if(!empty($roadmaps))
            <div class="">
                <div class="max-width mx-auto px-12 py-16 md:py-32 lg:py-40">
                    <div class="pb-20 lg:pb-32">
                        <h1 class="md:text-center text-3xl md:text-4xl lg:text-5xl font-extrabold z-20">Roadmap</h1>
                    </div>
                    <div class="relative mt-8 space-y-16">
                        <div
                            class="absolute w-2 bg-primary-color h-full -top-20 xl:left-1/2 left-9 sm:left-16 xl:transform xl:-translate-x-1/2">
                            <span
                                class="absolute top-0 left-0 w-full h-16 bg-gradient-to-t from-transparent to-white"></span>
                        </div>
                        <!-- 2  -->
                        @foreach ($roadmaps as $roadmap )
                        <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                            <div class="absolute xl:-left-16 left-0">
                                <img class="w-20 sm:w-32" src="{{asset('storage/'.$roadmap->coin_img)}}" alt="" >
                            </div>
                            <div class="sm:pr-8 pr-0  pl-8">
                                <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">{{$roadmap->name}}, {{$roadmap->year}}</p>
                                <h1 class="text-xl md:text-2xl pt-4 pb-6 font-bold">{{$roadmap->title}}</h1>
                                <div class="text-sm sm:text-md md:text-lg leading-relaxed lg:leading-loose">
                                    <p class="text-gray-700">{{$roadmap->discription}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <!-- =============================ROAD MAP END =================================== -->


            <!-- ===========================COMECE START ============================= -->
            <div class="relative"
                style="background-image: url('frontend/image/banner-bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; ">
                <div class="absolute lg:-top-32 md:-top-16 sm:-top-10 -top-8">
                    <img class="lg:w-96 md:w-40 sm:w-32 w-20" src="{{ asset('frontend/image/leaft-3.png') }}" alt="">
                </div>
                <div class="md:absolute hidden bottom-28 right-80">
                    <img class="w-40" src="{{ asset('frontend/image/leaft-9.png') }}" alt="">
                </div>
                <div class="max-width mx-auto px-4 space-y-12 md:py-48 sm:py-24 py-16">
                    <div class="row">
                        <div class="w-full text-center">
                            <h1 class="text-primary-color lg:text-5xl md:text-3xl sm:text-xl text lg font-bold">
                                Comece já a usar
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-1.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-2.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-3.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-4.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-5.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                        <div
                            class="md:w-1/3 sm:w-1/2 w-full text-center flex flex-wrap justify-center space-y-8 md:py-12 py-4 px-2 ">
                            <img class="sm:w-24 w-12 sm:h-24 h-12 " src="{{ asset('frontend/image/home-icon-6.png') }}"
                                alt="">
                            <h1 class="w-full text-white sm:text-lg text-base font-bold">
                                Pague a amigos e família
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===========================COMECE END ============================= -->


            <!-- =========================ALGRAVE START =============================== -->

            <div class=" md:relative md:py-24  ">
                <div class="max-width mx-auto ">
                    <div class="w-full flex flex-wrap">
                        <div class="md:w-7/12 px-12 md:py-0 py-16 text-left sm:space-y-12 space-y-4">
                            <div class="space-y-6">
                                <h1
                                    class="font-bold text-2xl md:text-3xl lg:text-4xl py-6 lg:leading-tight leading-tight ">
                                    Porquê escolhemos o Algarve como a região crypto?</h1>
                                <p class="text-sm sm:text-md md:text-lg text-gray-900 md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut
                                    labore et
                                    dolore magnam aliquam quaerat voluptatem.</p>
                                <p class="text-sm sm:text-md md:text-lg text-gray-900 md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut
                                    labore et
                                    dolore magnam aliquam quaerat voluptatem.</p>
                                <div class="space-x-4">
                                    <i class="fas fa-arrow-right text-primary-color sm:text-lg text-base"></i>
                                    <a class="sm:text-2xl text-xl font-bold uppercase" href="">sabe mais</a>
                                </div>
                            </div>
                            <div class="sm:flex  w-full sm:space-x-16 space-x-0 sm:space-y-0 space-y-2  ">
                                <a class="w-1/2 flex items-center justify-center font-bold border-primary-color border-4 bg-primary-color hover:bg-black hover:text-primary-color text-black py-2 sm:py-3 md:py-4 px-4 rounded-full duration-300 text-center sm:text-base text-xs "
                                    href="#">Compre IK Coin</a>
                                <a class="w-1/2 flex items-center justify-center font-bold border-primary-color border-4 bg-primary-color hover:bg-black hover:text-primary-color text-black py-2 sm:py-3 md:py-4 px-4 rounded-full duration-300 text-center sm:text-base text-xs"
                                    href="#">Baixe o Whitepaper</a>
                            </div>
                        </div>
                        <div class="md:w-5/12 w-full md:h-full md:absolute md:top-0 md:right-0">
                            <img src="{{ asset('frontend/image/sabe-maise-banner.png') }}" alt=""
                                class="w-full md:h-full object-cover object-top">
                            <span class="absolute top-0 -left-6 w-6 h-28 bg-primary-color"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========================ALGRAVE END =============================== -->

            <!-- ==========================INVISTA STRAT ============================== -->
            <div class="relative"
                style="background-image: url('frontend/image/banner-bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; ">
                <div class="absolute top-4 left-1/2 lg:block hidden">
                    <img class="w-36" src="{{ asset('frontend/image/coin-blur-1.png') }}" alt="">
                </div>
                <div class="absolute top-16 right-0 lg:block hidden">
                    <img class="" src="{{ asset('frontend/image/leaft-8.png') }}" alt="">
                </div>
                <div class="absolute left-36 bottom-0  lg:block hidden">
                    <img class="" src="{{ asset('frontend/image/leaft-99.png') }}" alt="">
                </div>
                <div class="relative max-width mx-auto px-4 sm:py-36 py-16">
                    <div class=" row items-center">
                        <div class="absolute bottom-20 right-0 lg:block hidden">
                            <img class="" src="{{ asset('frontend/image/coin-blur-2.png') }}" alt="">
                        </div>
                        <div class=" w-full md:w-7/12 px-4 sm:text-center md:text-left ">
                            <div class="sm:space-y-8 ">
                                <h1
                                    class="text-primary-color font-bold text-2xl md:text-3xl lg:text-5xl py-6 lg:leading-tight leading-tight ">
                                    Invista já na iK Coin</h1>
                                <p class="text-sm sm:text-md md:text-lg text-white md:leading-10">Sed ut perspiciatis
                                    unde omnis iste natus
                                    error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt.
                                </p>

                            </div>
                        </div>
                        <div
                            class=" w-full md:w-5/12 px-4 text-center md:text-left mb-8 md:mb-0 space-y-12 flex justify-center">
                            <img src="{{ asset('frontend/image/Ik-golden.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <!-- ==========================INVISTA END ============================== -->
        </section>
    </main>    
    <!-- ========================= All START =========================== -->
@endsection
