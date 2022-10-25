<?php

/**
 * Template Name: Gallery Page
 */
?>
<?php get_header(); ?>
    <div>
        <?php echo do_shortcode( '[URIS id=156]' ); ?>
        <p class="absolute text-center mt-[-30%] left-auto right-auto w-full text-white witter 2xl:text-[96px] xl:text-[50px] md:text-[50px] sm:text-[20px] text-[20px]">Some of our captured moments...</p>
    </div>
<?php get_footer(); ?>
<script>
    $('document').ready(function () {
        $('#galleryA').css('color', 'green')
        $('#galleryA').css('borderBottom', '1px solid green')
    
        setTimeout(() => {
            $('.sp-arrow').append('<div style="background: rgba(245, 245, 245, 0.3);" class="mt-[-29.078px] ml-[-45px] w-[90px] h-[140px]"></div>')
            // $('.sp-next-arrow').append('<div style="background: rgba(245, 245, 245, 0.45);" class="mt-[-10px] ml-[-45px] w-[100px] h-[112px]"></div>')
        }, 100);
    })

</script>
