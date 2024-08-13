<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
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
    <div class="border-b border-[#ebebeb]">
        <div class="max-w-[1200px] mx-auto">
            <div class="border-none border-medium p-custom bg-white">
                <div class="flex flex-wrap mx-[-5px]">
                    <div class="px-[5px] flex-0-0-100 max-w-full">
                        <div class="mt-[10px] relative text-center">
                            <h4 class="text-[#a80e10] font-semibold text-sm">KURUMSAL EKİP PROFESYONEL ÇÖZÜM</h4>
                            <p class="text-[#333] m-o0 text-[13px] leading-[18px]">Geniş Ürün Yelpazesi, Güçlü Pazarlama
                                ve Dağıtım Ağı İle Türkiye Çapında Güvenilir Yapı Malzemeleri Tedariğinde Lider</p>
                            <div class="relative z-[99]">
                                <div
                                    class="absolute left-1/2 transform -translate-x-1/2 border-t-[70px] border-l-[120px] border-r-[120px] border-l-transparent border-r-transparent border-t-[#fff] border-solid">
                                </div>
                                <img src="img/logo3.png" alt=""
                                    class="absolute left-1/2 mt-5 transform -translate-x-1/2 top-[75%]">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="py-[21px] px-0  bg-[#dfe7ec] box-border">
        <div class="max-w-[1200px] mx-auto ">
            <div class="box-border">
                <ul class="m-0 p-0">
                    <li class="text-[#2f4264] inline-block text-sm mr-7 relative box-border">
                        <a href="#" class="text-[#242424]">Ana Sayfa</a>
                    </li>
                    <li class="text-[#2f4264] inline-block text-sm mr-7 relative box-border">
                        <a href="#" class="text-[#242424]">/</a>
                    </li>
                    <li class="text-[#2f4264] inline-block text-sm mr-7 relative box-border">
                        <a href="#" class="text-[#242424]">E-Mağaza</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="pb-10 pt-10 mb-10  box-border bg-[#f2f2f2] ">
        <div class="max-w-[1200px] mx-auto flex-row-reverse	 flex flex-wrap ">

            <div class="flex-0-0-75 max-w-[75%] flex-col relative">
                <div class="pb-[30px] box-border">
                    <div class="mt-[-30px] flex-col justify-between mb-[30px] py-px px-5">

                        <form action="" class="">
                            <div class=" ml-5 justify-between mt-5 flex ">

                                <div class="box-border">

                                    <h2 class="text-2xl ">Ürünlerimiz</h2>
                                </div>
                                <div class="flex">
                                    <label
                                        class="text-[#242424] text-[15px] font-normal my-0 mr-[11px] ml-0 cursor-pointer">Markalar
                                        : </label>
                                    <select name="marka" id=""
                                        class="bg-white border-px rounded-[3px] shadow-none text-[#898888] cursor-pointer text-sm h-[30px] pl-2.5 w-[180px]">
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">HEPSİ
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">3V
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            AKDENİZ
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            AKFİKS
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">ANAS
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">ASEL
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">ATLAS
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            BAUTECH
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">BOSCH
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            B-TECH
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            CANDAN
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            ÇELİKSON
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            DAYSON
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">DEKOR
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">DOĞUŞ
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            EKONET
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">ELTA
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">FAR
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">FERM
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            FIVESTAR
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">KALE
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            GÜVENİŞ
                                        </option>
                                        <option value="HEPSİ"
                                            class="bg-white pl-2.5 text-sm border-0 border-solid border-[#626262]">
                                            HENKEL
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <h2>ürün bulunamadı</h2>
                </div>

                <div class="flex-col justify-between pt-[15px] pl-6 box-border absolute bottom-0 w-full">
                    <div class="flex justify-between w-full">
                        <ul class="m-0 p-0 flex-1">
                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="{{ url('/e-magaza') }}"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">1</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="{{ url('/page2') }}"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">2</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="{{ url('/page3') }}"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">3</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">4</a>
                            </li>
                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">5</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">6</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">7</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">8</a>
                            </li>
                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">9</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">10</a>
                            </li>
                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] block text-center w-8 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">1</a>
                            </li>

                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] flex text-center w-12 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">İleri
                                    <img src="img/chevron-right.svg" class=""></a>
                            </li>
                            <li class="inline-block mt-2 mx-px mb-0">
                                <a href="#"
                                    class="text-[#454545] bg-[#f1f1f1] rounded-[3px] flex text-center w-12 h-8 items-center justify-center border-none border-[#d4d4d4] hover:bg-[#44526c] hover:text-white">Son
                                    <img src="img/chevron-right.svg" class=""></a>
                            </li>
                        </ul>
                    </div>
                    <span class="mt-2 mx-px mb-0">Toplam 160 Sayfa</span>
                </div>

            </div>



            <div class="flex-0-0-25 max-w-[25%]">
                <div class="border border-custom-border bg-custom-gradient w-[280px]">
                    <div class="box-border p-2">
                        <h4 class="text-[#4766a8] m-0 mb-2 font-medium text-[18px]">Ürün Kategorisi</h4>
                        <div class="box-border ">
                            <div class="box-border">
                                <div class="text-left mt-5 box-border">
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg" alt="chevron-right"> Hazır Standlar
                                        </i>
                                    </a>


                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Bahçe Ürünü</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            İnşaat</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Yapı Kimyasalları</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Hırdavat Nalburiye</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            El Aletleri Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Boya ve Dekorasyon Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Mobilya ve Kilit Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Bant Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Bahçe Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Kesici Delici Aşındırıclar</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Elektrik Malzemeleri Grubu</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Tesisat Malzemeleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Zımpara Çeşitleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Kamp Ürünleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Stand Çeşitleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Elektrik Malzemeleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Yapıştırıcı ve İzolasyon</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            Boya ve Dekorasyon</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm">
                                            <img src="img/chevron-right.svg">
                                            İnşaat Malzemeleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Hırdavat ve Nalburiye</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            El Aletleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Elektrikli El Aletleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Elektrik ve Aydınlatma</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Mobilya ve Kilit Ürünleri</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Kaynak Makinaları ve Ekipmanları</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Kesici ve Aşındırıclar</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Delici Ürünler</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Dübel ve Bağlantı Elemanları</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            İş Güvenliği</i>
                                    </a>
                                    <a href="#"
                                        class="link w-full text-[#242424] inline-block text-sm font-medium py-[7px] pr-[10px] mt-[5px] pl-0 mb-[3px] border-b border-gray-300 hover:text-white hover:bg-[#44526c]">
                                        <i class="flex font-normal not-italic text-sm"><img src="img/chevron-right.svg">
                                            Bahçe Ürünleri</i>
                                    </a>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>



    <!--FOOTER-->

   
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


    <script src="{{ asset('js/animates.js') }}"></script>



</body>

</html>