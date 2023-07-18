<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\FrontViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [FrontViewController::class, 'welcome'])->name('welcome.index');

// Password Generator related route
Route::get('/generate', [PasswordController::class, 'password'])->name('password.show');
Route::post('/generate', [PasswordController::class, 'generate'])->name('password.try'); // named route

// Url shortener related routes

Route::get('/shortener', [UrlController::class, 'index'])->name('url.show');
Route::post('/shortener', [UrlController::class, 'shorten'])->name('url.try'); // named route
Route::get('/{code}', [UrlController::class, 'redirect'])->name('redirect');


Route::fallback( function (){
    return redirect()->route('welcome');
});





