        <?php view('common.footer'); ?>
        <?php wp_footer(); ?>
        <script>
            AOS.init();
        </script>
        <script src="<?php echo get_fustanella_scripts("translation/index.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/calendar.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/booking.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/validateBooking.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("gallery.js"); ?>"></script>
        </body>

        </html>