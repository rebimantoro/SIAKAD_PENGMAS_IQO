<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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
    return view('auth.login');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
});

// sdm
Route::get('/SDM/data-pegawai', function () {
    return view('sdm.data-pegawai');
});
Route::get('/SDM/tambah-pegawai', function () {
    return view('sdm.tambah-pegawai');
});

// kelas
Route::get('/kelas/data-kelas', function () {
    return view('kelas.data-kelas');
});
Route::get('/kelas/tambah-kelas', function () {
    return view('kelas.tambah-kelas');
});
Route::get('/kelas/data-kelas/detail', function () {
    return view('kelas.detail-kelas');
});

// mapel
Route::get('/mapel/data-mapel', function () {
    return view('mapel.data-mapel');
});
Route::get('/mapel/tambah-mapel', function () {
    return view('mapel.tambah-mapel');
});
Route::get('/mapel/data-mapel/detail', function () {
    return view('mapel.detail-mapel');
});
Route::get('/mapel/plotting-mapel', function () {
    return view('mapel.plotting-mapel');
});

// siswa
Route::get('/siswa/data-siswa', function () {
    return view('siswa.data-siswa');
});
Route::get('/siswa/tambah-siswa', function () {
    return view('siswa.tambah-siswa');
});

// penilaian
Route::get('/penilaian', function () {
    return view('penilaian.penilaian');
});

// raport
Route::get('/raport/data-raport', function () {
    return view('raport.data-raport');
});
Route::get('/raport/verifikasi-raport', function () {
    return view('raport.verifikasi-raport');
});
Route::get('/raport/verifikasi-raport/deskripsi', function () {
    return view('raport.deskripsi-raport');
});
