<?php

use App\Models\isiContent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
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

Route::get('/login', [LoginController::class, 'index']);


//route register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);




Route::get('/beranda', [ContentController::class, 'index']);


//halaman single post
Route::get('/konten/{isiContent:slug}', [ContentController::class, 'show']);




//rute filter
Route::get('/content/filter', [ContentController::class, 'filter'])->name('content.filter');


//rute download
Route::get('/download/{id}', [ContentController::class, 'download'])->name('content.download');



