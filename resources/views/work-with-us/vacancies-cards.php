<div class="grid grid-cols-3 gap-20 justify-items-center">
    <?php if (have_rows('open_vacancies')) : ?>
        <?php while (have_rows('open_vacancies')) : the_row();
            $image = get_sub_field('logo');
            $picture = $image['sizes']['medium'];
            $position_name = get_sub_field('opened_position');
        ?>

            <div class="bg-[#F0F0F0] card-shadows flex flex-col items-center justify-around w-[400px] h-[320px]">
                <p class="cormorant uppercase text-[24px]"><?php the_sub_field('opened_position'); ?></p>
                <?php if ($image) : ?>
                    <img src="<?php echo $picture ?>" class="w-[74px]">
                <?php endif; ?>
                <p class="cormorant text-[24px] border-b-2 uppercase border-headingColor text-headingColor cursor-pointer" id="position-btn" data-value="<?php echo get_sub_field('opened_position'); ?>">Apply</p>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
</div>