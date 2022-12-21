<?php

namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;

class BookingForm extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        $data = request()->get('data');

        if (!$data) {
            return;
        }

        $selected_date = date('Y-m-d', strtotime($data['date']));
        $selected_time = $data['time'];
        $selected_persons = (int) $data['persons'];
        $selected_name = $data['name'];
        $selected_surname = $data['surname'];
        $selected_phoneNumber = $data['phone_number'];

        if ($id = $this->saveBooking($selected_date, $selected_time, $selected_persons, $selected_name, $selected_surname, $selected_phoneNumber)) {
            $this->sendBookingEmailToAdmin("greit@gridcoding.com", $selected_name, $selected_surname, $selected_phoneNumber, $selected_date, $selected_time, $selected_persons);
            wp_send_json_success([
                'message' => 'for your booking!'
            ]);
        }
    }

    public function sendBookingEmailToAdmin($to, $name, $surname, $phone_no, $date, $time, $no_of_persons)
    {
        $email_subject = "[Fustanella] New Booking";

        $email_message =
            "Person Name: " . $name . "  " . $surname .
            "\nPhone Number: " . $phone_no .
            "\nDate: " . $date . "  " . $time .
            "\nNumber of Persons: " . $no_of_persons;

        $email_headers = 'From: ' . $to;

        wp_mail($to, $email_subject, $email_message, $email_headers);
    }


    public function saveBooking($date, $time, $persons, $name, $surname, $phone_no)
    {
        global $wpdb;
        $wpdb->insert(
            'booking',
            [
                'time' => $time,
                'date' => $date,
                'number_of_persons' => $persons,
                'name' => $name,
                'surname' => $surname,
                'phone_number' => $phone_no,
            ]
        );
        return $wpdb->insert_id;
    }
}
