<div class="how-it-works-wrapper h-[60vh]">
    <div class="flex flex-col text-center items-center pt-12 pb-12">
        <p class="witter text-[55px] text-white">Join our team...</p>
        <p class="text-center text-[40px] uppercase text-white cormorant translate-x-12">Work with us</p>
    </div>
</div>

<div class="container -translate-y-24">
    <?php view('work-with-us.vacancies-cards'); ?>
</div>

<?php view('work-with-us.application-modal'); ?>

<script src="<?php echo get_fustanella_scripts("application/index.js"); ?>"></script>