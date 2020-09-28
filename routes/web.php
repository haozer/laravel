<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

// Home
Route::get('/', function () {
    return view('welcome');
});

// index
Route::get('/pizzas', [PizzaController::class, 'index']);

// create
Route::get('/pizzas/create', [PizzaController::class, 'create']);

// store
Route::post('/pizzas', [PizzaController::class, 'store']);

// show
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);