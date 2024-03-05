<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Directeur\LoginController as DirecteurLoginController;
use App\Http\Controllers\Formateur\LoginController as FormateurLoginController;
use App\Http\Controllers\Formateur\HomeController as FormateurHomeController;
use App\Http\Controllers\Directeur\HomeController as DirecteurHomeController;



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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('directeur')->group(function () {
    Route::get('/login', [DirecteurLoginController::class, 'showLoginForm'])->name('directeur.login');
    Route::post('/login', [DirecteurLoginController::class, 'login']);
    Route::get('/home', [DirecteurHomeController::class, 'index'])->name('directeur.home');
    Route::post('/logout', [DirecteurLoginController::class, 'logout']);
    // ... autres routes du directeur
});

Route::prefix('formateur')->group(function () {
    Route::get('/login', [FormateurLoginController::class, 'showLoginForm'])->name('formateur.login');
    Route::post('/login', [FormateurLoginController::class, 'login']);
    Route::get('/home', [FormateurHomeController::class, 'index'])->name('formateur.home');
    Route::post('/logout', [FormateurLoginController::class, 'logout']);
    // ... autres routes du formateur
});
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

