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



Route::get('/', [FrontViewController::class, 'welcome'])->name('welcome');

// Password Generator related route
Route::get('/generate_password', [PasswordController::class, 'password'])->name('password_home');
Route::post('/generated', [PasswordController::class, 'generate'])->name('generated');

// Url shortener related routes

Route::get('/url_shortener', [UrlController::class, 'index'])->name('shortener_home');
Route::post('/shortened', [UrlController::class, 'shorten'])->name('shorten');
Route::get('/{code}', [UrlController::class, 'redirect'])->name('redirect');


Route::fallback( function (){
    return redirect()->route('welcome');
});





