<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Directeur\LoginController as DirecteurLoginController;
use App\Http\Controllers\Formateur\LoginController as FormateurLoginController;
use App\Http\Controllers\Formateur\HomeController as FormateurHomeController;
use App\Http\Controllers\Formateur\RemplirInfo as FormateurRemlirInfo;
use App\Http\Controllers\Directeur\HomeController as DirecteurHomeController;
use App\Http\Controllers\Directeur\ProfileController as DirecteurProfileController;
use App\Http\Controllers\Directeur\GestionController;
use App\Http\Controllers\FiliereApiController;
use App\Http\Controllers\GroupeApiController;
//use App\Http\Controllers\Formateur\remplirInfo;

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




Route::get('/api/filieres/{formateurId}', [FiliereApiController::class, 'getFilieres']);
Route::get('/api/groupes/{filiereId}', [GroupeApiController::class, 'getGroupes']);


Route::prefix('directeur')->group(function () {
    Route::get('/login', [DirecteurLoginController::class, 'showLoginForm'])->name('directeur.login');
    Route::post('/login', [DirecteurLoginController::class, 'login']);
    Route::get('/home', [DirecteurHomeController::class, 'index'])->name('directeur.home');
    Route::get('/calender', [GestionController::class, 'gestion'])->name('directeur.callender');
    Route::get('/events/create', [GestionController::class, 'showEventForm'])->name('events.create_form');
    Route::post('/events/store', [GestionController::class, 'storeEvent'])->name('events.store');
    Route::get('/events/{event}/edit', [GestionController::class, 'editEvent'])->name('events.edit');
    Route::put('/events/{event}', [GestionController::class, 'updateEvent'])->name('events.update');
    Route::get('/profile', [DirecteurProfileController::class, 'showProfile'])->name('directeur.profile');
    Route::put('/directeur/update-password', [DirecteurProfileController::class, 'updatePassword'])->name('directeur.update-password'); 
    Route::put('/profile/{directeur}', [DirecteurProfileController::class, 'update'])->name('update-profile');
    Route::post('/logout', [DirecteurLoginController::class, 'logout']);
});

Route::prefix('formateur')->group(function () {
    Route::get('/login', [FormateurLoginController::class, 'showLoginForm'])->name('formateur.login');
    Route::post('/login', [FormateurLoginController::class, 'login']);
    Route::get('/home', [FormateurHomeController::class, 'index'])->name('formateur.home');
    //Route::get('/message', [FormateurHomeController::class, 'verifierStage'])->name('formateur.message'); 
    Route::get('/formulaire', [FormateurRemlirInfo::class, 'remplir'])->name('formateur.formulaire'); 
    Route::post('/logout', [FormateurLoginController::class, 'logout']);
    // ... autres routes du formateur
});
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

