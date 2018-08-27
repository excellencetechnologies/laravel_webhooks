<?php

namespace App\Http\Controllers;

use Log;
use PDF;
use View;
use File;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;

class OrderPlaceController extends Controller
{
    protected $admin;

    public function __construct()
    {        
        $this->admin = '/admin';

        $client = new Client();
        $mail = new MailController();

        $json = file_get_contents('php://input');
        
        $url = env('SHOPIFY_URL') . $this->admin . '/shop.json';        
        $res = $client->get( $url, ['auth' =>  [ env('SHOPIFY_KEY'), env('SHOPIFY_SECRET') ] ]);
        $shop_data = json_decode($res->getBody()->getContents(), true);

        Log::info($json);
        Log::info($shop_data);

        $data = json_decode($json, true);
        $email = 'nitesh_kumar@excellencetechnologies.in';
        
        View::share( 'data', $data );
        View::share('shop_data', $shop_data);

        Log::info("Data sent.");
        
        $mail->sendMail($email);

        Log::info("Email sent.");           
        Log::info(" ");
    }

    public function index()
    {

    }

}
