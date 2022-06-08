<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestQueueEmails;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
        echo "Connected sucessfully to database ".DB::connection()->getDatabaseName().".";
    }

    return view('welcome');
});



Route::get('send-mail','App\Http\Controllers\EmailController@sendMail');
Route::get('job','App\Http\Controllers\JobController@processQueue');
