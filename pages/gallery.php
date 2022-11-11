<?php

/**
 * Template Name: Gallery Page
 */
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php get_header(); ?> 
    <div class="mt-[40px]">
        <table class="2xl:block sm:block hidden gallery-table-container 2xl:mx-[50px]xl:mx-[40px] lg:mx-[30px] md:mx-[20px] sm:mx-[10px] mx-0 mt-[-40px] border-separate 2xl:border-spacing-y-[30px] lg:border-spacing-y-[20px] md:border-spacing-y-[20px] border-spacing-y-[18px]  2xl:border-spacing-x-[25px] lg:border-spacing-x-[15px] md:border-spacing-x-[15px] border-spacing-x-[8px]">
            <tr>
                <td colspan=2 rowspan=4 ><img onclick="onClick(this)" data-aos="zoom-in" data-aos-duration="1500" class="test 2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[986.17px]" src="<?php the_field('table_1_first_image')?>"></td>
                <td rowspan=2 ><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class=" test 2xl:w-[327.05px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[475px]" src="<?php the_field('table_1_second_image')?>"></td>
                <td ><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_1_third_image')?>"></td>
                <td rowspan=2 ><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[330.8px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[475px]" src="<?php the_field('table_1_fourth_image')?>"></td>
            </tr>
            <tr> 
                <td><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_1_fifth_image')?>"></td> 
            </tr>
            <tr>
                <td colspan=2 rowspan=2><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[476px]" src="<?php the_field('table_1_sixth_image')?>"></td>
                <td><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_1_seventh_image')?>"></td> 
            </tr>
            <tr>
                <td><img onclick="onClick(this)" data-aos="zoom-in" data-aos-duration="1500"  class="2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_1_eighth_image')?>"></td>  
            </tr> 
        </table>
        <table class="2xl:block sm:block hidden gallery-table-container 2xl:mx-[30px] xl:mx-[30px] lg:mx-[30px] md:mx-[20px] sm:mx-[10px] mx-0 mt-[-40px] border-separate 2xl:border-spacing-y-[30px] lg:border-spacing-y-[20px] md:border-spacing-y-[20px] border-spacing-y-[18px]  2xl:border-spacing-x-[25px] lg:border-spacing-x-[15px] md:border-spacing-x-[15px] border-spacing-x-[8px] scale-x-[-1]">
            <tr>
                <td colspan=2 rowspan=4 data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[995.83px]" src="<?php the_field('table_2_first_image')?>"></td>
                <td rowspan=2 data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[327.05px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[479.83px]" src="<?php the_field('table_2_fifth_image')?>"></td>
                <td colspan=2 rowspan=2 data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[476px]" src="<?php the_field('table_2_sixth_image')?>"></td>
            </tr>
            <tr> 
            </tr>
            <tr>
                <td data-aos="zoom-in" data-aos-duration="1500"><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_2_third_image')?>"></td>
                <td rowspan=2 rowspan=2 data-aos="zoom-in" data-aos-duration="1500"><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[327.05px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[475px]" src="<?php the_field('table_2_second_image')?>"></td>
                <td data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_2_seventh_image')?>"></td> 
            
            </tr>
            <tr>
                <td data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_2_fourth_image')?>"></td> 
                <td data-aos="zoom-in" data-aos-duration="1500" ><img onclick="onClick(this)" class="scale-x-[-1] 2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_2_eighth_image')?>"></td>  
            </tr> 
        </table> 
        <table class="2xl:block sm:block hidden gallery-table-container 2xl:mx-[50px] xl:mx-[40px] lg:mx-[30px] md:mx-[20px] sm:mx-[10px] mx-0 mt-[-40px] border-separate 2xl:border-spacing-y-[30px] lg:border-spacing-y-[20px] md:border-spacing-y-[20px] border-spacing-y-[18px]  2xl:border-spacing-x-[25px] lg:border-spacing-x-[15px] md:border-spacing-x-[15px] border-spacing-x-[8px]">
            <tr>
                <td colspan=2 rowspan=4 ><img onclick="onClick(this)"   data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[986.17px]" src="<?php the_field('table_3_first_image')?>"></td>
                <td rowspan=2 ><img onclick="onClick(this)"   data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[327.05px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[475px]" src="<?php the_field('table_3_second_image')?>"></td>
                <td ><img onclick="onClick(this)"   data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_3_third_image')?>"></td>
                <td rowspan=2 ><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500"  class="2xl:w-[330.8px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[475px]" src="<?php the_field('table_3_fourth_image')?>"></td>
            </tr>
            <tr> 
                <td><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[340.18px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_3_fifth_image')?>"></td> 
            </tr>
            <tr>
                <td colspan=2 rowspan=2><img onclick="onClick(this)"   data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[704.47px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[476px]" src="<?php the_field('table_3_sixth_image')?>"></td>
                <td><img onclick="onClick(this)"  data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[216.93px]" src="<?php the_field('table_3_seventh_image')?>"></td> 
            </tr>
            <tr>
                <td><img onclick="onClick(this)"   data-aos="zoom-in" data-aos-duration="1500" class="2xl:w-[330px] xl:w-auto xl:h-auto h-auto w-auto xl:h-auto h-auto 2xl:h-[227.58px]" src="<?php the_field('table_3_eighth_image')?>"></td>  
            </tr> 
        </table>
        <!-- mobile gallery -->
        <div class="2xl:hidden sm:hidden block">
            <h1 class="text-center font-semibold text-[28px] leading-[24.5px] cormorant text-green-1000 uppercase">Gallery</h1>
            <p class="mt-[12px] mb-[24px] text-center text-green-2000 witter text-[32px] font-[400] leading-[36px]">some of our captured moments...</p>
            <div class="border-separate border-spacing-y-[22px] mb-[22px]">
                <div>
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_first_image')?>">
                </div>
                <div class="flex my-[20px] gap-[20px]">
                    <span>
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_second_image')?>">
                    </span>
                    <span class="block grid gap-y-3">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_third_image')?>">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_fifth_image')?>">
                    </span>
                </div>
                <div class="block grid gap-y-6 mb-[20px]">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_sixth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_fourth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_seventh_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_1_eighth_image')?>">
                </div>
                <div>
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_first_image')?>">
                </div>
                <div class="flex my-[20px] gap-[20px]">
                    <span>
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_fifth_image')?>">
                    </span>
                    <span class="block grid gap-y-3">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_third_image')?>">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_eighth_image')?>">
                    </span>
                </div>
                <div class="block grid gap-y-6  mb-[20px]">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_sixth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_fourth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_seventh_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_2_second_image')?>">
                </div>
                <div>
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_first_image')?>">
                </div>
                <div class="flex my-[20px] gap-[20px]">
                    <span>
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_second_image')?>">
                    </span>
                    <span class="block grid gap-y-3">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_third_image')?>">
                        <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_fifth_image')?>">
                    </span>
                </div>
                <div class="block grid gap-y-6">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_sixth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_fourth_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_seventh_image')?>">
                    <img onclick="onClick(this)" class="w-full" src="<?php the_field('table_3_eighth_image')?>">
                </div>
            </div>
        </div>
    </div>
    <div id="modal01" class="pt-[20px] w3-modal bg-white z-50">
       <div class="flex gap-10 float-right">
            <button class="float-right" onclick="openFullscreen();">
                <svg class="2xl:block sm:block hidden" width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6904 8.22437C26.1381 8.22437 25.6904 8.67208 25.6904 9.22437C25.6904 9.77665 26.1381 10.2244 26.6904 10.2244L26.6904 8.22437ZM43.9292 9.22436L44.9292 9.22436C44.9292 8.67208 44.4815 8.22436 43.9292 8.22436L43.9292 9.22436ZM42.9292 26.4632C42.9292 27.0154 43.3769 27.4632 43.9292 27.4632C44.4815 27.4632 44.9292 27.0154 44.9292 26.4632L42.9292 26.4632ZM26.6904 10.2244L43.9292 10.2244L43.9292 8.22436L26.6904 8.22437L26.6904 10.2244ZM42.9292 9.22436L42.9292 26.4632L44.9292 26.4632L44.9292 9.22436L42.9292 9.22436Z" fill="black"/>
                    <path d="M26.6904 44.7019C27.2427 44.7019 27.6904 44.2542 27.6904 43.7019C27.6904 43.1496 27.2427 42.7019 26.6904 42.7019L26.6904 44.7019ZM9.45164 43.7019L8.45164 43.7019C8.45164 44.2542 8.89935 44.7019 9.45164 44.7019L9.45164 43.7019ZM10.4516 26.4631C10.4516 25.9108 10.0039 25.4631 9.45164 25.4631C8.89935 25.4631 8.45163 25.9108 8.45164 26.4631L10.4516 26.4631ZM26.6904 42.7019L9.45164 42.7019L9.45164 44.7019L26.6904 44.7019L26.6904 42.7019ZM10.4516 43.7019L10.4516 26.4631L8.45164 26.4631L8.45164 43.7019L10.4516 43.7019Z" fill="black"/>
                </svg>
            </button>
            <button class="w3-button w3-hover-red w3-2xlarge float-right text-[50px]"  onclick="document.getElementById('modal01').style.display='none'">
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.2159 1.08293C1.82537 0.692408 1.19221 0.692408 0.801682 1.08293C0.411158 1.47346 0.411158 2.10662 0.801682 2.49715L2.2159 1.08293ZM20.1817 20.463L20.8888 21.1701C21.2793 20.7795 21.2793 20.1464 20.8888 19.7559L20.1817 20.463ZM0.801682 38.4288C0.411158 38.8193 0.411158 39.4525 0.801682 39.843C1.19221 40.2335 1.82537 40.2335 2.2159 39.843L0.801682 38.4288ZM0.801682 2.49715L19.4746 21.1701L20.8888 19.7559L2.2159 1.08293L0.801682 2.49715ZM19.4746 19.7559L0.801682 38.4288L2.2159 39.843L20.8888 21.1701L19.4746 19.7559Z" fill="black"/>
                    <path d="M38.1474 39.8431C38.5379 40.2336 39.1711 40.2336 39.5616 39.8431C39.9521 39.4526 39.9521 38.8194 39.5616 38.4289L38.1474 39.8431ZM20.1816 20.4631L19.4745 19.756C19.0839 20.1465 19.0839 20.7796 19.4745 21.1702L20.1816 20.4631ZM39.5616 2.49724C39.9521 2.10672 39.9521 1.47355 39.5616 1.08303C39.1711 0.692501 38.5379 0.692501 38.1474 1.08303L39.5616 2.49724ZM39.5616 38.4289L20.8887 19.756L19.4745 21.1702L38.1474 39.8431L39.5616 38.4289ZM20.8887 21.1702L39.5616 2.49724L38.1474 1.08303L19.4745 19.756L20.8887 21.1702Z" fill="black"/>
                </svg>
            </button>
       </div>
        <div class="m-auto w-auto w3-animate-zoom">
            <!-- <img id="img01" class="m-auto" > -->
            <img id="img01" class="m-auto 2xl:w-[1200px] lg:w-[1000px] sm:w-[1000px] w-[800px] 2xl:h-[750px] lg:h-[718px] sm:h-[718px] h-[490px] object-scale-down" >
        </div>
            <div class="flex justify-between 2xl:ml-[88px] lg:ml-[70px] sm:ml-[70px] ml-[20px]  2xl:mr-[280px] lg:mr-[240px] sm:mr-[240px] mr-[20px] 2xl:mt-[-5%] sm:mt-[-5%] mt-[-9%]" >
                <button onclick='callPrevious();' >
                    <svg width="76" height="115" viewBox="0 0 76 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="74.448" height="114.229" transform="matrix(-1 0 0 1 75.2041 0.104004)" fill="white" fill-opacity="0.3"/>
                        <path d="M53.6698 23.7162C54.0604 23.3257 54.6935 23.3257 55.0841 23.7162C55.4746 24.1068 55.4746 24.7399 55.0841 25.1304L53.6698 23.7162ZM21.5822 57.2181L20.8751 57.9252C20.4846 57.5346 20.4846 56.9015 20.8751 56.5109L21.5822 57.2181ZM55.0841 89.3057C55.4746 89.6962 55.4746 90.3294 55.0841 90.7199C54.6935 91.1104 54.0604 91.1104 53.6698 90.7199L55.0841 89.3057ZM55.0841 25.1304L22.2893 57.9252L20.8751 56.5109L53.6698 23.7162L55.0841 25.1304ZM22.2893 56.5109L55.0841 89.3057L53.6698 90.7199L20.8751 57.9252L22.2893 56.5109Z" fill="black"/>
                    </svg>
                </button>
                <button onclick="callNext();">
                    <svg width="76" height="115" viewBox="0 0 76 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="74.448" height="114.229" transform="matrix(1 1.74846e-07 1.74846e-07 -1 0.810547 114.333)" fill="white" fill-opacity="0.3"/>
                        <path d="M22.3448 90.7203C21.9543 91.1108 21.3211 91.1108 20.9306 90.7203C20.5401 90.3298 20.5401 89.6966 20.9306 89.3061L22.3448 90.7203ZM54.4324 57.2185L55.1395 56.5114C55.53 56.9019 55.53 57.5351 55.1395 57.9256L54.4324 57.2185ZM20.9306 25.1309C20.5401 24.7403 20.5401 24.1072 20.9306 23.7166C21.3211 23.3261 21.9543 23.3261 22.3448 23.7166L20.9306 25.1309ZM20.9306 89.3061L53.7253 56.5114L55.1395 57.9256L22.3448 90.7203L20.9306 89.3061ZM53.7253 57.9256L20.9306 25.1309L22.3448 23.7166L55.1395 56.5114L53.7253 57.9256Z" fill="black"/>
                    </svg>
                </button>
            </div>
    </div>
<?php get_footer(); ?>

<script>
    var currentImg = null;
    var ar=document.getElementsByTagName("img")
    var nextIdx = -1;
    var prevIdx = -1;
    $('document').ready(function () {
        $('#galleryA').css('color', 'green')
        $('#galleryA').css('borderBottom', '1px solid green')
    
        setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.3);" class="mt-[-29.078px] ml-[-45px] w-[90px] h-[140px]"></div>')
            // $('.sp-next-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-10px] ml-[-45px] w-[100px] h-[112px]"></div>')
        }, 100);
    })

</script>  
<script>
    function onClick(element) { 
        currentImg = element;
        updatePrevNext();
        document.getElementById("img01").src = element.src; 
        document.getElementById("modal01").style.display = "block";
    } 
    function callPrevious(){
        currentImg = ar[prevIdx];
        updatePrevNext();
        document.getElementById("img01").src = currentImg.src; 
        document.getElementById("modal01").style.display = "block";

        console.log(ar[prevIdx].src); 
    }
    function callNext(){
        currentImg = ar[nextIdx];
        updatePrevNext();
        document.getElementById("img01").src = currentImg.src; 
        document.getElementById("modal01").style.display = "block";
    }

    function openFullscreen() { 
        currentImg.requestFullscreen(); 
    } 
    function updatePrevNext(){
        for (let i=9; i < ar.length - 8; i++) {
            if(ar[i].src === currentImg.src){
                if(i > 9)
                    prevIdx = i - 1;
                if(i < ar.length - 9)
                    nextIdx = i + 1;
                if(i === ar.length - 9)
                    nextIdx = 9;
                if(i ===  9)
                    nextIdx = i +1;
                }  
        }
    }
</script>