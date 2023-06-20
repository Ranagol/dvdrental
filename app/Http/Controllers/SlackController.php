<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\SlackAlerts\Facades\SlackAlert;


class SlackController extends Controller
{   
    /**
     * Sends hardcoded message to Slack
     *
     * @return void
     */
    public function sendSlackMessage()
    {
        try {
            SlackAlert::message("This is a hardcoded message from dvdrental app to Andor");
            return redirect('/create-event');

        } catch (\Throwable $error) {
            echo 'My error message: ' . $error->getMessage() . '<br>';
            echo 'The error was triggered in this file: ' . $error->getFile(). '<br>';
            echo 'The error was triggered on this line: ' . $error->getLine(). '<br>';
        }
    }
}
