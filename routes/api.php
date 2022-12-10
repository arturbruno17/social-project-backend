<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\SuporteController;

Route::POST('admin', [AdminController::class, 'store']);
Route::POST('suporte', [SuporteController::class, 'store']);