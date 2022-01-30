@extends('frontend.layouts.app')
@section('content')
    <!-- ========================= BANNER START =========================== -->
    <div class="relative "
        style="background-image: url(frontend/image/businessbanner.jpg); background-repeat: no-repeat; background-size: 100% 100%; margin-top: -126px; ">
        <div class="relative z-10 py-32 overflow-hidden">
            <div class="absolute -right-24 top-1/3 lg:block hidden">
                <img class="" src="{{asset('frontend/image/leaft-9.png')}}">
            </div>
            <div class="relative mx-auto px-4  max-width flex items-center lg:pt-20 md:pt-10 pt-8 pb-16">
                <div class="row">
                    <div class="relative px-4 w-full text-white text-center lg:text-left">
                        <img class="absolute -top-4 hidden lg:block md:left-96 lg:left-36"
                            src="{{asset('frontend/image/leaft-1.png')}}" alt="">
                        <h2 class="text-xl md:text-2xl uppercase">business</h2>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-4 lg:leading-snug md:leading-tight">Inove na forma comao recebe os pagamentos
                            e alcance a nova geração de clientes</h1>
                        <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-200">Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem<br> quia voluptas sit aspernatur aut odit aut fugit.
                        </p>
                        <div class="flex lg:flex-row flex-col py-12 font-extrabold text-md md:text-xl text-center">
                            <a class="w-full sm:w-1/3  mx-auto lg:mx-0 bg-primary-color whitespace-nowrap font-black border-primary-color border-4 hover:bg-transparent hover:text-primary-color duration-300 text-black py-3 md:py-4 rounded-full"
                                href="#">Baixe o whitepaper</a>
                            <a class="w-full sm:w-1/3 lg:ml-6 mt-2 lg:mt-0 block mx-auto lg:mx-0 whitespace-nowrap font-black border-primary-color border-4 bg-primary-color hover:bg-transparent hover:text-primary-color text-black py-3 md:py-4 rounded-full duration-300"
                                href="#">Torne-se parceiro ikCoin</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <!-- ========================= BANNER END =========================== -->
    <main>
        <!--======================== Benefícios start ================================== -->
    <div class="py-8 md:py-12 lg:py-20 relative z-10">
        <img class="absolute left-28 -top-4 lg:block hidden" src="{{asset('frontend/image/leaft-1.png')}}" alt="">
        <div class="max-width mx-auto px-4">
            <div class="row">
                <div class="w-1/2 md:w-1/5 px-4 flex items-center justify-center">
                    <img src="{{asset('frontend/image/visa.png')}}" alt="">
                </div>
                <div class="w-1/2 md:w-1/5 px-4 flex items-center justify-center">
                    <img src="{{asset('frontend/image/card.png')}}" alt="">
                </div>
                <div class="w-1/2 md:w-1/5 px-4 mt-10 md:mt-0 flex items-center justify-center">
                    <img src="{{asset('frontend/image/fox.png')}}" alt="">
                </div>
                <div class="w-1/2 md:w-1/5 px-4 mt-10 md:mt-0 flex items-center justify-center">
                    <img src="{{asset('frontend/image/visa.png')}}" alt="">
                </div>
                <div class="w-full md:w-1/5 px-4 mt-10 md:mt-0 flex items-center justify-center">
                    <img src="{{asset('frontend/image/card.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--======================== Benefícios END ================================== -->

    <!-- ==================================CARD START =====================================  -->
    <div class="py-8 md:py-12 lg:py-20 relative z-10">
            <div class="max-width px-4 mx-auto">
                <div class="row">
                    <div class="w-full px-4 lg:w-1/2 text-center md:text-left mb-11">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-4 lg:leading-snug md:leading-tight">Benefícios <span class="font-normal">para o seu negócio</span></h1>
                        <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>
                <div class="row text-center md:text-left">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-6">
                        
                            <div class="w-24 h-24 flex justify-center items-center mx-auto md:mx-0">
                                <img class="" src="{{asset('frontend/image/icon-1.png')}}" alt="">
                            </div>
                            <h2 class="text-2xl py-10 font-extrabold">Alcançar mais clientes</h2>
                            <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo.
                            </p>
                        
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-6">
                        
                            <div class="w-24 h-24 flex justify-center items-center mx-auto md:mx-0">
                                <img class="" src="{{asset('frontend/image/icon-2.png')}}" alt="">
                            </div>
                            <h2 class="text-2xl py-10 font-extrabold">Modernizar o seu negócio</h2>
                            <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo.
                            </p>
                        
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-6">
                        
                            <div class="w-24 h-24 flex justify-center items-center mx-auto md:mx-0">
                                <img class="" src="{{asset('frontend/image/icon-3.png')}}" alt="">
                            </div>
                            <h2 class="text-2xl py-10 font-extrabold">Aumente a sua faturação</h2>
                            <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo.
                            </p>
                        
                    </div>
                </div>
            </div>
    </div>
     <!-- ==================================CARD END =====================================  -->

     <!--======================================= NEGOCIO START ==================================== -->
    <div class=" md:relative md:py-24  ">
        <div class="max-width mx-auto ">
            <div class="w-full flex flex-wrap">
                <div class="md:w-5/12 w-full md:h-full md:absolute md:top-0 md:left-0">
                    <img src="{{asset('frontend/image/casto-img.jpg')}}" alt="" class="w-full md:h-full object-cover object-top">
                    <span class="absolute bottom-0 -right-6 w-6 h-28 bg-primary-color"></span>
                </div>
                <div class="px-12 w-full ml-auto md:w-7/12 text-center md:text-left lg:py-36 py-16 ">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl pb-6 lg:leading-tight ">Aceite ik Coin no seu
                        negócio, <span class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-8">sem qualquer
                            custo adicional</span></h1>
                    <p class="text-sm lg:text-lg font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
                
            </div>
        </div>
    </div>
    <!--======================================= NEGOCIO END ==================================== -->

    <!-- ================================2ND CARD START ===================================== -->
    <div class="relative" style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; ">
                    <div class="sm:absolute sm:block hidden top-44">
                        <img src="{{asset('frontend/image/home/leaft-6.png')}}" alt="">
                    </div>
                    <div class="sm:absolute sm:block hidden bottom-80 right-20">
                        <img src="{{asset('frontend/image/home/leaft-2.png')}}" alt="">
                    </div>
                    <div class="max-width mx-auto px-4 lg:py-40 md:py-28 py-16 md:space-y-20 space-y-10 ">
                        <div class="row md:justify-center">
                            <div class="w-full  sm:w-3/4 px-4 md:text-center text-left lg:space-y-6 md:space-y-4 space-y-2">
                                <h1 class="text-primary-color lg:text-5xl md:text-4xl text-2xl font-bold ">Empresas que já aceitam iK Coin</h1>
                                <p class="text-gray-300 lg:text-xl md:text-base sm:text-lg text-base">Falar do preço baixo da
                                    moeda durante esta fase do lançamento.</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="w-full px-4 my-4 md:w-1/3">
                                <div class="card-color  text-center space-y-9 rounded-2xl group py-14 relative px-8">
                                    <h1 class="w-full text-primary-color text-2xl font-bold leading-9">Empresa 1</h1>
                                    <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Lorem ipsum dolerium versus consectetur insta greauin lem.</p>
                                    <span
                                        class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                    </span>
                                </div>
                            </div>
                            <div class="w-full px-4 my-4 md:w-1/3">
                                <div class="card-color  text-center space-y-9 rounded-2xl group  py-14 relative px-8">
                                    <h1 class="w-full text-primary-color text-2xl font-bold leading-9">Empresa 2</h1>
                                    <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Lorem ipsum dolerium versus consectetur insta greauin lem.</p>
                                    <span
                                        class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                    </span>
                                </div>
                            </div>
                            <div class="w-full px-4 my-4 md:w-1/3">
                                <div class="card-color  text-center space-y-9 rounded-2xl group  py-14 relative px-8">
                                    <h1 class="w-full text-primary-color text-2xl font-bold leading-9">Empresa 3</h1>
                                    <p class="w-full text-gray-300 text-lg leading-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Lorem ipsum dolerium versus consectetur insta greauin lem.</p>
                                    <span
                                        class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-11/12 h-1.5 bg-primary-color group-hover:bg-white rounded-b-2xl z-0">
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    </div>
    <!-- ================================2ND CARD END ===================================== -->

    <!--=================================== PLANO START ======================================= -->
  
    <div class=" md:relative md:py-24  ">
        <div class="max-width mx-auto ">
            <div class="w-full flex flex-wrap">
                <div class="md:w-5/12 w-full md:h-full md:absolute md:top-0 md:left-0">
                    <img src="{{asset('frontend/image/casto-img.jpg')}}" alt="" class="w-full md:h-full object-cover object-top">
                    <span class="absolute top-0 -right-6 w-6 h-28 bg-primary-color"></span>
                </div>
                <div class="px-12 w-full ml-auto md:w-7/12 text-center md:text-left lg:py-36 py-16 ">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl py-6 md:py-4 lg:leading-snug md:leading-tight">Plano de crescimento da iK Coin</h1>
                        <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia s qui ratione s modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
            </div>
                
            </div>
        </div>
    </div>
     
     <!--=================================== PLANO END ======================================= -->

    <div class="py-14 lg:py-24 xl:py-32 relative overflow-hidden" style="background-image: url(frontend/image/banner-bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; ">
        <div class="absolute left-1/2 lg:block hidden">
            <img class="" src="{{asset('frontend/image/coin-blur-1.png')}}" alt="">
        </div>
        <div class="">
            <img class="absolute right-0 top-36 lg:block hidden" src="{{asset('frontend/image/leaft-8.png')}}" alt="">
        </div>
        <div class="">
            <img class="absolute left-40 lg:block hidden" src="{{asset('frontend/image/leaft-9.png')}}" alt="" style="top:480px;">
        </div>
        <div class="relative max-width px-4 mx-auto">
        <div class="">
            <img class="absolute -right-20 top-1/2 lg:block hidden" src="{{asset('frontend/image/coin-blur-2')}}.png" alt="">
        </div>
        
            <div class="row">
                <div class="w-full px-4 md:w-1/2 mb-6 md:mb-12 text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold py-6 md:py-4 lg:leading-snug md:leading-tight text-primary-color mb-5 md:mb-10">Torne o seu negócio
                                parceiro da iK Coin</h1>
                    <p class="text-sm md:text-base font-base leading-relaxed lg:leading-loose text-gray-300">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="name">Name</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your first name">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="lastname">Lastname</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your last name">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="email">Email</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your email">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="phone">Phone</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your phone number">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="company">Company</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your company name">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="city">City</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your city name">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="adress">Address</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your address">
                    </div>
                    <div class="relative w-full md:w-1/2 mt-8 px-4">
                        <label class="absolute -top-4 bg-deepblack px-4 left-7 text-primary-color" for="extra">Extra</label>
                        <input class="block text-gray-400 w-full outline-none  px-5 py-6 rounded-lg bg-transparent border-2 border-gray-400" type="text" placeholder="Type your address">
                    </div>

                    <!-- ===========================checkbox =========================== -->
                    <div class="w-full px-4 py-12 md:flex block justify-between items-center space-y-8 md:space-y-0">
                        <div class="flex items-center  space-x-2">
                            <div class="">
                                <div class="flex items-center mr-4 mb-2">
                                  <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" class="opacity-0 absolute h-8 w-8" />
                                  <div class="bg-deepblack border-2 rounded-sm  w-8 h-8 flex flex-shrink-0 justify-center items-center mr-2">
                                    <svg class="fill-current hidden w-5 h-5 pointer-events-none" version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                      <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(-9 -11)" fill="#000" fill-rule="nonzero">
                                          <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                                        </g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                            </div>
                            <div class="text-gray-400">
                                <h1>I accept Terms and Conditions</h1>
                            </div>
                        </div>
                        <div class="">
                            <a class=" w-full font-bold border-primary-color border-4 hover:bg-primary-color bg-transparent text-primary-color hover:text-black py-2 sm:py-3 md:py-4 px-12 rounded-full duration-300 flex justify-center items-center text-center lg:text-base md:text-sm text-xs"
                            href="#">Enviar</a>
                        </div>
                    </div>


                </div>

            </form>
        </div>
    </div>
    </main>
@endsection
