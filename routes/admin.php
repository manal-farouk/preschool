<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return 'Welcome to the admin route!';
});


// Define the admin route
Route::get('/admin', [AdminController::class, 'index'])->name('index');

// Define register routes as needed


Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');






