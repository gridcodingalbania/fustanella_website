<script src="https://cdn.tailwindcss.com"></script>

                                
<div class="navbar">
            <!-- -------------------------------------------------
                                                DESKTOP NAVBAR
                                     ------------------------------------------------- -->
<div id="navbar" class="2xl:flex lg:flex nav:hidden 2xl:pl-24 xl:pl-8 lg:pl-1.5 2xl:pr-8 xl:pr-2.5 lg:pr-1.5 pt-7  w-full z-20 pb-4">
    <div>
        <a href="home"><img src="<?php echo get_image('NavbarMainImage.png');?>"></a>
    </div>
    <div id="menuNav" class="m-auto 2xl:text-[22px] lg:text-[19px] font-semibold">
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="farm-page" id="farmA" onClick="toggleDiv('farm')">Farm</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="RestaurantFood" id="rfA" onClick="toggleDiv('r&f')">Restaurant & Food</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="events" id="eventsA" onClick="toggleDiv('events')">Events</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="gallery" id="galleryA" onClick="toggleDiv('gallery')">Gallery</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="#" id="contactA" onClick="toggleDiv('contact')">Contact Us</a>
        <a class="2xl:ml-[40px] xl:ml-[30px] lg:ml-[16px] cormorant tracking-normal" href="#" id="wWsA" onClick="toggleDiv('wWs')">Work With Us</a>
    </div>
    <div class="flex my-auto">
        <a href=""><img class="hoverEffect"src="<?php echo get_image('NavbarDineImage.png');?>"></a>
        <a class="2xl:ml-[31px] lg:ml-2" href=""><img class="hoverEffect"src="<?php echo get_image('NavbarStayImage.png');?>"></a>
    </div> 
    <div class="my-auto 2xl:ml-10  ml-8">
        <select >
            <option lang="en" value="english" selected>💶</option>
            <option lang="al" value="albania">💶</option>
        </select>
    </div>
</div>
     <!-- -------------------------------------------------
                                                MOBILE NAVBAR
                                     ------------------------------------------------- -->
<div id="navbar2" class="overflow-hidden z-20 2xl:hidden lg:hidden nav:flex mb-[30px]"> 
  <div id="myLinks" class="hidden bg-gray94 w-full h-full fixed">
    <div class="text-center">
        <div>
            <ul class="hoverHamNav">
                <li class="pt-[50px] cormorant text-[20px] font-bold leading-[25px]"><a href="home" class="hover-target ">Home</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="farm-page" class="hover-target ">About us</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="RestaurantFood" class="hover-target ">Restaurant & Food</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="events" class="hover-target ">Events</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="gallery" class="hover-target ">Gallery</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="#" class="hover-target ">Contact us </a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px]"><a href="#" class="hover-target ">Work With us</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px] underline underline-offset-8"><a href="#" class="hover-target ">Book a Table</a></li>
                <li class="pt-[35px] cormorant text-[20px] font-bold leading-[25px] underline underline-offset-8"><a href="#" class="hover-target">Book a Room</a></li>
            </ul>
        </div>
    </div>		
        <a href="javascript:void(0);" onclick="myFunction() ">
            <img  class="m-auto md:mt-[150px] sm:mt-[100px] mt-[80px]" src="<?php echo get_image('HamNavCloseIcon.png');?>">
        </a>
  </div>
        <a href="javascript:void(0);" id="navv" class="icon" onclick="myFunction()">
        <?php 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if(str_contains($url, 'home')) { ?>
                <img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIcon.png');?>">
            <?php }
            else{ ?>
              <img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIconBlack.png');?>">
            <?php }
         ?>
            
        </a>
</div>  
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
    $( document ).ready(function() {
        setTimeout(() => { 
        $('.sp-button').append('<div style="background-color: #ffff!important;width: 20px;height:4px!important;z-index:100;border: 1px solid #fff !important;margin-top:-3px;margin-left:-2px;"></div>')
    }, 1000);
    
        if(window.location.href.includes('home') || window.location.href.includes('gallery')) {
            if(!$('#navbar').hasClass('absolute')) {
                $('#navbar').addClass('absolute');
                $('#navbar').removeClass('relative');
            }
            else {
                $('#navbar').addClass('relative');
                $('#navbar').removeClass('absolute');
            }
            if(!$('#navbar2').hasClass('absolute')) {
                $('#navbar2').addClass('absolute');
                $('#navbar2').removeClass('relative');
            }
            else {
                $('#navbar2').addClass('relative');
                $('#navbar2').removeClass('absolute');
            }
        }
    });
</script>
<style>
      .sp-buttons{
        margin-top: -4.5%!important;
    }
    @media only screen and (max-width:700px){
        .sp-buttons{
            margin-top: -15%!important;
        }
    }
</style>
<script>
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