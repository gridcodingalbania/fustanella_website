<?php
/**
 * Template Name: About Us 
 */
?>
<?php get_header(); ?>

<div style="background:#F5F5F5;">
    <div class="bgimg-6"  style=" background-image: url('<?php the_field('first_image_about_us'); ?>');">
        <div class="text-center bg-gray94 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
            <p style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[140px] lg:mr-[120px] sm:mr-[100px] mr-[100px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('fustanella_word_first_p'); ?></p>
            <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase"><?php the_field('lorem_word_first'); ?></p>
            <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px]"><?php the_field('about_first_paragraph'); ?></p>     
        </div>
    </div>
    <div class="bgimg-7"  style=" background-image: url('<?php the_field('second_image_about_us'); ?>');">
        <div class="text-center bg-gray94 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
            <p style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[140px] lg:mr-[120px] sm:mr-[100px] mr-[100px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('fustanella_word_sec_p'); ?></p>
            <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase"><?php the_field('lorem_word_sec'); ?></p>
            <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px]"><?php the_field('about_sec_paragraph'); ?></p>     
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    $('document').ready(function () {
        $('#aboutUsA').css('color', 'green')
        $('#aboutUsA').css('borderBottom', '1px solid green')
        $('#aboutUsB').css('color', 'green')
    })
</script>
<script>
       var isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
            if (isIOS) {
                    $('.bgimg-6').addClass('bg-local');
                    $('.bgimg-6').addClass('min-h-[250vh]');
                    $('.bgimg-6').removeClass('bg-fixed'); 
                    $('.bgimg-7').addClass('bg-local');
                    $('.bgimg-7').addClass('min-h-[250vh]');
                    $('.bgimg-7').removeClass('bg-fixed'); 
            } else {
                $('.bgimg-6').removeClass('bg-local');
                $('.bgimg-6').addClass('bg-fixed'); 
                $('.bgimg-6').removeClass('min-h-[250vh]');
                $('.bgimg-6').addClass('bgimg-6');
                $('.bgimg-7').removeClass('bg-local');
                $('.bgimg-7').removeClass('min-h-[250vh]');
                $('.bgimg-7').addClass('bgimg-7');
                $('.bgimg-7').addClass('bg-fixed'); 
        }
</script>