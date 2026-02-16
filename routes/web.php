<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// route public

Route::get('/', [
    FrontEndController::class, 'index'
])->name('home');

Route::get('project', [
    FrontEndController::class, 'project'
])->name('project');

Route::get('about',[
    FrontEndController::class, 'about'
])->name('about');

Route::get('contact', [
    FrontEndController::class, 'contact'
])->name('contact');


// route admin 
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Project

    

    // profile bawaan breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
