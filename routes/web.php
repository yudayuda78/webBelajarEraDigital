<?php

use Illuminate\Support\Facades\Route;
use App\Models\isiContent;

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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});




Route::get('/beranda', function () {
       
    return view('beranda', [
        "isiContent" => isiContent::all()

    ]);
});


//halaman single post
Route::get('konten/{slug}', function($slug) {

    return view('konten', [
        "content" => isiContent::find($slug)
    ]);
});
