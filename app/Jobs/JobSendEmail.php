<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
//for email sending we will need...
use Mail;//this is the Mail facade, responsible
use App\Mail\Reminder;//and this is the Mailable.

class JobSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Create one email
        $email = new Reminder('Text from the JobSendEmail class');

        //Every job is set up to last 2 second. So we can follow.
        sleep(2);

        //Sending mail...
        Mail::to('andorhorvat@gmail.com')->send($email);

        //This echo is needed to illustrate the job execution in the cli
        echo 'Job executed!!' . PHP_EOL;
    }
}
