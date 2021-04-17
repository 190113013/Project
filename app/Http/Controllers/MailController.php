<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
    	$objDemo = new \stdClass();
    	$objDemo->demo_one = 'Demo One Value';
    	$objDemo->demo_two = 'Demo Two Value';
    	$objDemo->sender = 'Sandubayev Yerzhan';
    	$objDemo->receiver = 'Sandubayev Yerzhan';

    	Mail::to("190113013@stu.sdu.edu.kz")->send(new DemoMail($objDemo));
    } 
}
