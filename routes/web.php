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

Route::get('/', function () {
    return view('Home/index');
});

Route::get('/pages', function () {
    return view('Pages/index');
});

Route::get('/theme2', function () {
    return view('Home2/index');
});

Route::get('/theme3', function () {
    return view('Home3/index');
});

Route::get('/report', function () {
    return view('Report/index');
});

Route::get('/checkup', function () {
    return view('Checkup/index');
});

Route::get('/appointments', function () {
    return view('Appointments/index');
});


// Appointment Section************************************************* */

Route::get('/appointmentsList', 'AppointmentController@index');
Route::post('/appointment/add', 'AppointmentController@store');
Route::post('/appointment/edit', 'AppointmentController@update');
Route::post('/appointment/delete', 'AppointmentController@destroy');

