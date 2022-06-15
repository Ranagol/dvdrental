<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestQueueEmails;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\DB;


/**
 * This app is here.
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

//Used for sql testing in dvdrental db.
Route::get('get-data','App\Http\Controllers\SqlTestController@getData');


//This is simple mail sending, it is not connected to jobs and queues topic.
Route::get('send-mail','App\Http\Controllers\EmailController@sendMail');

//Here we trigger a job.
Route::get('job','App\Http\Controllers\JobController@processQueue');

//NOTE: I also tested Spatie Permissions here. The installing part.
