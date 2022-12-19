<?php

namespace App\Hooks;

use App\Base\Singleton;

class AdminHooks extends Singleton
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
        add_action('wp_ajax_start_campaign', [$this, 'start_campaign']);
    }


    public function admin_menu()
    {
        add_menu_page('Applications', 'Applications', 'manage_options', 'applications', [$this, 'subscription_table_view_menu'], 'dashicons-store');
        add_menu_page('Bookings', 'Bookings', 'manage_options', 'bookings', [$this, 'booking_table_view_menu'], 'dashicons-calendar-alt');
        add_menu_page('Contacts', 'Contacts', 'manage_options', 'contacts', [$this, 'contact_table_view_menu'], 'dashicons-email');
    }

    public function subscription_table_view_menu()
    {
        $subscription = new \App\AdminApplicationTable();
        $subscription->prepare_items() ?>
        <div class="wrap">
            <?php $subscription->search_box(__('Search', 'app'), 'app'); ?>
            <form id="email_list" method="get">
                <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
                <?php $subscription->display() ?>
            </form>
        </div>
    <?php
    }

    public function booking_table_view_menu()
    {
        $booking = new \App\AdminBookingTable;
        $booking->prepare_items() ?>
        <div class="wrap">
            <?php $booking->search_box(__('Search', 'app'), 'app'); ?>
            <form id="email_list" method="get">
                <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
                <?php $booking->display() ?>
            </form>
        </div>
    <?php
    }

    public function contact_table_view_menu()
    {
        $contact = new \App\AdminContactTable;
        $contact->prepare_items() ?>
        <div class="wrap">
            <?php $contact->search_box(__('Search', 'app'), 'app'); ?>
            <form id="email_list" method="get">
                <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
                <?php $contact->display() ?>
            </form>
        </div>
        <?php 
    }
}
