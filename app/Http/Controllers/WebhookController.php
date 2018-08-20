<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function __construct()
    {        
        Log::info('Webhook is working at start.');

        define('SHOPIFY_APP_SECRET', env('SHOPIFY_SECRET_KEY'));

        function verify_webhook($data, $hmac_header)
        {
            $calculated_hmac = base64_encode(hash_hmac('sha256', $data, SHOPIFY_APP_SECRET, true));
            Log::info('Calculated hmac - ' . $calculated_hmac);
            Log::info('Hmac header - ' . $hmac_header);
            return hash_equals($hmac_header, $calculated_hmac);
        }

        $hmac_header = $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'];
        $data = file_get_contents('php://input');
        Log::info($data);

        $verified = verify_webhook($data, $hmac_header);

        Log::info('Webhook verified: '.var_export($verified, true));

        Log::info('Webhook is working fine');
    }

    public function index()
    {

    }

}
