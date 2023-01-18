<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('index');
});


Route::get('/kementrian', function () {
    return view('kementrian');
});
Route::get('/earthday', function () {
    return view('earthday');
});


Route::get('/olahraga', function () {
    return view('olahraga');
});

Route::get('/nationfest', function () {
    return view('eventnationfest');
});

Route::get('/kemenlu', function () {
    return view('kementrian-luar-negeri');
});

Route::get('/ufest', function () {
    return view('ufest');
});

Route::get('/PSDM', function () {
    return view('PSDM');
});

Route::get('/kominfo', function () {
    return view('kominfo');
});

Route::get('/dagri', function () {
    return view('dalam-negeri');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});

Route::get('/nasionalisme', function () {
    return view('nasionalisme');
});

Route::get('/kerohanian', function () {
    return view('kerohanian');
});

Route::get('/senbud', function () {
    return view('senbud');
});

Route::get('/evetdummy', function () {
    return view('event-dummy');
});
Route::get('/event', function () {
    return view('event');
});


Route::get('/sospengmas', function () {
    return view('sospengmas');
});
Route::get('/kalendar', function () {
    return view('kalendar');
});

Route::get('/sekre', function () {
    return view('sekretaris');
});


Route::get('/kabinet', function () {
    return view('kabinet');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/eventuel', function () {
    return view('eventUEL');
});

Route::get('/eventug', function () {
    return view('eventUG');
});

Route::get('/eventecc', function () {
    return view('eventECC');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
