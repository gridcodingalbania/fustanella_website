        <?php view('common.footer'); ?>
        <?php wp_footer(); ?>
        <script>
            AOS.init();
        </script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({
                    'overflow': 'visible'
                });
            })
            $(document).ready(function() {
                setTimeout(() => {
                    $('.sp-button').append('<div style="background-color: #ffff!important;width: 20px;height:4px!important;z-index:100;border: 1px solid #fff !important;margin-top:-3px;margin-left:-2px;"></div>')
                }, 1000);
            });
            $(document).ready(function() {
                if (window.location.pathname === ('/')) {
                    $('.HAMNAVBAR').append('<img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIcon.svg'); ?>">')
                    if (!$('#navbar2').hasClass('absolute')) {
                        $('#navbar2').addClass('absolute');
                        $('#navbar2').removeClass('relative');
                    } else {
                        $('#navbar2').addClass('relative');
                        $('#navbar2').removeClass('absolute');
                    }
                } else {
                    $('.HAMNAVBAR').append('<img class="mt-[55px] ml-[40px]" src="<?php echo get_image('HamNavLineIconBlack.svg'); ?>">')
                }
            });
        </script>
        <script src="<?php echo get_fustanella_scripts("translation/index.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/calendar.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/booking.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("booking/validateBooking.js"); ?>"></script>
        <script src="<?php echo get_fustanella_scripts("gallery.js"); ?>"></script>
        </body>

        </html>