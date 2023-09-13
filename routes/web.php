<?php

use App\Models\isiContent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\editprofil;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [ContentController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');




Route::get('/beranda', [ContentController::class, 'index'])->middleware('guest');


//halaman single post
Route::get('/konten/{isiContent:slug}', [ContentController::class, 'show']);




//rute filter
Route::get('/content/filter', [ContentController::class, 'filter'])->name('content.filter');


//rute download
Route::get('/download/{id}', [ContentController::class, 'download'])->name('content.download');

//edit profil
Route::get('/profil/edit', [editprofil::class, 'edit'])->name('profile.edit');
Route::put('/profil/update', [editprofil::class, 'update'])->name('profile.update');



