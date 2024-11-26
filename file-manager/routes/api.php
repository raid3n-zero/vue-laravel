<?php

use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('home/get-data', [HomeController::class, 'getDataHome']);