<?php

use Illuminate\Support\Facades\Route;

// importing Botman controller
use App\Http\Controllers\BotManController;


Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);