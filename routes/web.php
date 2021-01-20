<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;

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

Route::get('/template', function(){
    return view('layouts.app');
});

Route::post('/login', [AuthController::class, 'login']);

//Register

Route::get('/register', [AuthController::class, 'tampil_register']);
Route::post('/register', [AuthController::class, 'register_masyarakat']);
