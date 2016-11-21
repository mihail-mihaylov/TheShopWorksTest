<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Schedule routes
Route::resource('schedule', '\App\Modules\Schedules\Http\Controllers\ScheduleController');

// Initial route
Route::get('/', function () {
    return view('welcome');
});


