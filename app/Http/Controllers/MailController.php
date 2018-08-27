<?php

namespace App\Http\Controllers;

use Log;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\OrderPlaceController;

class MailController extends Controller
{
    protected $email;

    public function sendMail($email)
    {
        $this->email = $email;
                                    
        Mail::send('orders.orders', [], function($message) {  

            $pdf = PDF::loadView('orders.orders');
            $message->to($this->email)
                    ->subject('Order Placed successfully.')
                    ->attachData($pdf->output(), "invoice.pdf");

        });        
    }
}
