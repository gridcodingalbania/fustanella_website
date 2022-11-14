<div class="how-it-works-wrapper xs:h-[40vh] sm:h-[40vh] lg:h-[60vh]">
    <div class="flex flex-col text-center items-center pt-12 pb-12">
        <p class="witter xs:text-[32px] sm:text-[32px] lg:text-[55px] text-white">Join our team...</p>
        <p class="text-center xs:text-[28px] lg:text-[40px] uppercase text-white cormorant xs:translate-x-6 lg:translate-x-12">Work with us</p>
    </div>
</div>

<div class="xs:w-[90%] sm:w-[90%] xl:w-[80%] 2xl:w-[67%] mx-auto xs:-translate-y-12 sm:-translate-y-12 lg:-translate-y-28">
    <?php view('work-with-us.vacancies-cards'); ?>
</div>

<?php view('work-with-us.application-modal'); ?>

<?php view('common.pop-up'); ?>

<script src="<?php echo get_fustanella_scripts("application/index.js"); ?>"></script>