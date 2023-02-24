<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\admin\IndexController;

Route::get('/dashboard', [IndexController::class, 'index']);
