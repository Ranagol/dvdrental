<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jobs\JobSendEmail;

class JobController extends Controller
{
    /**
     * Handle Queue Process.
     * Creates a job, and dispatches a job to the jobs table in db.
     * To create 5 jobs, go to:
     * http://127.0.0.1:8000/job
     * To trigger the queue run:
     * php artisan queue:work
     */
    public function processQueue()
    {
        //this is the job. This job sends email.
        $emailJob = new JobSendEmail();

        //We place this $emailJob into queue 5 times. Because I am too lazy to create new jobs.
        for ($i=0; $i < 5; $i++) { 

            //This is where the magic happens.
            dispatch($emailJob);
        }

        
    }
}
