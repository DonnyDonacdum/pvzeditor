<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adventure;
use App\Http\Controllers\zombie;

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
    return view('Main');
});

Route::resource('/Adventure',Adventure::class);
Route::resource('/Zombie',Zombie::class);
