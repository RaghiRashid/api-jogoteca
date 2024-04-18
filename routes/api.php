<?php

use App\Http\Controllers\Api\JogotecaController;
use App\Http\Controllers\Api\ProducersController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request)
{
    return $request->user();
});

Route::middleware(['jwt.verify'])->group(function ()
{
    Route::apiResource('/producers', ProducersController::class);

    Route::apiResource('/jogoteca', JogotecaController::class);

    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
});

Route::post('auth/login', 'App\Http\Controllers\Api\AuthController@login')->name('login');
