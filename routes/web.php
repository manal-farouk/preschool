
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;

// Define the admin route
Route::get('/admin', [AdminController::class, 'index'])->name('index');

// Define register routes as needed


Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');


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

Route::get('/home', [App\Http\Controllers\Frontpages::class, 'index'])->middleware('verified')->name('home');




Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return View::make('hello');
	});

	Route::get('test',function(){
		return View::make('test');
	});
});
