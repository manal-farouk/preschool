


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
Route::get('/', function () {
    return view('test');
});

Route::get('home',[Frontpages::class,'home'])->middleware('verified')->name('home');

Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('classes',[Frontpages::class,'classes'])->name('classes');
Route::get('contact',[Frontpages::class,'contact'])->name('contact');
Route::get('error',[Frontpages::class,'error'])->name('error');
Route::get('appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('call',[Frontpages::class,'call'])->name('call');
Route::get('facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('team',[Frontpages::class,'team'])->name('team');
Route::get('testimonial',[Frontpages::class,'testimonial'])->name('testimonial');


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
