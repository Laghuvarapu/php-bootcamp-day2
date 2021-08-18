<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'getAllUsers']);
Route::get('/user/{id}', [UserController::class, 'getUserbyId']);
Route::post('/user', [UserController::class, 'create']);
Route::delete('/user/{id}', [UserController::class, 'deleteUser']);
