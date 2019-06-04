<?php

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

Route::get('/checkup/{id}', function () {
    return view('Checkup/index');
});

Route::get('/appointments', function () {
    return view('Appointments/index');
});

Route::get('/patient', function () {
    return view('Patient/index');
});

Route::get('/patient-med-info', function () {
    return view('Patient-med-info/index');
});
