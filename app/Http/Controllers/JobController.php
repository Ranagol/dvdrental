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
     */
    public function processQueue()
    {
        $emailJob = new JobSendEmail();
        dispatch($emailJob);
    }
}
