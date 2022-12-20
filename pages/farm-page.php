<?php
/**
 * Template Name: farm Page
 */
?>
<?php get_header(); ?>
 <div style="background:#F5F5F5;">
    <div class="bgimg-4"  style=" background-image: url('<?php the_field('first_image_farm_page'); ?>');">
        <div class="text-center bg-gray94 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
            <p style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[140px] lg:mr-[120px] sm:mr-[100px] mr-[100px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('fustanella_word'); ?></p>
            <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase px-[5%]"><?php the_field('lorem_word'); ?></p>
            <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px]"><?php the_field('fustanella_paragraph'); ?></p>
            <div class="2xl:flex sm:flex grid justify-center gap-[16px] mt-[80px]">
            <a href="book-a-table" class="hover:bg-headingColor hover:text-white transition-all"><button class="2xl:px-[65px] sm:px-[65px] w-full px-[50px] 2xl:py-[15px] sm:py-[15px] py-[16px]  border  border-black"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px] font-semibold"><?php the_field('book_a_table_button'); ?></span></button></a>
            <a href="" class="hover:bg-headingColor hover:text-white transition-all"><button class="2xl:px-[65px] sm:px-[65px] w-full px-[50px] 2xl:py-[15px] sm:py-[15px] py-[16px] border  border-black 2xl:mt-0 nav:mt-[5%] mt-0"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px] font-semibold"><?php the_field('book_a_room_button'); ?></span></button></a>
            </div>
        </div>
        <div id="bgimg" class="h-[50vh] object-cover"></div>
    </div>
        <div class="text-center 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
            <p style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[140px] lg:mr-[120px] sm:mr-[100px] mr-[100px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('farm_word'); ?></p>
            <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase"><?php the_field('lorem_farm_word'); ?></p>
            <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px]"><?php the_field('farm_paragraph'); ?></p>
        </div>
    
    <div class="2xl:block md:block  2xl:mx-[200px] lg:mx-[100px] md:mx-[50px] mx-0 sm:hidden hidden">
        <?php echo do_shortcode( '[URIS id=130]' ); ?>
    </div>
    <div class="2xl:hidden md:hidden sm:block block">
        <?php echo do_shortcode( '[URIS id=269]' ); ?>
    </div>
    <div class="text-center 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
        <p  id="stay" style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[140px] lg:mr-[120px] sm:mr-[50px] mr-[35px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('accommodation_word'); ?></p>
        <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase"><?php the_field('lorem_accommodation_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px]"><?php the_field('accommodation_paragraph'); ?></p>
    </div>
    <div class="pb-[150px] 2xl:block  2xl:mx-[200px] lg:mx-[100px] md:mx-[50px] mx-0 md:block sm:hidden hidden">
        <?php echo do_shortcode( '[URIS id=132]' ); ?>
    </div>
    <div class="pb-[110px] 2xl:hidden md:hidden sm:block block">
        <?php echo do_shortcode( '[URIS id=267]' ); ?>
    </div>
 </div>
<?php get_footer(); ?>
<script>
    $('document').ready(function () {
        $('#farmA').css('color', 'green')
        $('#farmA').css('borderBottom', '1px solid green')
        $('#farmB').css('color', 'green')
    
        setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-29.078px] 2xl:ml-[-45px] md:ml-[-45px] sm:ml-[-35px] ml-[-35px] 2xl:w-[90px] md:w-[90px] sm:w-[75px] w-[75px] 2xl:h-[140px] md:h-[140px] sm:h-[127.59px] h-[127.59px]"></div>')
        }, 100);
    })

</script>
<script>
       var isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
            if (isIOS) { 
                $('.bgimg-4').removeClass('bgimg-4');
                $('#bgimg').prepend('<img class="h-[50vh] object-cover" src="<?php the_field('first_image_farm_page'); ?>" />')

            } else { 
                $('#bgimg').remove();
                $('.bgimg-4').addClass('bgimg-4');
        }
</script>
<style>
    .sp-arrow{
        margin-top: 26.55%!important;
    }
    @media only screen and (max-width:1000px){
        .sp-arrow{
            margin-top: 25%!important;
        }
    }
    @media only screen and (max-width:767px){
        .sp-arrow{
            margin-top: 77%!important;
            height: 69px!important;
        }
        .sp-horizontal .sp-previous-arrow {
            right: 130px!important;
        }
    }
</style>