@extends('frontend.layouts.app')
@section('content')
    <!-- ========================= BANNER START =========================== -->
    <div class="relative "
        style="background-image: url(frontend/image/algarvebanner.jpg); background-repeat: no-repeat; background-size: 100% 100%; margin-top: -126px; ">
        <div class="banner relative  z-10 py-32">
            <div class="">
                <img class="absolute hidden lg:block -bottom-32 lg:w-52" src="{{asset('frontend/image/leaft-3.png')}}" alt=""
                    style="right: 636px;">
            </div>
            <div class="">
                <img class="absolute hidden lg:block right-72 w-24" src="{{asset('frontend/image/leaft-5.png')}}" alt="" style="bottom: 280px;">
            </div>
            <div class="mx-auto px-4 h-full max-width flex items-center md:pt-24 pt-16 md:pb-48 pb-24">
                <div class="row">
                    <div class="relative w-full px-4  mx-auto lg:mx-0 md:w-2/3 lg:w-1/2 text-white text-center lg:text-left">
                        <img class="absolute -top-4 hidden lg:block md:left-96 lg:left-36" src="{{asset('frontend/image/leaft-1.png')}}" alt="">
                        <h2 class="text-xl md:text-2xl uppercase">ik coin</h2>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-8">Começando o
                            turismo Crypto pelo Algarve</h1>
                        <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-200">Sed ut
                            perspiciatis unde omnis iste natus error sit voluptatem beatae vitae dicta sunt explicabo. Nemo
                            enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <div class="flex md:flex-row flex-col mt-8 lg:mt-10 font-extrabold text-md md:text-xl text-center">
                            <a class="w-full sm:w-1/2  mx-auto bg-primary-color whitespace-nowrap font-black border-primary-color border-4 hover:bg-transparent hover:text-primary-color duration-300 text-black py-3 md:py-4 rounded-full"
                                href="#">Baixe o whihtepaper</a>
                            <a class="w-full sm:w-1/2 md:ml-6 mt-2 md:mt-0 block mx-auto whitespace-nowrap font-black border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-3 md:py-4 rounded-full duration-300"
                                href="#">Compare IK Coin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= BANNER END =========================== -->
    <main>
        <!--========================= COMO START ============================= -->
            <div class="md:relative">
                <div class="max-width max-w-screen-xl mx-auto md:px-6">
                    <div class="w-full flex flex-wrap">
                        <div class="px-10 w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 py-16 md:py-24 lg:py-44 xl:py-60">
                                <h1 class="text-3xl md:text-4xl lg:text-5xl pb-6">Como vamos tornar do<span class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-8">Algarve a capital da Crypto</span></h1>
                                <p class="text-sm lg:text-lg font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                        </div>
                        <div class="md:pl-16 lg:pl-20 md:w-1/2 w-full md:h-full md:absolute md:top-0 md:right-0">
                            <img src="{{asset('frontend/image/como-banner.png')}}" alt="" class="w-full md:h-full object-cover object-center">
                            <span class="absolute hidden md:block top-0 md:left-10 lg:left-14 h-32 w-6 bg-primary-color"></span>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- ===============================COMO END ============================== -->

        <!-- ==========================ALGRAVE START ============================== -->
        <div class="mt-14 md:mt-0">
            <div class="md:relative">
                <div class="max-width max-w-screen-xl mx-auto md:px-6">
                    <div class="w-full flex flex-wrap">
                        <div class="px-10 w-full ml-auto md:w-1/2 text-center md:text-left mb-8 md:mb-0 py-16 md:py-24 lg:py-44 xl:py-60">
                                <h1 class="text-3xl md:text-4xl lg:text-5xl pb-6">Algarve é<span class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-8"> apenas o início</span></h1>
                                <p class="text-sm lg:text-lg font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                        </div>
                        <div class="md:pr-16 lg:pr-20 md:w-1/2 w-full md:h-full md:absolute md:top-0 md:left-0">
                            <img src="{{asset('frontend/image/apenas-banner.png')}}" alt="" class="w-full md:h-full object-cover object-center">
                            <span class="absolute hidden md:block top-0 md:right-10 lg:right-14 h-32 w-6 bg-primary-color"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===============================ALGRAVE END =================================== -->


        <!--======================= ROAD MAP START =========================== -->

        <div class="py-16 md:py-32 lg:py-40 px-8" style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; " >
            <div class="max-width mx-auto px-4">
                <div class="pb-20 lg:pb-32">
                    <h1 class="text-center text-white text-3xl md:text-4xl lg:text-5xl font-extrabold z-20">Roadmap</h1>
                </div>
            <div class="relative mt-8 space-y-16">
                <div class="absolute w-2 bg-yellow-400 h-full -top-20 xl:left-1/2 left-9 sm:left-16 xl:transform xl:-translate-x-1/2">
                    <span class="absolute top-0 left-0 w-full h-16 bg-gradient-to-t from-transparent to-deepblack"></span>
                </div>
    
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="image/ikcoin.png"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Junho,2020</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Nasce a IK Tech Solutions</h2>
                            <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-300">As nossas soluções englobam
                                3 segmentos:Logístico, compra & vendas e financeiro. Que formam um ecossistema que se completa. Para este desenvolvimento foi planeado 3 plataformas: iK Log (logística), ik Fintech (finanças e pagamentos) e Shop
                                Digital (compra e vendas).</p>
                    </div>
                </div>
    
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Agosto, 2020</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Planeamento e Desenvolvimento</h2>
                        <div class="text-sm sm:text-md md:text-lg leading-relaxed lg:leading-loose">
                            <p class="text-gray-300"><span class="text-primary-color font-bold">FASE 1</span> - IK Business
                                - Plataforma text-sm md:text-base font-base leading-relaxed lg:leading-loose B2B.</p>
                            <p class="text-gray-300 "><span class="text-primary-color font-bold">FASE 2</span> - IK
                                Excecutive - Plataforma de digitalização de
                                empresas de transportes</p>
                            <p class="text-gray-300"><span class="text-primary-color font-bold">FASE 3</span> - My IK -
                                Plataforma de solicitação rápida de transporte e logística. B2C </p>
                            <p class="text-gray-300"><span class="text-yellow-400 font-bold">Fase 4</span> - IK Business -
                                Plataforma text-sm md:text-base font-base leading-relaxed lg:leading-loose B2B.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Marco,2021</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Dia 15 inicia-se a fase 3, da venda
                                privada de 300 milhões de tokens
                                a U$ 0,02</h2>
                    </div>
                </div>
    <!-- 4 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Maio 2021</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Planeamento e início de
                            desenvolvimento (Fintech)</h2>
                        <div class="text-sm md:text-base font-base leading-relaxed lg:leading-loose">
                            <p class="text-gray-300"><span class="text-primary-color font-bold">FASE 1</span> - IK Ikcoin</p>
                            <p class="text-gray-300 "><span class="text-primary-color font-bold">FASE 2</span> - IK
                                ntermediador de pagamentos e transações Financeiras</p>
                            <p class="text-gray-300"><span class="text-primary-color font-bold">FASE 3</span> - My Banco Digital</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Junho,2021</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Abertura da Empresa em Portugal</h2>
                            <p class="text-sm sm:text-md md:text-lg text-gray-300 mb-10">Hospedagem das Apps My IK e IK Executive na Play Store.</p>
                            <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-300">
                                Digitalização de Empresas de transportes através da plataforma IK Executive.  Digitalização de Empresas de transportes através da plataforma IK Executive.</p>
                    </div>
                </div>
    <!-- 6 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Setembro, 2021</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Primeiro Contrato de distribuição e
                            logística text-sm md:text-base font-base leading-relaxed lg:leading-loose uma grande rede de
                            lojas no setor mobiliário</h2>
                    </div>
                </div>
                <!-- 7 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Outubro, 2021</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Finalização do desenvolvimento e
                                contrato inteligente da iK Coin.</h2>
                            <p class="text-sm sm:text-md md:text-lg text-gray-300 leading-relaxed lg:leading-loose">Lançamento do site da iK Coin</p>
                    </div>
                </div>
    <!-- 8 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Novembro, 2021</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Pré-venda da primeira fase</h2>
                        <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-300">Dia 15 inicia-se a fase 1 da venda privada de 800 milhões de tokens a U$ 0,005</p>
                    </div>
                </div>
                <!-- 9 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Dezembro, 2021</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Dia 15 inicia-se a fase 2, da venda
                                privada de 400 milhões de tokens
                                a U$ 0,01</h2>
                    </div>
                </div>
    <!-- 10 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Janeiro, 2022</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Dia 15 inicia-se a fase 3, da venda
                            privada de 300 milhões de tokens
                            a U$ 0,02</h2>
                    </div>
                </div>
                <!-- 11 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Fevereiro, 2022</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Lançamento do Shop Digital
                                ( marketplace + entregas e logísticas
                                + Plataforma de Pagamento )</h2>
                    </div>
                </div>
    <!-- 12 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Julho, 2022</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Inicio dos serviços financeiros e
                            de créditos</h2>
                    </div>
                </div>
                <!-- 13 -->
                <div class="w-full xl:w-1/2 relative xl:pr-24 pl-16 sm:pl-40 xl:pl-0 mb-32">
                    <div class="absolute xl:-right-16 left-0 xl:left-auto">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-left xl:text-right text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Setembro, 2023</p>
                            <h2 class="text-xl md:text-2xl pt-4 pb-6">Tornar a Fintech um Banco Digital</h2>
                    </div>
                </div>
    <!-- 14 -->
                <div class="ml-auto w-full xl:w-1/2 relative xl:pl-24 pl-16 sm:pl-40">
                    <div class="absolute xl:-left-16 left-0">
                        <img class="w-20 sm:w-32" src="{{asset('frontend/image/ikcoin.png')}}"
                                alt="">
                    </div>
                    <div class="pl-8 md:pr-8 pr-0  text-white">
                        <p class="text-primary-color text-sm sm:text-md md:text-lg font-bold">Julho, 2024</p>
                        <h2 class="text-xl md:text-2xl pt-4 pb-6">Inicio da Expansão mundial</h2>
                    </div>
                </div>
    
            </div>
        </div>
        </div>
        <!-- ===========================ROADMAP END ========================= -->
    </main>
@endsection
