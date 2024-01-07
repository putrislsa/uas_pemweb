<?php

use App\Http\Controllers\KamarController;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $jumlahpegawai = Pegawai::count();

    return view('welcome', compact('jumlahpegawai'));
});

Route::group(['middleware' => ['auth', 'hakakses::admin,user']], function () {
});

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai')->middleware('auth');

Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata', [PegawaiController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [PegawaiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PegawaiController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('delete');


Route::get('/kamar', [KamarController::class, 'index'])->name('kamar')->middleware('auth');

Route::get('/tambahkamar', [KamarController::class, 'tambahkamar'])->name('tambahkamar');
Route::post('/insertdatakamar', [KamarController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [KamarController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedatakamar/{id}', [KamarController::class, 'updatedata'])->name('updatedata');

Route::get('/deletekamar/{id}', [KamarController::class, 'delete'])->name('delete');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
