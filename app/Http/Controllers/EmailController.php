<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\Reminder;

class EmailController extends Controller
{
    /**
     * Send Reminder E-mail Example. In two steps.
     * 1. The Reminder mailable class creates the email.
     * 2. The Mail facade sends the created email
     *
     * @return void
     */
    public function sendMail()
    {
        $to_email = 'makitabecej@gmail.com';//receiver address

        Mail::to($to_email)->send(new Reminder('Here we are testing how to pass data from the controller to the Mailable class'));//here we declare to who we are sending the email

        return "E-mail has been sent Successfully";
    }
}
