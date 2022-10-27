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
        add_menu_page('Applications', 'Applications', 'manage_options', 'applications', [$this, 'subscription_table_view_menu' ], 'dashicons-chart-line');
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
}