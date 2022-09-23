<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('test', TestController::class);
Route::post('state', [HomeController::class, 'state']);
Route::post('city', [HomeController::class, 'city']);

Route::post('value', function (Request $request) {
    dd($request->all());
});
