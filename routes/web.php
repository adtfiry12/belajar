<?php


use App\Http\Controllers\frondEndController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    frondEndController::class, 'index'
])->name('dashboard');

Route::get('project', [
    frondEndController::class, 'project'
])->name('project');

Route::get('about',[
    frondEndController::class, 'about'
])->name('about');

Route::get('contact', [
    frondEndController::class, 'contact'
])->name('contact');