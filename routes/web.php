<?php

use Illuminate\Support\Facades\Route;

Route::post('/send-message', 'App\Http\Controllers\MessageController@store'); 
Route::get('/form', function () {
    return view('message');
});

