<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/igrejas', function () {
    return view('igrejas');
});

Route::get('/escolas', function () {
    return view('escolas');
});

Route::get('/familias', function () {
    return view('familias');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::post('/lead', [HomeController::class, 'store']);
