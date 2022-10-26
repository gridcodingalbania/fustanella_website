<?php

namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;

class ApplicationForm extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        $data = request()->get('data');

        if (!$data) {
            return;
        }
    }

    public function saveApplication($date, $time, $persons, $name, $surname, $phone_no)
    {
        global $wpdb;
        $wpdb->insert(
            'table_name',
            [
            
            ]
        );
        return $wpdb->insert_id;
    }
}
