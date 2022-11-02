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
           <a class="pulse" href=""><button class="px-[65px] py-[15px]  border  border-white"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px]"><?php the_field('book_a_table_button'); ?></span></button></a>
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
                <div style="background: rgba(0, 104, 56, 0.9);" class="absolute 2xl:mr-[51%] xl:mr-[40%] lg:mr-[40%]  md:mr-[20%] sm:mr-[10%] mr-[10%] text-white rounded-3xl 2xl:mt-[-72px] xl:mt-[-72px] lg:mt-[-72px] md:mt-[-150px] mt-[-150px] 2xl:ml-[170px] lg:ml-[120px] md:ml-[50px] ml-[10%]">
                <p class="text-white 2xl:text-[45px] sm:text-[45px] text-[40px] cormorant text-center uppercase 2xl:mt-[80px] sm:mt-[80px] mt-[30px]"><?php the_field('about_us_first_line'); ?></p>
                <p class="text-white red-hat 2xl:text-[22px] sm:text-[22px] text-[19px] text-center mt-[70px] 2xl:px-[70px] md:px-[30px] px-[15px] leading-[32px]"><?php the_field('about_us_paragraph'); ?></p>
                <a href=""><button class="flex m-auto red-hat text-[22px] my-[80px] buttonHover">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image'); ?>" alt=""></button></a>
                </div>
            </div>
        </div>  
        <div class="bgimg-3" style=" background-image: url('<?php the_field('restorant&food_image'); ?>');">
            <div>
                <div style="background: rgba(0, 104, 56, 0.9);" class="absolute 2xl:mr-[51%] xl:mr-[40%] lg:mr-[40%]  md:mr-[20%] sm:mr-[10%] mr-[10%] text-white rounded-3xl 2xl:mt-[-72px] xl:mt-[-72px] lg:mt-[-72px] md:mt-[-150px] mt-[-150px] 2xl:ml-[170px] lg:ml-[120px] md:ml-[50px] ml-[10%]">
                <p class="text-white 2xl:text-[45px] sm:text-[45px] text-[40px] cormorant text-center uppercase 2xl:mt-[80px] sm:mt-[80px] mt-[30px]"><?php the_field('restorant_first_line'); ?></p>
                <p class="text-white red-hat 2xl:text-[22px] sm:text-[22px] text-[19px] text-center mt-[70px] 2xl:px-[70px] md:px-[30px] px-[15px] leading-[32px]"><?php the_field('restorant_paragraph'); ?></p>
                <a href=""><button class="flex m-auto red-hat text-[22px] my-[80px] buttonHover">See more <img class="m-auto pl-[10px] " src="<?php the_field('see_more_image'); ?>" alt=""></button></a>
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
        <p style="color:#90B03E;" class="witter text-[60px] leading-[55px] mr-[140px]"><?php the_field('cheers_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('our_events_word'); ?></p>
        <p class=" 2xl:w-[600px] sm:w-[500px] w-[320px] m-auto mt-[73px]  red-hat text-[22px] leading-[33px]"><?php the_field('cheers_paragraph'); ?></p>
        <a href=""><button class="flex m-auto red-hat text-[22px] my-[80px]  font-medium buttonHover2">See more <img class="m-auto pl-[10px]" src="<?php the_field('see_more_image2'); ?>" alt=""></button></a>
    </div>
    <div class="2xl:grid xl:grid lg:grid grid-cols-3  2xl:px-[210px] xl:px-[100px] lg:px-[70px] 2xl:gap-[91px] xl:gap-[70px] lg:gap-[50px] nav:block">
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
    <div class="mt-[215px]">
        <?php echo do_shortcode( '[URIS id=88]' ); ?>
        <p class="absolute text-center mt-[-30%] left-auto right-auto w-full text-white witter 2xl:text-[96px] nav:text-[50px]"  data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">Some of our captured moments...</p>
    </div>
    <div class="mt-[157px] text-center">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px]"><?php the_field('you_re_welcome_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] "><?php the_field('direction_word'); ?></p>
        <p class="m-auto mt-[44px]  red-hat text-[22px] leading-[33px]"><?php the_field('location_paragraph'); ?></p>
    </div>
    <div class="mt-[30px]" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="1400">
     <?php the_field('main_page_maps'); ?> 

    </div>
   
</div>  
 <script>
     setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-10px] ml-[-45px] w-[100px] h-[100px]"></div>')
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