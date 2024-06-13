<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProgramStudiController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('second');
});
//route resource
// Route::resource('/post', \App\Http\Controllers\ProgramStudiController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/PS', [App\Http\Controllers\ProgramStudiController::class, 'index'])->name('programstudi');
