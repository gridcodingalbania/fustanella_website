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

            $this->sendContactToAdminEmail("greit@gridcoding.com", $name, $email, $message);

            wp_send_json_success([
                'message' => 'for contacting us!'
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
    public function sendContactToAdminEmail($to, $name, $email, $message)
    {
        $email_subject = "[Fustanella] New Contact";

        $email_message =
            "Name: " . $name .
            "\nEmail: " . $email .
            "\nMessage: " . "\n" . $message;

        $email_headers = 'From: ' . $to;

        wp_mail($to, $email_subject, $email_message, $email_headers);
    }
}
