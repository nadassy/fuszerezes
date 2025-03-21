<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpiceController;
use App\Http\Controllers\PostController;

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

Route::resource('spices', SpiceController::class);
Route::resource('posts', PostController::class);

Route::get('/spices/create', [SpiceController::class, 'create']);



