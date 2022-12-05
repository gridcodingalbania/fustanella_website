<?php
/**
 * Template Name: Privacy and Cookie
 */
?>
<?php get_header(); ?>
<div style="background:#F5F5F5;">
    <div class="text-center bg-gray94 2xl:pb-[100px] md:pb-[80px] sm:pb-[45px] pb-[40px]">
        <p style="color:#90B03E;" class="witter 2xl:text-[55px] lg:text-[50px] md:text-[50px] sm:text-[40px] text-[32px] leading-[48px] 2xl:mr-[340px] lg:mr-[220px] sm:mr-[200px] mr-[100px] 2xl:pt-[105px] lg:pt-[90px] md:pt-[80px] sm:pt-[70px] pt-[62px]"><?php the_field('cookie'); ?></p>
        <p class="cormorant text-green-1000 2xl:text-[45px] lg:text-[40px] md:text-[40px] sm:text-[30px] text-[28px] leading-[39px] font-medium uppercase"><?php the_field('privacy'); ?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[35px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px] text-justify"><?php the_field('pharagraph1'); ?></p>     
        <p class="cormorant text-green-1000 2xl:text-[38px] lg:text-[30px] md:text-[25px] sm:text-[25px] text-[20px] mt-[30px] leading-[39px] font-medium uppercase"><?php the_field('header2'); ?></p>     
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px] text-justify"><?php the_field('pharagraph1_header2'); ?></p>     
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[35px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px] text-justify"><?php the_field('pharagraph2_header2'); ?></p>     
        <p class="cormorant text-green-1000 2xl:text-[38px] lg:text-[30px] md:text-[25px] sm:text-[25px] text-[20px] mt-[30px] leading-[39px] font-medium uppercase"><?php the_field('header3'); ?></p>     
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[45px] m-auto mt-[25px]  red-hat 2xl:text-[20px] lg:text-[19px] sm:text-[18px] text-[16px] 2xl:leading-[29px] md:leading-[29px] sm:leading-[24px] leading-[24px] text-justify"><?php the_field('pharagraph_header3'); ?></p>     
    </div>
</div>
<?php get_footer(); ?>