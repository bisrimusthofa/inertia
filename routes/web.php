<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::controller(HomeController::class)
    ->group(function(){
       Route::get('/', 'index');
       Route::get('/about', 'about'); 
    });

Route::controller(UserController::class)
    ->prefix('user')
    ->as('user.')
    ->group(function(){
       Route::get('/', 'index')->name('index');
       Route::get('/create', 'create')->name('create'); 
       Route::post('/', 'store')->name('store'); 
       Route::get('/{id}', 'show')->name('detail');
    });
