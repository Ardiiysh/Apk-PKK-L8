<?php

use App\Http\Controllers\RayonController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DasawismaController;
use App\Http\Controllers\CatatanDiesnatalisController;
use App\Http\Controllers\BukuPerpustakaanController;
use App\Http\Controllers\PenyuluhanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\DataIndustriController;
use App\Http\Controllers\KegiatanWargaController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\RekapitulasiKelompokDasawismaController;
use App\Http\Controllers\RekapitulasiKelompokPkkRtController;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

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
  

Route::get('/dashboard', function () {
    return view('dashboard.index');
    
});
 
Route::get('/dashboard1', function () {
    return view('layouts.layout');
    
});


//route rayon
Route::resource('rayons', RayonController::class);
//routebuku
Route::resource('bukus', BukuController::class);
// route dasawisma
Route::resource('dasawismas', DasawismaController::class);
//route catatanDiesnatalis
Route::resource('catatanDiesnataliss', CatatanDiesnatalisController::class);
//route bukuPerpustakaan
Route::resource('bukuPerpustakaans', BukuPerpustakaanController::class);
//route Penyuluhan
Route::resource('penyuluhans', PenyuluhanController::class);
//route Pelatihan
Route::resource('pelatihans', PelatihanController::class);
//route Pelatihan
Route::resource('dataIndustris', DataIndustriController::class);
//route Kegiatan Warga
Route::resource('kegiatanWargas', KegiatanWargaController::class);
//route Warga
Route::resource('wargas', WargaController::class);
//route Rekapitulasi Kelompok dasawisma
Route::resource('rekapitulasiKelompokDasawismas', RekapitulasiKelompokDasawismaController::class);
//route Rekapitulasi Kelompok Pkk Rt
Route::resource('rekapitulasiKelompokPkkRts', RekapitulasiKelompokPkkRtController::class);
//route Koperasi
Route::resource('koperasis', KoperasiController::class);

//Route Export Excel
//route export excel buku
Route::get('buku', [BukuController::class, 'export_excel'])->name('buku.export_excel');
//route export excel pelatihan
Route::get('pelatihan', [PelatihanController::class, 'export_excel'])->name('pelatihan.export_excel');
//route export excel Data Industri
Route::get('dataIndustri', [DataIndustriController::class, 'export_excel'])->name('dataIndustri.export_excel');
//route export excel Kegitan Warga
Route::get('kegiatanWarga', [KegiatanWargaController::class, 'export_excel'])->name('kegiatanWarga.export_excel');
//route export excel  Warga
Route::get('warga', [WargaController::class, 'export_excel'])->name('warga.export_excel');
//route Rekapitulasi Kelompok dasawisma
Route::get('rekapitulasiKelompokDasawisma', [RekapitulasiKelompokDasawismaController::class, 'export_excel'])->name('rekapitulasiKelompokDasawisma.export_excel');
//route Rekapitulasi Kelompok Pkk Rt
Route::get('rekapitulasiKelompokPkkRt', [RekapitulasiKelompokPkkRtController::class, 'export_excel'])->name('rekapitulasiKelompokPkkRt.export_excel');
//route Koperasi
Route::get('koperasi', [KoperasiController::class, 'export_excel'])->name('koperasi.export_excel');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
