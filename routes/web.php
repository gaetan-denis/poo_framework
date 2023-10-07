<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * Vue pour la page d'accueil
 */
Route::get('/', [HomeController::class,'index'])->name('home');
/**
 * Route pour la page Liste des cours
 */
Route::get('/cursus', [CursusController::class,'index'])->name('cursus');
/**
 * Route pour la page Profil
 */
Route::get('/profile', [ProfileController::class,'index'])->name('profile');
/**
 * Route pour la page Admin
 */
Route::get('/admin', [AdminController::class,'index'])->name('admin');
/**
 * Route pour la page Connexion
 */
Route::get('/login', [LoginController::class,'index'])->name('login');

