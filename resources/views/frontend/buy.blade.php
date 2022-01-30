@extends('frontend.layouts.app')
@section('content')
    <!-- ========================= BANNER START =========================== -->
    <div class="relative "
        style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%;margin-top: -126px;  ">
        <div class="relative">
            <div class="relative py-44  z-0 mx-auto px-4 max-width">
                <div class="absolute md:block hidden top-60 left-40">
                    <img src="{{ asset('frontend/image/leaft-1.png') }}" alt="">
                </div>
                <div class="row ">
                    <div class="md:w-7/12 sm:w-8/12 w-9/12 px-4 py-16 flex z-10">
                        <div class="w-full md:space-y-10 sm:space-y-8 space-y-5">
                            <h1 class="text-gray-200 uppercase text-2xl">ik coin</h1>
                            <h1 class="w-full lg:text-7xl md:text-3xl sm:text-2xl text-white  font-bold lg:leading-snug leading-tight ">Compre iK Coin <span class="text-primary-color">online</span>
                            </h1>
                            <p class="text-gray-300 text-lg">incentivar a compra da moeda também por causa do ICO</p>
                            <div class="sm:flex whitespace-nowrap w-full sm:space-x-16 space-x-0 sm:space-y-0 space-y-4 ">
                                <a class="sm:w-2/5 w-full font-bold border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-2 sm:py-3 md:py-4 px-2 rounded-full duration-300 flex justify-center items-center text-center lg:text-base md:text-sm text-xs"
                                    href="#">Baixe o whihtepaper</a>
                                <a class="sm:w-2/5 w-full font-bold border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-2 sm:py-3 md:py-4  px-2 rounded-full duration-300 flex justify-center items-center text-center lg:text-base md:text-sm text-xs"
                                    href="#">Compare IK Coin</a>
                            </div>

                        </div>
                    </div>
                    <div class="md:w-7/12 sm:w-9/12  flex items-center justify-center sm:absolute -right-20 z-0">
                        <img class="" src="{{asset('frontend/image/buy.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
         <!--======================== START ICO ===================== -->
    <div class="">
        <div class="max-width mx-auto px-4 lg:py-20 sm:py-12 py-8">
            <div class="row">
                <div class="w-full lg:w-1/2 md:w-8/12 px-4 space-y-12">
                    <div class="space-y-3">
                        <h1 class="text-primary-color lg:text-5xl md:text-3xl text-xl font-bold">Adquira a moeda</h1>
                    <h1 class="text-white lg:text-5xl md:text-3xl text-xl font-bold">no nosso ICO</h1>
                    </div>
                    <p class="text-gray-300 text-lg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================ICO END ============================ -->
    </div>
    <!-- ========================= BANNER END =========================== -->
   
    <main>
        <div class="relative"
            style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; ">
            <div class="md:absolute md:block hidden left-40 z-0 " style="top: 430px;">
                <img src="{{asset('frontend/image/dotted-partten.png')}}" alt="">
            </div>
            <div class="max-width mx-auto px-4 lg:py-20 sm:py-12 py-8 relative z-50">
                <div class="row md:space-y-0 space-y-10">
                    <div class="w-full lg:w-5/12 md:w-4/12 px-4 space-y-4">
                        <h1 class="text-white lg:text-5xl md:text-2xl text-xl font-bold">Investir na iK Coin</h1>
                        <h1 class="text-primary-color lg:text-5xl md:text-2xl text-xl font-bold">é rápido e seguro</h1>
                    </div>
                    <div class="w-full lg:w-7/12 md:w-8/12 px-4 md:px-8 sm:pb-14">
                        <div class="sm:space-y-7 ">
                            <div class="">
                                <div
                                    class="w-full sm:flex justify-center items-center sm:space-x-7 space-x-0 space-y-4 sm:space-y-0">
                                    <div class="flex">
                                        <h1 class="bg-primary-color rounded-full px-6 py-4 text-xl font-bold">1</h1>
                                    </div>
                                    <div class="">
                                        <div
                                            class="card-color  text-center rounded-2xl group  relative px-10 py-9 flex items-center">
                                            <div class="w-full sm:w-8/12 border-r-2 sm:pr-8 border-primary-color">
                                                <h1
                                                    class="w-10/12 text-gray-300 sm:text-2xl font-bold sm:leading-9  text-left">
                                                    Connecte a sua cartera <a class="text-primary-color underline "
                                                        href="">Metamask</a></h1>
                                            </div>
                                            <div class="w-4/12 flex justify-end items-start">
                                                <img class="sm:w-20 w-14 h-auto" src="{{asset('frontend/image/fox-icon.png')}}" alt="">
                                            </div>
                                            <span
                                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-primary-color text-xl py-7 sm:pl-28">
                                    <h1>Nenhuma carteira encontrada (Ex: Metamask)</h1>
                                </div>
                            </div>
                            <div
                                class="w-full sm:flex justify-center items-center sm:space-x-7 space-x-0 space-y-4 sm:space-y-0">
                                <div class="flex">
                                    <h1 class="bg-primary-color rounded-full px-6 py-4 text-xl font-bold">2</h1>
                                </div>
                                <div class="">
                                    <div
                                        class="card-color  text-center rounded-2xl group  relative px-10 py-9 flex items-center">
                                        <div class="w-full sm:w-8/12 border-r-2 border-primary-color">
                                            <h1 class="w-10/12 text-gray-300 sm:text-xl font-bold sm:leading-9 text-left">
                                                Adicione o Token <a class="text-primary-color underline sm:text-xl"
                                                    href="">Adicionar ao metamask</a></h1>
                                        </div>
                                        <div class="w-4/12 flex justify-end items-start">
                                            <img class="sm:w-20 w-14 h-auto" src="{{asset('frontend/image/ik-icon.png')}}" alt="">
                                        </div>
                                        <span
                                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:py-0 py-8">
                                <div class="sm:flex items-center sm:space-x-7 space-x-0">
                                    <div class="flex">
                                        <h1 class="bg-primary-color rounded-full px-6 py-4 text-xl font-bold ">3</h1>
                                    </div>
                                    <div class="text-gray-300 text-xl py-7 ">
                                        <h1 class="px-4">Selecione o meio de pagamento</h1>
                                    </div>
                                </div>
                                <div
                                    class="w-full md:flex justify-between items-center md:space-y-0 space-y-8 sm:pl-24 pl-0">
                                    <div class="md:w-4/12 w-full">
                                        <div
                                            class=" card-color md:px-14 px-4 lg:py-12 py-8 rounded-2xl group relative flex items-center justify-center">
                                            <div
                                                class="flex flex-wrap justify-center items-center sm:space-y-4 space-y-0 text-center">
                                                <img class="w-14 h-14 " src="{{asset('frontend/image/fox-icon.png')}}" alt="">
                                                <h1 class="text-gray-200 w-full">Metamask</h1>
                                            </div>
                                            <span
                                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="md:w-8/12 w-full">
                                        <div
                                            class="md::ml-4 ml-0 card-color sm:px-14 px-6 lg:py-16 py-12 rounded-2xl group relative flex items-center justify-center">
                                            <div class="flex justify-center space-x-4 items-center py-2">
                                                <img class="w-1/4" src="{{asset('frontend/image/mb-ivs.png')}}" alt="">
                                                <img class="w-1/4" src="{{asset('frontend/image/mb-way.png')}}" alt="">
                                                <img class="w-1/4 flex items-center" src="{{asset('frontend/image/buy-visa.png')}}" alt="">
                                                <img class="w-1/4" src="{{asset('frontend/image/bank.png')}}" alt="">

                                            </div>
                                            <span
                                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===========================================================  -->
        <!-- ============================FAZER START ============================ -->
        <div class="relative  bg-white overflow-hidden">
            <div class="max-width mx-auto lg:py-48 sm:py-24 py-16">
                <div class=" row ">
                    <div class="md:w-7/12 px-4 md:py-0 text-left space-y-10">
                        <div class="">
                            <h1 class="text-xl md:text-3xl lg:text-5xl font-extrabold lg:leading-tight md:leading-10">Fazer
                                parte da iK Coin
                                é fazer parte de um novo</h1>
                            <h1 class="text-xl md:text-3xl lg:text-5xl font-bold text-primary-color">Conceito de criptomoeda
                            </h1>
                        </div>
                        <div class="">
                            <p class="para text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore
                                magnam aliquam quaerat voluptatem.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-5/12 w-full md:h-full md:absolute top-12 right-0 ">
                        <img src="{{asset('frontend/image/coin-chart.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================FAZER END ============================ -->

        <!--============================= USAR START============================== -->
        <div class="relative"
            style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; ">
            <div class="sm:absolute sm:block hidden top-44">
                <img src="{{asset('frontend/image/leaft-6.png')}}" alt="">
            </div>
            <div class="sm:absolute sm:block hidden bottom-80 right-20">
                <img src="{{asset('frontend/image/leaft-2.png')}}" alt="">
            </div>
            <div class="max-width mx-auto px-4 lg:py-40 md:py-24 py-16 md:space-y-20 space-y-10 ">
                <div class="row md:justify-center">
                    <div class="w-full  sm:w-3/4 px-4 md:text-center text-left lg:space-y-6 md:space-y-4 space-y-2">
                        <h1 class="text-primary-color lg:text-6xl md:text-4xl text-2xl font-bold ">Onde gastar a moeda</h1>
                        <p class="text-gray-300 lg:text-2xl md:text-xl sm:text-lg text-base">Falar do preço baixo da
                            moeda durante esta fase do lançamento.</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="w-full px-4 my-4 md:w-1/4 sm:w-1/2 ">
                        <div class="card-color  text-center space-y-9 rounded-2xl group py-14 relative px-2">
                            <h1 class="w-full text-primary-color text-2xl font-bold leading-9">Ecossistema <br> iK
                                Tech Solutions</h1>
                            <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem beatae vitae dicta sunt explicabo.</p>
                            <span
                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-4 my-4 md:w-1/4 sm:w-1/2 ">
                        <div class="card-color  text-center space-y-9 rounded-2xl group  py-14 relative px-2">
                            <h1 class="w-full text-primary-color text-2xl font-bold leading-9 text-center">Compras <br>
                                diárias</h1>
                            <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem beatae vitae dicta sunt explicabo.</p>
                            <span
                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-4 my-4 md:w-1/4 sm:w-1/2 ">
                        <div class="card-color  text-center space-y-9 rounded-2xl group  py-14 relative px-2">
                            <h1 class="w-full text-primary-color text-2xl font-bold leading-9 text-center">Recebimentos <br>
                                diários</h1>
                            <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem beatae vitae dicta sunt explicabo.</p>
                            <span
                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-4 my-4 md:w-1/4 sm:w-1/2 ">
                        <div class="card-color  text-center space-y-9 rounded-2xl group  py-14 relative px-2">
                            <h1 class="w-full text-primary-color text-2xl font-bold leading-9 text-center">Turismo <br>
                                Crypto</h1>
                            <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem beatae vitae dicta sunt explicabo.</p>
                            <span
                                class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================= USAR END ============================== -->
    </main>
@endsection
