<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<style>
    #preloader {
        background-color: #F0F0F0;
    }

    .sp-buttons {
        margin-top: -4.5% !important;
    }

    @media only screen and (max-width:700px) {
        .sp-buttons {
            margin-top: -15% !important;
        }
    }
</style>

<div class="page">
    <div id="navbar" class="2xl:flex lg:flex nav:hidden 2xl:px-14 xl:px-8 lg:px-1.5 pt-3  w-full z-30 pb-2">
        <div class="z-30">
            <a href="home"><img class="2xl:w-full lg:w-[87%] md:w-[80%] m-auto" src="<?php echo get_image('NavbarMainImage2.svg'); ?>"></a>
        </div>
        <div id="menuNav" class="m-auto 2xl:text-[22px] xl:text-[21px] lg:text-[18px] font-semibold z-20">
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="about-us" id="aboutUsA" onClick="toggleDiv('aboutUs')">About Us</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="restaurant-food" id="rfA" onClick="toggleDiv('r&f')">Restaurant & Food</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="farm-page" id="farmA" onClick="toggleDiv('farm')">Farm</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="events" id="eventsA" onClick="toggleDiv('events')">Events</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="gallery" id="galleryA" onClick="toggleDiv('gallery')">Gallery</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="contact" id="contactA" onClick="toggleDiv('contact')">Contact Us</a>
            <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="work-with-us" id="wWsA" onClick="toggleDiv('wWs')">Work With Us</a>
        </div>
        <div class="flex my-auto z-30">
            <a href="book-a-table"><img class="hoverEffect 2xl:w-full lg:w-[87%] md:w-[80%] m-auto" src="<?php echo get_image('NavbarDineImage.svg'); ?>"></a>
            <a class="2xl:ml-[31px] lg:ml-2" href=""><img class="hoverEffect 2xl:w-full lg:w-[87%] md:w-[80%] m-auto" src="<?php echo get_image('NavbarStayImage.svg'); ?>"></a>
        </div>
        <div class="my-auto 2xl:ml-2  -ml-1 z-30 flex flex-col flex-wrap">
            <div class="flex flex-row focus:outline-none text-sm text-center items-center">
                <h1 id="current-lang" class="cormorant 2xl:text-[22px] xl:text-[21px] lg:text-[18px] font-[600] 2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] leading-[27px]">EN</h1>
                <svg id="select-lang" class="ml-2 w-4 h-4 cursor-pointer" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="dropdown-language" class="hidden z-40 w-auto ml-auto text-center rounded h-0">
                <a id="other-lang-slug" href="sq" class="mt-3 bg-white flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <h1 id="other-lang-image" class="cormorant text-[18px] font-[600] 2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] leading-[27px] -translate-x-[18px]">AL</h1>
                </a>
            </div>
        </div>

    </div>

    <div id="navbar2" class="z-20 2xl:hidden lg:hidden nav:flex mb-[30px] justify-between w-full">
        <div class="z-20 ">
            <div id="myLinks" class="hidden bg-gray94 w-full h-full fixed z-20">
                <div class="text-center">
                    <div>
                        <ul class="hoverHamNav">
                            <li class="pt-[50px] cormorant text-[20px] font-bold leading-[25px]"><a href="home" class="hover-target" id="home">Home</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="about-us" class="hover-target" id="aboutUsB">About Us</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="farm-page" class="hover-target" id="farmB">Farm</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="restaurant-food" class="hover-target" id="rfB">Restaurant & Food</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="events" class="hover-target" id="eventsB">Events</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="gallery" class="hover-target" id="galleryB">Gallery</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="contact" class="hover-target" id="contactB">Contact us </a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px]"><a href="work-with-us" class="hover-target" id="wWsB">Work With us</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px] underline underline-offset-8"><a href="book-a-table" class="hover-target" id="BookTable">Book a Table</a></li>
                            <li class="2xl:pt-[23px] sm:pt-[23px] pt-[18px] cormorant text-[20px] font-bold leading-[25px] underline underline-offset-8"><a href="#" class="hover-target">Book a Room</a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(0);" onclick="myFunction() ">
                    <img class="m-auto md:mt-[150px] sm:mt-[100px] mt-[40px]" src="<?php echo get_image('HamNavCloseIcon.svg'); ?>">
                </a>
            </div>
            <a class="z-[99999]" href="javascript:void(0);" id="navv" class="icon" onclick="myFunction()">
                <div class="HAMNAVBAR"></div>
            </a>
        </div>
        <div class="my-auto  flex flex-col flex-wrap mt-[55px] mr-[40px] z-20">
            <div class="flex flex-row focus:outline-none text-sm text-center items-center">
                <h1 id="current-lang1" class="font-[600] 2xl:text-[22px] xl:text-[21px] lg:text-[18px] leading-[27px]">EN</h1>
                <svg id="select-lang1" class="ml-2 w-4 h-4 cursor-pointer " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div id="dropdown-language1" class="hidden absolute z-40 mt-3 w-auto ml-[-1rem] text-center rounded h-0">
                <a id="other-lang-slug1" href="sq" class="z-[99999] mt-3 bg-white flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <h1 id="other-lang-image1" class="font-[600] 2xl:text-[22px] xl:text-[21px] lg:text-[18px] leading-[27px]">AL</h1>
                </a>
            </div>
        </div>
    </div>

    <div id="preloader">
        <div class="status">
            <img style="margin-top:-35px" class="m-auto rotating" id="preload-animation-b" style="z-index:10000;" src="<?php echo get_image('RotateImage.png'); ?>" />
        </div>
        <div class="status">
            <img class="m-auto" src="<?php echo get_image('TreeRotateImage.png'); ?>" />
        </div>
    </div>

</div>
<script type="text/javascript">

    $(document).ready(function() {

        setTimeout(() => {
            $('.sp-button').append('<div style="background-color: #ffff!important;width: 20px;height:4px!important;z-index:100;border: 1px solid #fff !important;margin-top:-3px;margin-left:-2px;"></div>')
        }, 1000);

        $('#preloader').delay(400).fadeOut('slow');
        $('body').css({
            'overflow': 'visible'
        });

        if (window.location.pathname === ('/')) {

            $('.HAMNAVBAR').append('<img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIcon.svg'); ?>">')

            if (!$('#navbar2').hasClass('absolute')) {
                $('#navbar2').addClass('absolute');
                $('#navbar2').removeClass('relative');
            } else {
                $('#navbar2').addClass('relative');
                $('#navbar2').removeClass('absolute');
            }

        } else {
            $('.HAMNAVBAR').append('<img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIconBlack.svg'); ?>">')
        }
    }); 
    function myFunction() {

        var x = document.getElementById("myLinks");
        var y = document.getElementById("navv");

        if (x.style.display === "block") {
            x.style.display = "none";
            y.style.display = "block";
        } else {
            x.style.display = "block";
            y.style.display = "none";
        }
    }
</script>
