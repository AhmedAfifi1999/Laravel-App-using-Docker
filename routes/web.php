<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lb-test', function () {
    return response()->json([
        'hostname' => gethostname(),
        'server_ip' => request()->server('SERVER_ADDR'),
    ]);
});
