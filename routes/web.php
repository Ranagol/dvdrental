<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestQueueEmails;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\DB;


/**
 * This app is here.
 * First, do 'php artisan serve'. Then, go to this link below:
 * http://127.0.0.1:8000/dvd-rental
 */
Route::get('/dvd-rental', function () {
    return view('welcome');
});

/**
 * This is for testing if the db is connected to the app.
 */
Route::get('/test-db', function () {
    if(DB::connection()->getDatabaseName()){
        echo "Connected sucessfully to database " . DB::connection()->getDatabaseName() . ".";
    }

    return view('welcome');
});

//Used for sql testing in dvdrental db. We are getting some data from the db, and displaying it.
Route::get('get-data','App\Http\Controllers\SqlTestController@getData');

//This is simple mail sending, it is not connected to jobs and queues topic.
Route::get('send-mail','App\Http\Controllers\EmailController@sendMail');

//Here we trigger a job. The job will send a couple of emails.
Route::get('job','App\Http\Controllers\JobController@processQueue');

//NOTE: I also tested Spatie Permissions here. The installing part.
Route::prefix('jobs')->group(function () {
    Route::queueMonitor();
});

//Here we play with the MyCustomException to understand how the exceptions work in Laravel
Route::get('trigger-exception','App\Http\Controllers\TriggerExceptionController@trigger');

/**
 * For practising the Events and Listeners story...
 */
//Display the page for creating an event
Route::get('create-event','App\Http\Controllers\EventController@displayCreateEventPage');
//When the user clicks on the 'Create event' buttton.
Route::get('button-clicked','App\Http\Controllers\EventController@triggerButtonClickedEvent');


