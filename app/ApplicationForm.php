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
                if ($id) {
                    $person_name = $data['name'];
                    $person_phone = $data['phone'];
                    $position = $data['position'];

                    $this->sendApplicationToAdmin("greit@gridcoding.com", $person_name, $person_phone, $position);
                    
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
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                require_once(ABSPATH . 'wp-admin/includes/file.php');
                require_once(ABSPATH . 'wp-admin/includes/media.php');
                $attachment = \wp_handle_upload($file, ['test_form' => false]);
                return $attachment['url'];
            } catch (\Exception $e) {
            }
        }
        return 0;
    }

    public function sendApplicationToAdmin($to, $name, $phone_no, $position)
    {
        $email_subject = "[Fustanella] New Application";

        $email_message =
            "Name: " . $name .
            "\nPhone Number: " . $phone_no .
            "\nPosition: " . $position .
            "\n\n\n Please visit admin dashboard to download CV. fustanellafarm.al/wp-admin/admin.php?page=applications";

        $email_headers = 'From: ' . $to;

        wp_mail($to, $email_subject, $email_message, $email_headers);
    }
}
