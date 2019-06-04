<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/he', function () {
    $appo= App\Appointment::find(4);

    return $appo->report;
});

include("routes.web.php");

// Appointment Section************************************************* */

Route::get('/appointmentsList', 'AppointmentController@index');
Route::post('/appointment/add', 'AppointmentController@store');
Route::post('/appointment/edit', 'AppointmentController@update');
Route::post('/appointment/delete', 'AppointmentController@destroy');

