<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'home.about')->name('about');
Route::view('/contact', 'home.contact')->name('contact');
Route::view('/resources', 'home.news')->name('resources');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment');

    Route::get('/myappointment', [HomeController::class, 'myappointment'])->name('myappointment');
    Route::delete('/cancel-appointment/{id}', [HomeController::class, 'cancel_appoint'])->name('cancel_appoint');
    Route::get('/edit-appointment/{id}', [HomeController::class, 'edit_appoint'])->name('edit_appoint');
    Route::put('/update-appointment/{id}', [HomeController::class, 'update_appoint'])->name('update_appoint');
});

Route::get('/article', function () {
    return view('articles.article'); 
});

Route::get('/quiz', function () {
    return view('articles.quiz');
});


    

