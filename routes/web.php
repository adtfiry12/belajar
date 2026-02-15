<?php

use App\Http\Controllers\frondEndController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    frondEndController::class, 'index'
]);