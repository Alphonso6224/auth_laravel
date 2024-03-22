<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return "Hello ! Welcome to laravel (Je suis Donald)" .app()->version();
});

// Routes ne nécessitant pas que l'utilisateur soit authentifier

/**
 * route d'inscription
 * route de connexion
 * route de réinitialisation du mot de passe
 */

 /** Affiche le formulaire d'inscription */
 Route::get("register", [RegisterController::class, 'create']);