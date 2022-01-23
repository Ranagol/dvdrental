<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * This is the dynamic part of the email. We place get this from the EmailConstroller, when
     * we create this Mailable class. Every public property in the Mailable class will be
     * automatically available in the related email blade template!
     * So, we can display this property in the reminder-email like this:
     * {{ $dataFromController }}
     *
     * @var string
     */
    public string $dataFromController;

    /**
     * Create a new message instance.
     * Also, we receive here the data from the controller.
     *
     * @return void
     */
    public function __construct(string $dataFromController)
    {
        $this->dataFromController = $dataFromController;
    }

    /**
     * This function will create the email. It will define what view to use, what is the subject,
     * our email view template is in resources/views/emails/reminder-email.blade.php
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('emails.reminder-email')//we define which blade template to use
            ->subject('Today is a nice sunny day');//we define the subject of the email
    }
}
