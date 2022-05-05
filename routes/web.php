<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;
Route::get('/', function () {
    return redirect('/home');
});
Route::view("/home", "login");
Route::post("login", [UsersController::class, 'getProfile']);
Route::view("/cadastro", "cadastro");
Route::post("register", [UsersController::class, 'registerProfile']);
Route::post("abaPokemons", [UsersController::class, 'pokemonMenu']);
Route::post("addPokemonToTrainer", [UsersController::class, 'addPokemonToTrainer']);