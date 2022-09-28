<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AdminController;

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
    return redirect('events');
});




Auth::routes(['register'=>false]);

Route::prefix('events')->group(function(){
    Route::get('/',[EventsController::class,'index']);
});

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
