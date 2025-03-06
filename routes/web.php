<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;

Route::get('/', [AdminsController::class, 'index']);
