<?php

use App\Models\isiContent;
use App\Http\Controllers\Editprofil;
use App\Http\Controllers\Landingpage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Editpassword;
use App\Http\Controllers\Eventcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SertifController;
use GuzzleHttp\Middleware;

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

//root landingpage BED
Route::get('/', [Landingpage::class, 'index']);

// event BED
Route::get('/event', [Eventcontroller::class, 'index'])->name('event');


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


//edit profil
Route::get('/profil/edit', [Editprofil::class, 'edit'])->name('profile.edit');
Route::put('/profil/update', [Editprofil::class, 'update'])->name('profile.update');

//edit password
Route::get('/password/edit', [Editpassword::class, 'edit'])->name('password.edit');
Route::put('/password/update', [Editpassword::class, 'update'])->name('password.update');


Route::get('ticykit/koleksi', [ContentController::class, 'index']);
Route::get('ticykit/koleksi/search', [ContentController::class, 'search'])->name('content.search');

//halaman single post
Route::get('ticykit/koleksi/{isiContent:slug}', [ContentController::class, 'show']);




//rute filter
Route::get('/content/filter', [ContentController::class, 'filter'])->name('content.filter');


//rute download

Route::get('/download/{id}', [ContentController::class, 'download'])->middleware('auth')->name('content.download');


//landing page
Route::get('/ticykit', [Landingpage::class, 'indexticykit'])->name('Landingpage');



//halaman event
// Route::get('/event', [Eventcontroller::class, 'index'])->name('event');

Route::get('/sertifikat/download/{id}', [SertifController::class, 'generate'])->name('sertif.download');
Route::get('/sertifikat/download2/{id}', [SertifController::class, 'generate2'])->name('sertif.download2');
Route::get('/sertifikat/download3/{id}', [SertifController::class, 'generate3'])->name('sertif.download3');
Route::get('/sertifikat/download1revisi/{id}', [SertifController::class, 'generate1revisi'])->name('sertif.download1revisi');

//halaman single event
Route::get('/event/{isiEvent:slug}', [Eventcontroller::class, 'show'])->name('isiEvent');



















//search sertif
Route::get('/sertifikat/16-19Oktober2023/search', [SertifController::class, 'search']);
Route::get('/sertifikat/7-9November/search', [SertifController::class, 'search2']);
Route::get('/sertifikat/9-11November/search', [SertifController::class, 'search3']);
Route::get('/sertifikat/1-4November2023Revisi/search', [SertifController::class, 'search1rev']);

//Show abjad sertif
Route::get('/sertifikat/16-19Oktober2023', [SertifController::class, 'showabjad'])->name('showabjad');


//generate sertif
Route::get('/event/sertif/1-4November2023', [SertifController::class, 'showsertif'])->name('eventsertif');
Route::get('/event/sertif/7-9November2023', [SertifController::class, 'showsertif2'])->name('eventsertif7-9nov');
Route::get('/event/sertif/9-11November2023', [SertifController::class, 'showsertif3'])->name('eventsertif9-22nov');
Route::get('/event/sertif/1-4November2023Revisi', [SertifController::class, 'showsertif1revisi'])->name('eventsertif1revisi');

