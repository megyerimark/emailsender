<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;


class EmailController extends Controller
{
    public function sendMail() {

        $details = [
            "title" => "Teccesssz",
            "body" => "Zsíros kenyér"
        ];

        Mail::to( "albertlaura04@gmail.com" )->send( new TestMail( $details ));

        echo "<h3>Sikeres küldés</h3>";
    }
}
