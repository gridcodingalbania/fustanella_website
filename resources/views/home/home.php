<div style="background: #F5F5F5;">
<div>
   <div class="fotofullscreencontent">
    <span class="2xl:block nav:hidden fotofullscreen"><span><?php echo do_shortcode( '[URIS id=65]' ); ?></span></span>
    <span class="2xl:hidden xl:hidden lg:hidden nav:block"><?php echo do_shortcode( '[URIS id=102]' ); ?></span>
    </div>
    <div class="table absolute w-full top-0 left-0 z-3">
        <div class="text-center 2xl:mt-[18%] xl:mt-[18%] lg:mt-[15%] nav:mt-[60%] md:mt-[30%] mt-[30%]">
        <div class="2xl:hidden xl:hidden lg:hidden block">
            <img class="m-auto" src="<?php the_field('fustanella_main_mobile_image'); ?>" alt="">
        </div>
        <div id="MobMain" class="text-white cormorant 2xl:text-[70px] xl:text-[50px] nav:text-[60px] sm:text-[60px] text-[40px] 2xl:leading-[106px] xl:leading-[80px] md:leading-[70px] sm:leading-[70px] leading-[70px] 2xl:mt-0 nav:mt-[200px] md:mt-[100px] sm:mt-[100px] mt-[120px] 2xl:mx-0 md:mx-[20%] sm:mx-[20%] mx-[80px]">
            <span id="firstAn"></span><br>
            <span id="secondAn" class="witter 2xl:text-[128px] sm:text-[100px] text-[70px]"> </span> 
            <span id="thirdAn"></span>
        </div>
         <div id="buttonMainMob" class="2xl:flex nav:grid justify-center text-white gap-[16px] 2xl:mt-[100px] xl:mt-[80px] md:mt-[50px] mt-[80px] opacity-0 ">
           <a class="pulse" href="book-a-table"><button class="px-[65px] py-[15px]  border  border-white"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px]"><?php the_field('book_a_table_button'); ?></span></button></a>
           <a class="pulse" href=""><button class="px-[65px] py-[15px]  border  border-white 2xl:mt-0 nav:mt-[5%] mt-0"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px]"><?php the_field('book_a_room_button'); ?></span></button></a>
         </div>
    </div>
    </div>
    
   </div>
   <div class="mt-[100px] mb-[184px] mx-[50px]"  data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <?php echo do_shortcode( '[URIS id=60]' ); ?>
    </div>
    <div> 
        <div class="bgimg-2" style=" background-image: url('<?php the_field('about_us_image'); ?>');">
            
            <div>
                <div style="background: rgba(0, 104, 56, 0.81);" class="absolute 2xl:mr-[60%] xl:mr-[50%] lg:mr-[40%]  md:mr-[20%] sm:mr-[10%] mr-[5%] text-white rounded-3xl 2xl:mt-[-72px] xl:mt-[-72px] lg:mt-[-72px] md:mt-[-150px] mt-[-95px] 2xl:ml-[80px] lg:ml-[70px] md:ml-[50px] ml-[5%]">
                <p class="text-white 2xl:text-[43px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[25px] 2xl:mx-auto sm:mx-auto mx-[4%] cormorant text-center uppercase 2xl:mt-[38px] sm:mt-[35px] mt-[30px]"><?php the_field('about_us_first_line'); ?></p>
                <p class="text-white red-hat 2xl:text-[20px] sm:text-[20px] text-[16px] text-center 2xl:mt-[50px] md:mt-[50px] mt-[30px] 2xl:px-[70px] md:px-[30px] px-[25px] 2xl:leading-[32px] sm:leading-[32px] leading-[23px] 2xl:font-[400] md:font-[400] font-[300]"><?php the_field('about_us_paragraph'); ?></p>
                <a href=""><button class="flex m-auto red-hat 2xl:text-[22px] md:text-[22px] sm:text-[20px] text-[16px] 2xl:my-[60px] md:my-[50px] sm:my-[50px] my-[30px] ">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image'); ?>" alt=""></button></a>
                </div>
            </div>
        </div>  
        <div class="bgimg-3" style=" background-image: url('<?php the_field('restorant&food_image'); ?>');">
            <div>
                <div style="background: rgba(0, 104, 56, 0.81);" class="absolute 2xl:mr-[60%] xl:mr-[50%] lg:mr-[40%]  md:mr-[20%] sm:mr-[10%] mr-[5%] text-white rounded-3xl 2xl:mt-[-72px] xl:mt-[-72px] lg:mt-[-72px] md:mt-[-150px] mt-[-95px] 2xl:ml-[80px] lg:ml-[70px] md:ml-[50px] ml-[5%]">
                <p class="text-white 2xl:text-[43px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[25px] 2xl:mx-auto sm:mx-auto mx-[4%] cormorant text-center uppercase 2xl:mt-[38px] sm:mt-[35px] mt-[30px]"><?php the_field('restorant_first_line'); ?></p>
                <p class="text-white red-hat 2xl:text-[20px] sm:text-[20px] text-[16px] text-center 2xl:mt-[50px] md:mt-[50px] mt-[30px] 2xl:px-[70px] md:px-[30px] px-[25px] 2xl:leading-[32px] sm:leading-[32px] leading-[23px] 2xl:font-[400] md:font-[400] font-[300]"><?php the_field('restorant_paragraph'); ?></p>
                <a href=""><button class="flex m-auto red-hat 2xl:text-[22px] md:text-[22px] sm:text-[20px] text-[16px] 2xl:my-[60px] md:my-[50px] sm:my-[50px] my-[30px] ">See more <img class="m-auto pl-[10px] " src="<?php the_field('see_more_image'); ?>" alt=""></button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div>
        <div style="background: rgba(0, 104, 56, 0.9);" class="absolute mr-[51%] text-white rounded-3xl   mt-[-72px] ml-[170px]">
            <p class="text-white text-[45px] cormorant text-center uppercase mt-[80px]"><?php the_field('about_us_first_line'); ?></p>
            <p class="text-white red-hat text-[22px] text-center mt-[70px] px-[70px] leading-[32px]"><?php the_field('about_us_paragraph'); ?></p>
            <button class="flex m-auto red-hat text-[22px] my-[80px]">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image'); ?>" alt=""></button>
        </div>
        <div>
            <img src="<?php the_field('about_us_image'); ?>" alt="">
        </div>
        <div style="background: rgba(0, 104, 56, 0.9);" class="absolute mr-[51%] text-white rounded-3xl   mt-[-72px] ml-[170px]">
            <p class="text-white text-[45px] cormorant text-center uppercase mt-[80px]"><?php the_field('restorant_first_line'); ?></p>
            <p class="text-white red-hat text-[22px] text-center mt-[70px] px-[70px] leading-[32px]"><?php the_field('restorant_paragraph'); ?></p>
            <button class="flex m-auto red-hat text-[22px] my-[80px]">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image'); ?>" alt=""></button>
        </div>
        <div class="mt-[-2px]">
            <img src="<?php the_field('restorant&food_image'); ?>" alt="">
        </div>
    </div>  -->
    <div class="mt-[157px] text-center">
        <p style="color:#90B03E;" class="witter text-[55px] font-[400] leading-[48px] mr-[140px] 2xl:block sm:block hidden"><?php the_field('cheers_word'); ?></p>
        <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[45px] md:text-[35px] sm:text-[35px] text-[28px] 2xl:leading-[39px] sm:leading-[39px] leading-[25px] 2xl:font-[500] sm:font-[500] font-[400] uppercase"><?php the_field('our_events_word'); ?></p>
        <p class=" 2xl:w-[600px] sm:w-[500px] w-[260px] m-auto 2xl:mt-[73px] lg:mt-[73px] md:mt-[60px] sm:mt-[60px] mt-[53px] 2xl:font-[400] sm:font-[400] font-[300] red-hat 2xl:text-[22px] lg:text-[22px] md:text-[20px] sm:text-[20px] text-[16px] 2xl:leading-[33px] sm:leading-[33px] leading-[24px]"><?php the_field('cheers_paragraph'); ?></p>
        <a href=""><button class="flex m-auto red-hat 2xl:text-[22px] lg:text-[22px] md:text-[19px] sm:text-[19px] text-[16px] 2xl:my-[80px] lg:my-[80px] md:my-[70px] sm:my-[70px] my-[50px] 2xl:font-[500] sm:font-[500] font-[400] ">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image2'); ?>" alt=""></button></a>
    </div>
    <div class="2xl:grid xl:grid lg:grid grid-cols-3 md:hidden hidden   2xl:px-[210px] xl:px-[100px] lg:px-[70px] 2xl:gap-[91px] xl:gap-[70px] lg:gap-[50px] nav:block">
	   <div class="Box" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">
	   	<div class="FlipBox 2xl:mt-0 nav:mt-10">
	   		<div class="Front">
	   			<img src="<?php the_field('cheers_first_image'); ?>">
	   		</div>
	   		<div class="Back">
	   			<div>
	   			<h3>Lorem ipsum dolor sit.</h3>
	   			<p>
	   				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	   			</p>
	   			</div>
	   		</div>
	   	</div>
	   </div>
	   <div class="Box" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1200">
	   	<div class="FlipBox 2xl:mt-0 nav:mt-10">
	   		<div class="Front">
	   			<img src="<?php the_field('cheers_second_image'); ?>">
            </div>
	   		<div class="Back">
	   			<div>
	   			<h3>Lorem ipsum dolor sit.</h3>
	   			<p>
	   				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	   			</p>
	   			</div>
	   		</div>
	   	</div>
	   </div>
	   <div class="Box" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1400">
	   	<div class="FlipBox 2xl:mt-0 nav:mt-10">
	   		<div class="Front">
               <img src="<?php the_field('cheers_third_image'); ?>">
	   		</div>
	   		<div class="Back">
	   			<div>
	   			<h3>Lorem ipsum dolor sit.</h3>
	   			<p>
	   				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	   			</p>
	   			</div>
	   		</div>
	   	</div>
	   </div>
	</div>
    <div class="2xl:hidden lg:hidden block mx-[50px]">
        <?php echo do_shortcode( '[URIS id=236]' ); ?>
    </div>
    <div class="mt-[215px] 2xl:block lg:block md:block sm:hidden hidden">
        <?php echo do_shortcode( '[URIS id=88]' ); ?>
        <p class="absolute text-center mt-[-30%] left-auto right-auto w-full text-white witter 2xl:text-[96px] lg:text-[96px]  nav:text-[50px]"  data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">Some of our captured moments...</p>
    </div>
    <div class="mt-[100px] 2xl:hidden lg:hidden md:hidden sm:block block text-center">
        <p class="cormorant text-green-1000 lg:text-[45px] md:text-[35px] sm:text-[35px] text-[28px] leading-[32px] font-[400]">Gallery</p>
        <p class="mt-[5px] mb-[20px] text-black witter text-28px font-[400]"  data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">some of our captured moments...</p>
        <?php echo do_shortcode( '[URIS id=238]' ); ?>        
    </div>
    <div class="mt-[157px] text-center">
        <p style="color:#90B03E;" class="witter text-[55px] font-[400] leading-[48px] mr-[140px] 2xl:block sm:block hidden"><?php the_field('you_re_welcome_word'); ?></p>
        <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[45px] md:text-[35px] sm:text-[35px] text-[28px] 2xl:leading-[39px] sm:leading-[39px] leading-[25px] 2xl:font-[500] sm:font-[500] font-[400] uppercase"><?php the_field('direction_word'); ?></p>
        <p style="color:#90B03E;" class="witter text-[24px] font-[400] leading-[35px] ml-[140px] 2xl:hidden sm:hidden block"><?php the_field('you_re_welcome_word'); ?></p>
        <p class="m-auto 2xl:mt-[44px] sm:mt-[44px] mt-[30px] red-hat 2xl:text-[22px] sm:text-[22px] text-[18px] leading-[33px]"><?php the_field('location_paragraph'); ?></p>
    </div>
    <div class="mt-[30px]" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1400">
     <?php the_field('main_page_maps'); ?> 

    </div>
   
