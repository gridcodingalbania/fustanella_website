<script src="https://cdn.tailwindcss.com"></script>

                                
<div class="navbar">
            <!-- -------------------------------------------------
                                                DESKTOP NAVBAR
                                     ------------------------------------------------- -->
<div class="2xl:flex lg:flex nav:hidden 2xl:pl-28 xl:pl-8 lg:pl-1.5 2xl:pr-14 xl:pr-2.5 lg:pr-1.5 pt-9 absolute w-full">
    <div>
        <img src="<?php echo get_image('NavbarMainImage.png');?>">
    </div>
    <div class="m-auto 2xl:text-[22px] lg:text-[19px] font-semibold">
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="farmA" onClick="toggleDiv('farm')">Farm</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="r&fA" onClick="toggleDiv('r&f')">Restaurant & Food</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="eventsA" onClick="toggleDiv('events')">Events</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="galleryA" onClick="toggleDiv('gallery')">Gallery</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="contactA" onClick="toggleDiv('contact')">Contact us</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant" href="#" id="wWsA" onClick="toggleDiv('wWs')">Work With us</a>
    </div>
    <div class="flex my-auto">
        <a href=""><img src="<?php echo get_image('NavbarDineImage.png');?>"></a>
        <a class="2xl:ml-8 lg:ml-2" href=""><img src="<?php echo get_image('NavbarStayImage.png');?>"></a>
    </div> 
    <div class="my-auto 2xl:ml-14 xl:ml-8">
        <select class="  ">
            <option lang="en" value="english" selected>💶</option>
            <option lang="al" value="albania">💶</option>
        </select>
    </div>
</div>
     <!-- -------------------------------------------------
                                                MOBILE NAVBAR
                                     ------------------------------------------------- -->
<div class="2xl:hidden lg:hidden nav:flex   justify-between ">
        <header class="cd-header">
            <div class="header-wrapper"> 
                <div class="nav-but-wrap">
                    <div class="menu-icon hover-target">
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>					
                </div>					
            </div>				
        </header>
        <div class="nav">
            <div class="nav__content">
                <ul class="nav__list">
                    <li class="nav__list-item active-nav"><a href="#" class="hover-target">Home</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">About us</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">Restaurant & Food</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">Events</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">Gallery</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">Contact us </a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">Work With us</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target underline">Book a Table</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target underline">Book a Room</a></li>
                </ul>
            </div>
        </div>		

     <!-- <div>
        <div id="myNav" class="h-full w-full fixed top-0 left-0" style="display:none;  background-color:white;">
         <div class="relative w-full h-full text-black">
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Home</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">About Us</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Restaurant & Food</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Events</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Gallery</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Contact us</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Work With us</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Book a Table</a>
            <a class="ml-10 mt-2 cormorant text-[30px] block duration-[3]" href="#">Book a Room</a>
    </div>
        <a href="javascript:void(0)" class="bottom-0 fixed text-center w-full text-[60px]" onclick="closeNav()">&times;</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="<?php echo get_image('HamNavIcon.png');?>"></span>
     </div> -->
     <div class="my-auto pr-[80px] pt-[80px]">
        <select class="">
            <option lang="en" value="english" selected>💶</option>
            <option lang="al" value="albania">💶</option>
        </select>
     </div>
</div>
</div>
<div class="pages" id="farm" style="display:none; "></div>
<div class="pages" id="r&f" style="display:none;"> </div>
<div class="pages" id="events" style="display:none;"></div>
<div class="pages" id="gallery" style="display:none;"></div>
<div class="pages" id="contact" style="display:none;"></div>
<div class="pages" id="wWs" style="display:none;"></div>
<script>
  function openNav() {
    document.getElementById("myNav").style.display = "block";
  }
  function closeNav() {
    document.getElementById("myNav").style.display = "none";
  }
  function toggleDiv(target){
        hideAllPages();
        document.getElementById(target).style.display = 'block';
        document.getElementById(target + 'A').style.color = 'green';
        document.getElementById(target + 'A').style.borderBottom = '1px solid green';
        return false;
    }
    function hideAllPages(){
        var pages = document.getElementsByClassName("pages");
        console.log(pages);
        for(var i = 0; i < pages.length; i++){
            pages[i].style.display = 'none';
            document.getElementById(pages[i].id + 'A').style.color = 'black';
            document.getElementById(pages[i].id + 'A').style.borderBottom = 'hidden';
        }
    }
        //Navigation

        var app = function () {
            var body = undefined;
            var menu = undefined;
            var menuItems = undefined;
            var init = function init() {
                body = document.querySelector('body');
                menu = document.querySelector('.menu-icon');
                menuItems = document.querySelectorAll('.nav__list-item');
                applyListeners();
            };
            var applyListeners = function applyListeners() {
                menu.addEventListener('click', function () {
                    return toggleClass(body, 'nav-active');
                });
            };
            var toggleClass = function toggleClass(element, stringClass) {
                if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
            };
            init();
        }(); 
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
</head> 
<style>#preloader { background-color:#F0F0F0; }</style>	
<div id="preloader">
<div class="status">
        <img style="margin-top:-35px" class="m-auto rotating" id="preload-animation-b" style="z-index:10000;" src="<?php echo get_image('RotateImage.png');?>" />
</div>
<div class="status">
        <img class="m-auto" src="<?php echo get_image('TreeRotateImage.png');?>" />
</div> 
</div>  
<script type="text/javascript">
    $(window).load(function() {
        $('#preloader').delay(500).fadeOut('slow');
        $('body').delay(500).css({'overflow':'visible'});
    })
</script>  