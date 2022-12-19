<div  class="lg:flex lg:flex-row flex-wrap items-center lg:justify-center xs:grid sm:grid xs:grid-cols-2 sm:grid-cols-2 xs:justify-items-center xs:gap-4 sm:gap-6 lg:gap-12">
    <?php if (have_rows('open_vacancies')) : ?>
        <?php while (have_rows('open_vacancies')) : the_row();
            $image = get_sub_field('logo');
            $picture = $image['sizes']['medium'];
            $position_name = get_sub_field('opened_position');
        ?>

            <div data-aos="fade-in" class="bg-[#F0F0F0] card-shadows flex flex-col items-center justify-around xs:w-[154px] sm:w-[180px] md:w-[300px] xl:w-[300px] 2xl:w-[384px] xs:h-[148px] sm:h-[148px] md:h-[200px] xl:h-[300px] 2xl:h-[384px] ">
                <p class="cormorant font-[500] uppercase xs:text-[14px] sm:text-[14px] lg:text-[24px]"><?php the_sub_field('opened_position'); ?></p>
                <?php if ($image) : ?>
                    <img src="<?php echo $picture ?>" class="xs:w-[38px] sm:w-[38px] lg:w-[52px] 2xl:w-auto">
                <?php endif; ?>
                <p class="cormorant font-[600] xs:text-[16px] sm:text-[16px] lg:text-[24px] border-b leading-tight uppercase border-headingColor text-headingColor cursor-pointer hover:pb-[2px] hover:transition-all" id="position-btn" data-value="<?php echo get_sub_field('opened_position'); ?>">Apply</p>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
</div>