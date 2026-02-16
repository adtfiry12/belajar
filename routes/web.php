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
    
    // Dashboard
    Route::get('/admin', [
        BackEndController::class, 'index'
    ])->name('dashboard');

    // Crud slide
    Route::get('/admin/slide', [
        SlideController::class, 'index'
    ])->name('admin.slide');

    //crud project
    Route::get('admin/project', [
        ProjectController::class, 'index'
    ])->name('admin.project');

    // crud about
    Route::get('/admin/about', [
        AboutController::class, 'index'
    ] )->name('admin.about');

    //crud contact
    Route::get('/admin/contact', [
        ContactController::class, 'index'
    ])->name('admin.contact');

    //crud Message
    Route::get('/admin/message', [
        MessageController::class, 'index'
    ])->name('admin.message');

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
