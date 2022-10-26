<?php
/**
 * Template Name: farm Page
 */
?>
<?php get_header(); ?>
 <div style="background:#F5F5F5;">
    <div class="text-center bg-gray94 pb-[100px]">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px] mr-[140px] pt-[105px]"><?php the_field('fustanella_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('lorem_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px]  red-hat text-[20px] leading-[29px]"><?php the_field('fustanella_paragraph'); ?></p>
        <div class="2xl:flex sm:flex grid justify-center gap-[16px] mt-[80px]">
          <a href="" class="pulse2"><button class="px-[65px] py-[15px]  border  border-black"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px] font-semibold"><?php the_field('book_a_table_button'); ?></span></button></a>
          <a href="" class="pulse2"><button class="px-[65px] py-[15px]  border  border-black 2xl:mt-0 nav:mt-[5%] mt-0"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px] font-semibold"><?php the_field('book_a_room_button'); ?></span></button></a>
         </div>
    </div>
    <div>
        <img src="<?php the_field('first_image_farm_page'); ?>" alt="">
    </div>
    <div class="text-center pb-[100px]">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px] mr-[260px] pt-[105px]"><?php the_field('farm_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('lorem_farm_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px]  red-hat text-[20px] leading-[29px]"><?php the_field('farm_paragraph'); ?></p>
    </div>
    <div>
        <?php echo do_shortcode( '[URIS id=130]' ); ?>
    </div>
    <div class="text-center pb-[100px]">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px] mr-[140px] pt-[105px]"><?php the_field('accommodation_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('lorem_accommodation_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px]  red-hat text-[20px] leading-[29px]"><?php the_field('accommodation_paragraph'); ?></p>
    </div>
    <div class="pb-[150px]">
        <?php echo do_shortcode( '[URIS id=132]' ); ?>
    </div>
 </div>
<?php get_footer(); ?>
<script>
    $('document').ready(function () {
        $('#farmA').css('color', 'green')
        $('#farmA').css('borderBottom', '1px solid green')
    
        setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-29.078px] ml-[-45px] w-[90px] h-[140px]"></div>')
            // $('.sp-next-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-10px] ml-[-45px] w-[100px] h-[112px]"></div>')
        }, 100);
    })

</script>
<style>
    .sp-arrow{
        margin-top: 20%!important;
    }
</style>