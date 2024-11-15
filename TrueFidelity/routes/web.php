<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\user;

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

Route::post('/devices_create', [DeviceController::class, 'store']);
Route::get('/devices_create', [DeviceController::class, 'create']);
Route::post('/devices_show', [DeviceController::class, 'show']);
Route::get('/devices', [DeviceController::class, 'index']);

Route::get('/register', [user::class, 'register']);
Route::post('/register', [user::class, 'store']);