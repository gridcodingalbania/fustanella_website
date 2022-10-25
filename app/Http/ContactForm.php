<?php

namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;

class ContactForm extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        $data = request()->get('data');

        if (!$data) {
            return;
        }

        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];

        if ($id = $this->saveContact($name, $email, $message)) {
            wp_send_json_success([
                'message' => 'Thank you for contacting us! We will let you know shortly.'
            ]);
        }
    }

    public function saveContact($name, $email, $message)
    {
        global $wpdb;
        $wpdb->insert(
            'contact',
            [
                'full_name' => $name,
                'email' => $email,
                'message' => $message,
            ]
        );
        return $wpdb->insert_id;
    }
}
