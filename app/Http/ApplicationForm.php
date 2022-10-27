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

        dump($data);
        die;
        if (isset($_FILES) && $_FILES) {
            if ($response = $this->save_file($_FILES)) {
                $response['error'] == false ?  wp_send_json_success($response) : wp_send_json_error($response);
            }
        }



        wp_send_json([
            'error' => false,
            'message' => '',
        ]);
    }


    public function save_file()
    {
        if (empty($_FILES)) {
            return;
        }
        foreach ($_FILES as $file) {
            $attachment_id = media_handle_upload($file, 0);
        }

        if (is_int($attachment_id)) {
            return [
                'error' => false,
                'message' => __('Foto e profilit u ngarkua me sukses.', 'app'),
            ];
        }
        return [
            'error' => true,
            'message' => __('Something went wrong', 'app')
        ];
    }
}
