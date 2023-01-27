<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\XSS;
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
Route::group(['middleware'=>['XSS']],function(){
    Route::get('review',[\App\Http\Controllers\ReviewController::class, "index"]);
    Route::post('review',[\App\Http\Controllers\ReviewController::class, "form"]);
});

