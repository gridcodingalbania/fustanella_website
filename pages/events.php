<?php

/**
 * Template Name: Events
 */
?>
<?php get_header(); ?>
<div class="background: #F5F5F5;">
    <div class="text-center">
        <p style="color:#90B03E;" class="witter xs:text-[34px] sm:text-[34px] lg:text-[55px] leading-[48px] xs:mr-[100px] sm:mr-[100px] lg:mr-[260px] pt-[105px]"><?php the_field('cheers_word')?></p>
        <p class="cormorant text-green-1000 xs:text-[30px] sm:text-[30px] lg:text-[45px] leading-[39px] font-medium uppercase"><?php the_field('our_events_word')?></p>
        <p class="2xl:mx-[400px] xl:mx-[300px] lg:mx-[200px] md:mx-[200px] sm:mx-[100px] mx-[25px] m-auto mt-[25px] red-hat xs:text-[16px] sm:text-[16px] lg:text-[20px] xs:leading-[24px] sm:leading-[24px] lg:leading-[29px]"><?php the_field('cheers_paragraph'); ?></p>
    </div>
    <div class="grid xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 gap-[92px] sm:mx-[100px] lg:mx-[210px] text-center my-[150px]">

        <?php if (have_rows('events')) : ?>
            <?php while (have_rows('events')) : the_row();
                $image = get_sub_field('image');
                $picture = $image['sizes']['medium'];
            ?>

                <div>
                    <div>
                        <?php if ($image) : ?>
                            <img src="<?php echo $picture ?>"  class="w-full" alt="">
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="cormorant font-semibold text-[24px] leading-[21px] text-green-1000 mt-[25px]"><?php the_sub_field('date'); ?></p>
                        <p class="cormorant font-semibold text-[24px] leading-[21px] mt-[19px]"><?php the_sub_field('title'); ?></p>
                        <p class="red-hat font-normal text-[20px] leading-[29px] mt-[24px]"><?php the_sub_field('short_info'); ?></p>
                    </div>
                </div>


            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>
<script>
    $('document').ready(function() {
        $('#eventsA').css('color', 'green')
        $('#eventsA').css('borderBottom', '1px solid green')
    })
</script>