<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;

class SlackController extends Controller
{   
    /**
     * Sends hardcoded message to Slack
     *
     * @return void
     */
    public function sendSlackMessage()
    {
        dd('SlackController triggered');
        // return redirect('/create-event');
    }
}
