<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;

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

// User Controller Section
Route::resource('posts', UserController::class);

// Route::resource('/', UserController::class);




Route::get('copy/{waifu}', [UserController::class, 'copy']);


Route::get('count/{angka1}/{angka2}', [UserController::class, 'count']);

Route::view('basic', 'posts.basic', ['title'=>'zibran']);

Route::view('kontak', 'posts.kontak', ['nama'=>'zibran','kontak'=>'0895635729348']);

// route any



Route::get('/buset', [UserController::class, 'buset']);

Route::any('/compact', [UserController::class, 'compact']);



// END USER CONTROLLER




// -------------------------------------------------------REQUEST CONTROLLER SECTION---------------------------------------------


Route::get('/', [RequestController::class, 'index'])->name('login.index');

Route::post('/post', [RequestController::class, 'submit'])->name('login.submit');

Route::get('/kalkulator', [RequestController::class, 'kalkulator']);

Route::post('/hasil', [RequestController::class, 'hasil'])->name('kalkulator.submit');


Route::get('/dop', [RequestController::class, 'dop'])->name('dope.index');

Route::post('/hasildop', [RequestController::class, 'hasildop'])->name('dope.submit');


// -------------------------------------------------------END REQUEST CONTROLLER---------------------------------------------
