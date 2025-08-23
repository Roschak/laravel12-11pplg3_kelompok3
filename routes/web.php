<?php

use Illuminate\Support\Facades\Route;
use inertia\inetria;
use App\Http\controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

route::get('/home', [HomeController::class,  'index']);