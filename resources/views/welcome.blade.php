<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <title>Ender Yapı - Yapı Malzemeleri</title>
</head>

<body class="overflow-x-hidden ">

    <!--HEADER SECTION-->
    <section>
        <header
            class="2xl:pb-15 2xl:float-left xl:pb-15 xl:float-left xl:block block box-border bg-bg-header h-[258px] w-full">
            <div class="border-b border-[#3d3d3f] pb-[13px] pt-2.5 lg:mx-2 lg:p-2 ">
                <div class="max-w-[1200px] mx-auto">
                    <div class="h-[30px] flex -mx-[15px]">
                        <div class="flex-1 flex justify-end ">
                            <div class="bg-white-10 shadow-none border-0 rounded-[5px] mr-[42px] h-[35px] relative">
                                <a href="#"
                                    class="text-white flex mb-0 font-normal text-center align-middle cursor-pointer py-[6px] px-3 text-sm leading-[1.42] rounded-[4px] hover:text-white hover:border hover:border-white hover:bg-white hover:bg-opacity-30">
                                    <div class="mr-2">
                                        <img src="img/log-in.svg" alt="Login Icon">
                                    </div>
                                    BAYİ GİRİŞİ
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0 py-10 box-border lg:mx-2">
                <div class="px-[15px] mx-auto max-w-[1200px]">
                    <div class="flex flex-wrap -mx-[15px] ">
                        <div class="flex-0-0-25 max-w-[25%]">
                            <div class="mt-0 ">
                                <a href="" class="transition-all duration-300 ease-out">
                                    <img src="img/logo.png" alt="" class="align-middle border-none box-border">
                                </a>
                            </div>
                        </div>
                        <div class="flex-0-0-75 max-w-[75%]">
                            <div class="float-right flex	">
                                <div class="ml-0 inline-block float-left mt-2">
                                    <div class="inline-block  mr-[14px] ">
                                        <img src="img/headphones.svg" alt="">
                                    </div>
                                    <div class="inline-block float-leeft overflow-hidden box-border ">
                                        <p class="text-white leading-[18px]  m-0 text-sm font-normal ">Bize Ulaşın
                                            <br>Müşteri Hizmetleri: 0 212 495 31 89
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-[2px] inline-block float-left ml-[45px] box-border items-center">
                                    <form action="" class="relative">
                                        <input type="text" placeholder="Ne aramıştınız?..."
                                            class="bg-white-10 shadow-none border-0 rounded-[50px] text-sm h-[45px] py-0 pr-[18px] pl-[50px] w-[330px]">
                                        <button
                                            class="absolute bg-transparent border-0 cursor-pointer py-auto px-5 right-0 top-1/2 transform -translate-y-1/2 transition-all duration-300 ease delay-0">
                                            <img src="img/search.svg" alt="search">
                                        </button>
                                    </form>
                                </div>


                                <div class="relative inline-block float-left ml-[45px]">
                                    <div class="box-border block">
                                        <a href="outline-0 " class="transition-all duration-300 ease-out">
                                            <button
                                                class="flex  pt-2.5 pb-[7px] px-3 bg-white-10 shadow-none border-0 rounded-[50px] relative">
                                                <img src="img/shopping-cart.svg" alt="" class="pr-2.5">
                                                <span
                                                    class="text-white text-sm font-medium relative p-[5px] top-[-6px] transition-all duration-300 ease-out">0,00
                                                    TL</span>
                                                <span
                                                    class="bg-[#fd8527] absolute  left-[-20px] top-[11px] rounded-full inline-block h-[26px] w-[26px]"></span>
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-headershape bg-no-repeat text-white w-full relative">
                <div class="max-w-[1200px] bg-top mx-auto">
                    <div class="justify-between box-border">
                        <nav class="inline-block">
                            <ul class="text-left flex justify-between space-x-[49px]">
                            <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="#"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0 delay-75">
                                        ANA SAYFA
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100 delay-100">
                                        <a href="#" class="relative text-white border-b-2 border-red-500">
                                            ANA SAYFA
                                        </a>
                                    </span>
                                </li>
                                <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="{{ url('/kurumsal') }}"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0">
                                        KURUMSAL
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="{{ url('/kurumsal') }}"
                                            class="relative text-white border-b-2 border-red-500">

                                            KURUMSAL
                                        </a>
                                    </span>
                                </li>
                                <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="{{ url('/e-magaza') }}"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0">
                                        E-MAĞAZA
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="{{ url('/e-magaza') }}"
                                            class="relative text-white border-b-2 border-red-500">

                                            E-MAĞAZA
                                        </a>
                                    </span>
                                </li>
                                <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="{{ url('/kampanya') }}"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0">
                                        KAMPANYA
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="{{ url('/kampanya') }}"
                                            class="relative text-white border-b-2 border-red-500">

                                            KAMPANYA
                                        </a>
                                    </span>
                                </li>
                                <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="{{ url('/e-katalog') }}"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0">
                                        E-KATALOG
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="{{ url('/e-katalog') }}"
                                            class="relative text-white border-b-2 border-red-500">

                                            E-KATALOG
                                        </a>
                                    </span>
                                </li>
                                <li class="inline-block relative whitespace-nowrap text-white group">
                                    <a href="{{ url('/contact') }}"
                                        class="text-white inline-block font-normal leading-[55px] uppercase transition-all duration-500 ease-in-out transform group-hover:translate-y-[55px] group-hover:opacity-0">
                                        İLETİŞİM
                                    </a>
                                    <span
                                        class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity duration-500 ease-in-out transform translate-y-[20px] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="{{ url('/contact') }}"
                                            class="relative text-white border-b-2 border-red-500">

                                            İLETİŞİM
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
            </div>

        </header>
    </section>

    <section class="border-b border-[#ebebeb]">
        <div class="max-w-[1200px] mx-auto">
            <div class="border-none border-medium p-custom bg-white">
                <div class="flex flex-wrap mx-[-5px]">
                    <div class="px-[5px] flex-0-0-100 max-w-full">
                        <div class="mt-[10px] relative text-center">
                            <h4 class="text-[#a80e10] font-semibold text-sm">KURUMSAL EKİP PROFESYONEL ÇÖZÜM</h4>
                            <p class="text-[#333] m-0 text-[13px] leading-[18px]">Geniş Ürün Yelpazesi, Güçlü Pazarlama
                                ve Dağıtım Ağı İle Türkiye Çapında Güvenilir Yapı Malzemeleri Tedariğinde Lider</p>
                            <div class="relative z-[99]">
                                <div
                                    class="absolute left-1/2 transform top-0 -translate-x-1/2 border-t-[70px] border-l-[120px] border-r-[120px] border-l-transparent border-r-transparent border-t-[#fff] border-solid">
                                </div>
                                <img src="img/logo3.png" alt=""
                                    class="absolute left-1/2 transform -translate-x-1/2 top-[60%] translate-y-4">
                            </div>




                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--SLIDER SECTION-->


        <div class="w-full relative">
            <div class="swiper default-carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rounded-2xl h-[515px] flex justify-center items-center overflow-hidden">
                            <img src="img/slider-28.jpg" alt="Slide 1" class="object-cover w-full h-full">
                            <div class="top-0 absolute w-full h-full z-[10] bg-pattern"></div>


                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-2xl h-[515px] flex justify-center items-center overflow-hidden">
                            <img src="img/slider-29.jpg" alt="Slide 2" class="object-cover w-full h-full">
                            <div class="top-0 absolute w-full h-full z-[10] bg-pattern"></div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-2xl h-[515px] flex justify-center items-center overflow-hidden">
                            <img src="img/slider-27.jpg" alt="Slide 3" class="object-cover w-full h-full">
                            <div class="top-0 absolute w-full h-full z-[10] bg-pattern"></div>

                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                spaceBetween: 30,
                grabCursor: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        </script>




        </div>

        <div class="relative z-[99]">
            <div
                class="absolute left-1/2 transform bottom-0 -translate-x-1/2 border-b-[70px] border-l-[120px] border-r-[120px] border-l-transparent border-r-transparent border-b-[#fff] border-solid">
            </div>
            <img src="img/logo3.png" alt="" class="absolute left-1/2 mt-0 mb-5 transform -translate-x-1/2 bottom-[84%]">
        </div>


        <div class=" mx-auto relative">
            <div class="max-w-[1200px] mx-auto relative ">
                <div class="border-none border-medium p-custom bg-white">
                    <div class="border-none bg-white">
                        <div class="pt-2 pr-2.5 pb-2 pl-2.5 mt-2">
                            <div class="mx-[-5px] flex flex-wrap mt-2.5">
                                <div class="px-[5px] flex-none max-w-1/3 basis-1/3">
                                    <div class="relative text-center box-border">
                                        <a href="#" class="text-[#454545] transition-all-custom w-custom">
                                            <img src="img/kalite.png" alt=""
                                                class="align-middle border-none filter grayscale hover:grayscale-0 transition duration-300">
                                        </a>
                                    </div>
                                </div>
                                <div class="px-[5px] flex-none max-w-1/3 basis-1/3">
                                    <div class="relative text-center box-border">
                                        <a href="#" class="text-[#454545] transition-all-custom w-custom">
                                            <img src="img/urunyelpazesi.png" alt=""
                                                class="align-middle border-none filter grayscale hover:grayscale-0 transition duration-300">
                                        </a>
                                    </div>
                                </div>
                                <div class="px-[5px] flex-none max-w-1/3 basis-1/3">
                                    <div class="relative text-center box-border">
                                        <a href="#" class="text-[#454545] transition-all-custom w-custom">
                                            <img src="img/Splash-Whatsapp.png" alt=""
                                                class="align-middle border-none filter grayscale hover:grayscale-0 transition duration-300">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-border relative">
                <div id="prevButton"
                    class="bottom-0 right-[38px] bg-[#efefef] rounded-[3px] text-[16px] leading-[35px] opacity-1 absolute text-center h-[35px] w-[35px] hover:bg-[#44526c] flex items-center justify-center group">
                    <i class="box-border">
                        <img src="img/chevron-left.svg" class="transition-colors duration-300 group-hover:fill-white">
                    </i>
                </div>
                <div id="nextButton"
                    class="bottom-0 right-0 bg-[#efefef] rounded-[3px] text-[16px] leading-[35px] opacity-1 absolute text-center h-[35px] w-[35px] hover:bg-[#44526c] flex items-center justify-center group">
                    <i class="box-border">
                        <img src="img/chevron-right2.svg" class="transition-colors duration-300 group-hover:fill-white">
                    </i>
                </div>
            </div>
        </div>



    </section>


    <div class="bg-[#ededed] block w-full z-[1] relative">

        <div class="bg-[#ededed] relative overflow-hidden box-border">
            <div id="carousel" class="swiper-container multiple-slide-carousel">

                <div class="swiper-wrapper ">

                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-[698.667px] mr-4 float-left min-h-[1px]">
                            <div class="mr-0 min-h-[1px] float-left">
                                <div class="bg-white mt-[15px] box-border relative z-[10]">
                                    <div class="rounded-[3px] flex mb-[50px]">
                                        <div class="p-2.5 relative flex-0-0-180 box-border">
                                            <div class="relative overflow-hidden box-border">
                                                <a href="{{ url('/detay') }}"
                                                    class="transition-all duration-300 ease-out delay-0">
                                                    <img src="img/a.jpg"
                                                        class="block w-full transition-all duration-1500 ease-in-out delay-0 transform duration-500 hover:scale-110">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-5 pt-[13px] pr-[13px] pb-[5px] pl-[10px] relative">
                                            <span
                                                class="text-[13px] bg-[#f9f9f9] rounded-[3px] text-[#555] leading-[1px] relative top-[-10px] z-[99] pt-1.5 pr-3.5 pb-1.25 pl-3.5">SK:
                                                079 22250</span>
                                            <h4 class="text-sm leading-[18px] mt-[2px] mb-[13px] mx-0 font-semibold">
                                                <a href="#" class="text-[#242424]">
                                                    <h2 class="text-sm not-italic font-normal text-[#242424] mt-0">İthal
                                                        Ağaç
                                                        Delme Matkap Ucu 22x250</h2>
                                                </a>
                                            </h4>
                                            <div class="block transition-all duration-300 ease-out delay-0">
                                                <div class="relative">
                                                    <a href="#"
                                                        class="bg-[#ffb463] text-white py-2 px-4 rounded-[3px] inline-block">
                                                        <span>Detaylar</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-sm">
                                                <span class="p-[6px] text-sm rounded-[3px] leading-[2px]">204,82 TL +20
                                                    Kdv</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--JAVASCRIPT-->
                    <script>
                        var swiper = new Swiper(".multiple-slide-carousel", {
                            loop: true,
                            slidesPerView: 3,
                            spaceBetween: 20,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            breakpoints: {
                                640: {
                                    slidesPerView: 1,
                                    spaceBetween: 20,
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 20,
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 20,
                                },
                            },
                        });

                    </script>

                </div>
            </div>
        </div>

    </div>


    <!--FOOTER SECTION-->

    <footer
        class="box-border relative z-20  bg-footerbg pt-[60px] bg-cover bg-center w-full h-auto border-t-[10px] border-t-white ">
        <div class="max-w-[1200px] w-full mx-auto">
            <div class="px-[15px] flex flex-wrap -mx-[15px] lg:p-2 lg:mx-2">
                <div class="mb-[30px] flex-0-0-[41.66%] max-w-[41.66%] ">
                    <div class="mb-10 box-border">
                        <div class=" border-b-[1px] border-b-[#333] pb-[15px] mb-[30px] box-border">
                            <h4 class="text-white font-medium text-xl m-0">Ürün Kategorisi</h4>
                        </div>
                    </div>
                    <div class="box-border">
                        <ul class="text-sm float-left pb-[15px] text-[#999]">
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border gap-5">
                                <a href="#" class="text-[#999] hover:text-white">Hazır Standlar</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Bahçe Ürünü</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">İnşaat</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Yapı Kimyasalları</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Hırdavat Nalburiye</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">El Aletleri Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Boya Ve Dekorasyon Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Mobilya Ve Kilit Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Bant Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Bahçe Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Kesici Delici Aşındırıcılar</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Elektrik Malzemeleri Grubu</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Tesisat Malzemeleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Zımpara Çeşitleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Kamp Ürünleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Stand Çeşitleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Elektrik Malzemeleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Yapıştırıcı Ve İzolasyon</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Boya Ve Dekorasyon</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">İnşaat Malzemeleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Hırdavat Ve Nalburiye</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">El Aletleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Elektrikli El Aletleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Elektrik Ve Aydınlatma</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Mobilya Ve Kilit Ürünleri</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Kaynak Makinaları Ve Ekipmanları</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Kesici Ve Aşındırıcılar</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Delici Ürünler</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Dübel Ve Bağlantı Elemanları</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">İş Güvenliği</a>
                            </li>
                            <li class="list-none float-left flex pb-2.5 pl-[15px] pr-5 box-border">
                                <a href="#" class="text-[#999] hover:text-white">Bahçe Ürünleri</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="mb-[30px]  px-[15px] flex-0-0-16 max-w-[16.66%]">
                    <div class="mb-10 box-border">
                        <div class=" border-b-[1px] border-b-[#333] pb-[15px] mb-[30px] box-border ">
                            <h4 class="text-white font-medium text-xl m-0 ">Menü</h4>
                        </div>
                        <div class="box-border">
                            <ul class="text-sm flex-col float-left pb-[15px]">
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-80 block hover:text-white">Ana Sayfa</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Kurumsal</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">E-Mağaza</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">E-Katalog</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">İletişim</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="mb-[30px]  px-[15px] flex-0-0-16 max-w-[16.66%]">
                    <div class="mb-10 box-border">
                        <div class=" border-b-[1px] border-b-[#333] pb-[15px] mb-[30px] box-border ">
                            <h4 class="text-white font-medium text-xl m-0 ">Bilgilendirme</h4>
                        </div>
                        <div class="box-border">
                            <ul class="text-sm flex-col float-left pb-[15px]">
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Site Kullanım
                                        Şartları</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Güvenlik</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Gizlilik
                                        Bildirimi</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="mb-[30px]  px-[15px] flex-0-0-25 max-w-[25%]">
                    <div class="mb-10 box-border">
                        <div class=" border-b-[1px] border-b-[#333] pb-[15px] mb-[30px] box-border ">
                            <h4 class="text-white font-medium text-xl m-0 ">Bize Ulaşın</h4>
                        </div>
                        <div class="box-border">
                            <ul class="text-sm flex-col float-left pb-[15px]">
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">
                                        Adres: Halkalı Merkez Mh. Fatih Cd. Fırat Sk. No. : 7 <br>
                                        Küçükçekmece / İstanbul
                                    </a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Telefon: 0 212 495
                                        31 89</a>
                                </li>
                                <li class="pb-2.5 pl-[15px] pr-5">
                                    <a href="#" class="text-[#999] opacity-60 block hover:text-white">Email:
                                        destek@enderyapi.com.tr</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-[22px] mr-10">
                            <img src="img/footer.png" alt="" class="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="px-[15px]  flex flex-wrap -mx-[15px] border-t border-t-1 border-t-[#333] lg:p-2 lg:mx-2">
                <div class="pb-[30px] pt-[25px] mt-2.5 box-border flex justify-between w-full">
                    <div class="max-w-[50%] flex flex-wrap -mx-[15px] ">
                        <div class="flex float-left ">
                            <p class="mt-3 mx-0 mb-0 text-white text-sm font-normal leading-6">Copyright © <a href="#"
                                    class="text-white font-medium">Ender Yapı Malzemeleri</a>. Tüm Hakları Saklıdır.</p>
                        </div>
                    </div>
                    <div class="max-w-[50%] flex flex-wrap -mx-[15px]">
                        <div class=" flex float-right">
                            <a href="#">
                                <img src="img/footer2.png" alt="" class="">
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>




</body>

</html>