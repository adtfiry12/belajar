<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SlideController;
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
    

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/', [
            BackEndController::class, 'index'
        ])->name('dashboard');

        // crud
        Route::resource('slide', SlideController::class);
        Route::resource('project', ProjectController::class);
        Route::resource('about', AboutController::class);
        Route::resource('contact', ContactController::class);
        Route::resource('message', MessageController::class);
    });

    // profile bawaan breeze
    Route::get('/admin/profile', [
        ProfileController::class, 'edit'
        ])->name('profile.edit');
    Route::patch('/admin/profile', [
        ProfileController::class, 'update'
        ])->name('profile.update');
    Route::delete('/admin/profile', [
        ProfileController::class, 'destroy'
        ])->name('profile.destroy');
});

require __DIR__.'/auth.php';
