<?php

namespace App\Http\Controllers;

use Log;
use PDF;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;

class OrderPlaceController extends Controller
{
    public function __construct()
    {        
        $json = file_get_contents('php://input');
        
        Log::info($json);

        $data = json_decode($json, true);
        $email = $data['email'];
        $mail = new MailController();
        View::share( 'data', $data );

        Log::info("Data sent.");
        
        $mail->sendMail($email);

        Log::info("Email has sent.");           
        Log::info(" ");
    }

    public function index()
    {

    }

}
