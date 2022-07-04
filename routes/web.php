<?php

use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\AdminKepegawaianController;
use App\Http\Controllers\AdminKesiswaanController;
use App\Http\Controllers\AdminKurikulumController;
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
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->name('home');

// sdm
// Route::get('/SDM/data-pegawai', function () {
//     return view('sdm.data-pegawai');
// })->name('data-pegawai');
Route::get('/SDM/tambah-pegawai', function () {
    return view('sdm.tambah-pegawai');
})->name('tambah-pegawai');
Route::post('/SDM/tambah-pegawai', [AdminKepegawaianController::class, 'createDataPegawai'])->name('tambah-pegawai');
Route::get('/SDM/data-pegawai', [AdminKepegawaianController::class, 'showDataPegawai'])->name('data-pegawai');

// kelas
// Route::get('/kelas/data-kelas', function () {
//     return view('kelas.data-kelas');
// })->name('data-kelas');
Route::get('/kelas/tambah-kelas', function () {
    return view('kelas.tambah-kelas');
})->name('tambah-kelas');
Route::get('/kelas/data-kelas/detail', function () {
    return view('kelas.detail-kelas');
})->name('detail-kelas');
Route::get('/kelas/tambah-kelas', [AdminKurikulumController::class, 'kelas'])->name('tambah-kelas');
Route::post('/kelas/tambah-kelas', [AdminKurikulumController::class, 'createKelas'])->name('tambah-kelas');
Route::get('/kelas/data-kelas', [AdminKurikulumController::class, 'showKelas'])->name('data-kelas');

// mapel
// Route::get('/mapel/data-mapel', function () {
//     return view('mapel.data-mapel');
// })->name('data-mapel');
Route::get('/mapel/tambah-mapel', function () {
    return view('mapel.tambah-mapel');
})->name('tambah-mapel');
Route::get('/mapel/data-mapel/detail', function () {
    return view('mapel.detail-mapel');
})->name('detail-mapel');
Route::get('/mapel/plotting-mapel', function () {
    return view('mapel.plotting-mapel');
})->name('plotting-mapel');


Route::get('/mapel/plotting-mapel', [AdminKurikulumController::class, 'plotting'])->name('plotting-mapel');
Route::post('/mapel/tambah-mapel', [AdminKurikulumController::class, 'createMataPelajaran'])->name('tambah-mapel');
Route::post('/mapel/plotting-mapel', [AdminKurikulumController::class, 'createPlottingPelajaran'])->name('plotting-mapel');
Route::get('/mapel/data-mapel',[AdminKurikulumController::class, 'showMapel'])->name('data-mapel');

// siswa
// Route::get('/siswa/data-siswa', function () {
//     return view('siswa.data-siswa');
// })->name('data-siswa');
Route::get('/siswa/tambah-siswa', function () {
    return view('siswa.tambah-siswa');
})->name('tambah-siswa');
Route::post('/siswa/tambah-siswa', [AdminKesiswaanController::class, 'createDataSiswa'])->name('tambah-siswa');
Route::get('/siswa/data-siswa', [AdminKesiswaanController::class, 'showDataSiswa'])->name('data-siswa');

// penilaian
Route::get('/penilaian', function () {
    return view('penilaian.penilaian');
})->name('penilaian');

// raport
Route::get('/raport/data-raport', function () {
    return view('raport.data-raport');
})->name('data-raport');
Route::get('/raport/verifikasi-raport', function () {
    return view('raport.verifikasi-raport');
})->name('verifikasi-raport');
Route::get('/raport/verifikasi-raport/deskripsi', function () {
    return view('raport.deskripsi-raport');
})->name('deskripsi-raport');
