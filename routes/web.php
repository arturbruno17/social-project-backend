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

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/admin', function () {
    return view('/admin');
});

Route::get('/suporte', function () {
    return view('/support');
});

Route::delete('news/{id}', [NoticiasController::class, 'destroy']);
Route::post('news', [NoticiasController::class, 'store']);
Route::get('news/{id}', [NoticiasController::class, 'show']);

