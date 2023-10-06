<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', 'HomeController@index');
// Route::get('/home', 'App\Http\Controllers\homeController@index');
Route::get('/', [HomeController::class, 'index']);
Route::get('/terms&conditions', function(){
    return view('terms_conditions');
});
