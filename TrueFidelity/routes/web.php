<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/get_started', function () {
    return view('get_started');
});
Route::get('/tf_standard', function () {
    return view('tf_standard');
});

Route::post('/device_show', [DeviceController::class, 'device_show']);

Route::get('/devices', [DeviceController::class, 'index']);

