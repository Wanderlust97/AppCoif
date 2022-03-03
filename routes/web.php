<?php

use App\Http\Controllers\reservationController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', [viewController::class, 'accueil']);

Route::get('/inscription-salon', [viewController::class, 'inscriptionSalon']);

Route::get('/connexion', [viewController::class, 'connexion']);

Route::get('/contact', [viewController::class, 'contact']);

Route::get('/inscription-compte', [viewController::class, 'inscriptionCompte']);

Route::get('/reservations', [reservationController::class, 'reservations']);