</div>  
 <script>
     setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-10px] 2xl:ml-[-45px] lg:ml-[-45px] md:ml-[-30px] ml-[-30px] 2xl:w-[100px] lg:w-[100px] md:w-[80px] w-[80px] 2xl:h-[100px] lg:h-[100px] md:h-[102px] h-[80px]"></div>')
                console.log( $('.sp-previous-arrow.sp-arrow'));
        }, 100);
        
        var string = "<?php the_field('main_text_first_line'); ?>"; /* type your text here */
        var array = string.split("");
        var timer;
        function frameLooper () {
            if (array.length > 0) {
                document.getElementById("firstAn").innerHTML += array.shift();
            loopTimer = setTimeout('frameLooper()',50); /* change 70 for speed */
            } else {
                clearTimeout(timer);
                frameLooper2();
            }

        }
        setTimeout(() => {
            frameLooper();
        },1200);

        var string2 = "<?php the_field('main_text_second_line_first_word'); ?>"; /* type your text here */
        var array2 = string2.split("");
        var timer2;
        function frameLooper2 () {
            if (array2.length > 0) {
                document.getElementById("secondAn").innerHTML += array2.shift();
                loopTimer2 = setTimeout('frameLooper2()',40);
            } else {
                clearTimeout(timer2);
                frameLooper3();
            }
        }
        var string3 = "<?php the_field('main_text_second_line'); ?>";
        var array3 = string3.split("");
        var timer3;
        function frameLooper3 () {
            if (array3.length > 0) {
                document.getElementById("thirdAn").innerHTML += array3.shift();
                loopTimer3 = setTimeout('frameLooper3()',40);
            } else {
                clearTimeout(timer3);
                document.getElementById("buttonMainMob").style.opacity = "1";
                document.getElementById("buttonMainMob").style.transition = "1s";
            }
        }
 </script>
 <style>
    .sp-arrow {
        margin-top: 23%!important;
    }
@media only screen and (max-width:1330px){
    .sp-arrow {
        margin-top: 22%!important;
    }
}
@media only screen and (max-width:767px){
    .sp-arrow {
        margin-top: 79%!important; 
        width: 5px!important; 
        height: 60px!important;
    }
    .sp-horizontal .sp-previous-arrow {
        right: 130px!important;
        left: auto!important;
    }
}
 </style>