<?php
namespace App;

use App\Base\Singleton;

class ApplicationForm extends Singleton
{
    public function __construct()
    {
        add_action('wp_ajax_application_form', [$this, 'application_form']);
        add_action('wp_ajax_nopriv_application_form', [$this, 'application_form']);
    }

    public function application_form()
    {
        $data = $_POST;
        if (isset($_FILES) && $_FILES) {
            if ($file_url = $this->save_file($_FILES)) {
                global $wpdb;
                $wpdb->insert(
                    'application',
                    [
                        'file_name' => $file_url,
                        'full_name' => $data['name'],
                        'phone' => $data['phone'],
                        'position' => $data['position']
                    ]
                );
                $id = $wpdb->insert_id;
                if($id){
                    wp_send_json_success([
                        'message' => 'for your application!'
                    ]);
                }
            }
        }
        wp_send_json_error([
            'message' => 'Error'
        ]);
    }

    public function save_file()
    {
        if (empty($_FILES)) {
            return;
        }
        foreach ($_FILES as $file) {
            try {
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
                require_once( ABSPATH . 'wp-admin/includes/file.php' );
                require_once( ABSPATH . 'wp-admin/includes/media.php' );
                $attachment = \wp_handle_upload($file, ['test_form' => false]);
                return $attachment['url'];
            } catch (\Exception $e) { }
        }
        return 0;
    }
}