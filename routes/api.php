<?php

use App\Http\Controllers\SalahController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('salahs', 'SalahController')->except(['create','edit']);
// Route::resource('salahs', SalahController::class, ['except' => ['create', 'edit']]);
Route::resource('salahs', SalahController::class)->except(['create','edit']);
