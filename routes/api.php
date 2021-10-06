<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalityController;

use App\Http\Controllers\Admin\HomeController;

Route::get('/ping', function() {
    return ['pong' => true];
});

Route::get('/401', [AuthController::class, 'unauthorized'])->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/refresh', [AuthController::class, 'refresh']);
Route::post('/auth/validate', [AuthController::class, 'validateToken']);
Route::post('/user', [AuthController::class, 'create']);

Route::get('/user', [UserController::class, 'read']);
Route::put('/user', [UserController::class, 'update']);
Route::post('/esqueci', [UserController::class, 'esqueci']);
Route::get('/user/favorites', [UserController::class, 'getFavorites']);
Route::post('/user/favorite', [UserController::class, 'addFavorite']);
Route::get('/user/appointments', [UserController::class, 'getAppointments']);

Route::post('/locality', [LocalityController::class, 'create']);

Route::get('/localitys', [LocalityController::class, 'list']);
Route::get('/locality/{id}', [LocalityController::class, 'one']);
Route::post('/locality/{id}/appointment', [LocalityController::class, 'setAppointment']);

Route::get('/search', [LocalityController::class, 'search']);
Route::post('/user/delappointments/{id}', [UserController::class ,'delappointments']);
//FRONTEND
Route::get('/flocality/{id}', [LocalityController::class, 'locality']);
Route::get('/fcheckuseryes/{id}', [LocalityController::class, 'fcheckuseryes']);
Route::get('/fcheckuserno/{id}', [LocalityController::class, 'fcheckuserno']);

Route::get('/adv', [HomeController::class, 'adv']);
