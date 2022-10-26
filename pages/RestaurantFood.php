<?php
/**
 * Template Name: Restaurant and Food Page
 */
?>
<?php get_header(); ?>
 <div style="background:#F5F5F5;">
    <div class="text-center bg-gray94 pb-[100px]">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px] mr-[140px] pt-[105px]"><?php the_field('restaurant_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('lorem_restaurant_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px] font-normal red-hat text-[20px] leading-[29px]"><?php the_field('restaurant_first_paragraph'); ?></p>
        <p class="2xl:mx-[375px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px] font-normal red-hat text-[20px] leading-[29px]"><?php the_field('restaurant_second_paragraph'); ?></p>
        <div class="2xl:flex sm:flex grid justify-center gap-[16px] mt-[80px]">
           <a href=""><button class="px-[65px] py-[15px]  border  border-black pulse2"> <span class="uppercase cormorant  2xl:text-[24px] sm:text-[24px] text-[18px] font-semibold"><?php the_field('book_a_table_button'); ?></span></button></a>
         </div>
    </div>
    <div>
        <img src="<?php the_field('first_image_restaurant'); ?>" alt="">
    </div>
    <div class="text-center pb-[100px]">
        <p style="color:#90B03E;" class="witter text-[55px] leading-[48px] mr-[260px] pt-[105px]"><?php the_field('organic_word'); ?></p>
        <p class="cormorant text-green-1000 text-[45px] leading-[39px] font-medium uppercase"><?php the_field('lorem_organic_word'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[50px] m-auto mt-[25px]  red-hat text-[20px] leading-[29px]"><?php the_field('organic_paragraph'); ?></p>
    </div>
    <div class="pb-[150px]">
        <?php echo do_shortcode( '[URIS id=149]' ); ?>
    </div>
 </div>
<?php get_footer(); ?>
<script>
    $('document').ready(function () {
        $('#rfA').css('color', 'green')
        $('#rfA').css('borderBottom', '1px solid green')
    
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