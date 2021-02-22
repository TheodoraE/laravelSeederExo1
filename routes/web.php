<?php

use App\Http\Controllers\PeopleController;
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

// Créer un nouveau projet laravel_seeder_exo_1
// Créer une nouvelle DB
// Créer une page avec 4 personnes générés par des seeder, ont peut les show puis les delete ou les editer puis update
// nom
// age
// email
// telephone
// on doit pouvoir supprimer toutes les données de la table grâce a un bouton


Route::get('/', [PeopleController::class, 'index']);
Route::get('/show-people/{id}', [PeopleController::class, 'show']);
Route::get('/edit-people/{id}', [PeopleController::class, 'edit']);

Route::post('/update-people/{id}', [PeopleController::class, 'update']);
Route::post('/destroy-people/{id}', [PeopleController::class], 'destroy');
Route::post('/destroyALL', [PeopleController::class, 'destroyALL']);