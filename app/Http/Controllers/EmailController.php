<?php

namespace App\Http\Controllers;

use Mail;

use App\Http\Requests;
use App\Mail\Reminder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;

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
        $to_email = 'andorhorvat@gmail.com';//receiver address
        Mail::to($to_email)
            ->send(
                    new Reminder(
                        'This is a testing email from dvdrental app.'
                    )
        );
        $t = 8;

        sleep(10);

        return "E-mail has been sent Successfully";
    }
}
