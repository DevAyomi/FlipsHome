<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


//Contact Routes
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-frm', [ContactController::class, 'store'])->name('contact-frm');

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/gallery', function () {
    return view('gallery');
});

