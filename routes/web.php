<?php

use App\Models\Pegawai;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReservationController;

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
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
});

// ->middleware('auth');

Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata', [PegawaiController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [PegawaiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PegawaiController::class, 'updatedata'])->name('updatedata');

Route::get('/datareservation', [PegawaiController::class, 'datareservation'])->name('datareservation');
// Route::get('/datareservation', [PegawaiController::class, 'datareservation'])->name('datareservation');

Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('delete');


Route::get('/kamar', [KamarController::class, 'index'])->name('kamar')->middleware('auth');

Route::get('/tambahkamar', [KamarController::class, 'tambahkamar'])->name('tambahkamar');
Route::post('/insertdatakamar', [KamarController::class, 'insertdatakamar'])->name('insertdatakamar');

Route::get('/tampilkandatakamar/{id}', [KamarController::class, 'tampilkandatakamar'])->name('tampilkandatakamar');
Route::post('/updatedatakamar/{id}', [KamarController::class, 'updatedatakamar'])->name('updatedatakamar');

Route::get('/deletekamar/{id}', [KamarController::class, 'deletekamar'])->name('deletekamar');


Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation')->middleware('auth');

Route::get('/tambahreservation', [ReservationController::class, 'tambahreservation'])->name('tambahreservation');
Route::post('/insertdatareservation', [ReservationController::class, 'insertdatareservation'])->name('insertdatareservation');

Route::get('/tampilkandatareservation/{id}', [ReservationController::class, 'tampilkandatareservation'])->name('tampilkandatareservation');
Route::post('/updatedatareservation/{id}', [ReservationController::class, 'updatedatareservation'])->name('updatedatareservation');

Route::get('/deletereservation/{id}', [ReservationController::class, 'deletereservation'])->name('deletereservation');
// Route::get('/reservation', [ReservationController::class, 'reservation'])->name('reservation');
// Route::post('/booking', [ReservationController::class, 'booking'])->name('booking');

Route::get('/tamu', [TamuController::class, 'index'])->name('tamu');
Route::get('/booking', [TamuController::class, 'booking'])->name('booking');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
