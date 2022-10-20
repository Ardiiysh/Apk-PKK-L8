<?php

// use App\Http\Controllers\RayonController;
use App\Models\Dasawisma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AsetDesaController;
use App\Http\Controllers\DataAsetController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\DasawismaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PenyuluhanController;
use App\Http\Controllers\DataAsetDesaController;
use App\Http\Controllers\DataIndustriController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KegiatanWargaController;
use App\Http\Controllers\CatatanKeluargaController;
use App\Http\Controllers\BukuPerpustakaanController;
use App\Http\Controllers\CatatanDiesnatalisController;
use App\Http\Controllers\IndustriRumahTanggaController;
use App\Http\Controllers\CatatanKeluargaWargaController;
use App\Http\Controllers\RekaptilulasiLahirMatiController;
use App\Http\Controllers\DataIndustriRumahTanggaController;

use App\Http\Controllers\RekapitulasiKelompokPkkRtController;
use App\Http\Controllers\RekapitulasiKelahiranKematianController;
use App\Http\Controllers\RekapitulasiKelompokDasawismaController;

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
// Route::resource('rayons', RayonController::class);
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
//route asetDesas
Route::resource('asetDesas', AsetDesaController::class);
//route dataAsetDesas
Route::resource('dataAsetDesas', DataAsetDesaController::class);
//route industriRumahTanggas
Route::resource('industriRumahTanggas', IndustriRumahTanggaController::class);
//route industriRumahTanggas
Route::resource('dataIndustriRumahTanggas', DataIndustriRumahTanggaController::class);
//route industriRumahTanggas
Route::resource('perpustakaans', PerpustakaanController::class);
//route industriRumahTanggas
Route::resource('rekapitulasiKelahiranKematians', RekapitulasiKelahiranKematianController::class);
//route catatanKeluargas
Route::resource('catatanKeluargas', CatatanKeluargaController::class);
//route rekaptilulasiLahirMatis
Route::resource('rekaptilulasiLahirMatis', RekaptilulasiLahirMatiController::class);
//route catatanKeluargaWargas
Route::resource('catatanKeluargaWargas', CatatanKeluargaWargaController::class);
//route dataAsets
Route::resource('dataAsets', DataAsetController::class);



//Route Export Excel
//route export excel buku
Route::get('buku', [BukuController::class, 'export_excel'])->name('buku.export_excel');
//route export excel bukuPerpustakaans
Route::get('bukuPerpustakaan', [BukuPerpustakaanController::class, 'export_excel'])->name('bukuPerpustakaan.export_excel');
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
//route Koperasi
Route::get('asetDesa', [AsetDesaController::class, 'export_excel'])->name('asetDesa.export_excel');
//route asetDesa
Route::get('dataAsetDesa', [DataAsetDesaController::class, 'export_excel'])->name('dataAsetDesa.export_excel');
//route asetDesa
Route::get('industriRumahTangga', [IndustriRumahTanggaController::class, 'export_excel'])->name('industriRumahTangga.export_excel');
//route asetDesa
Route::get('dataIndustriRumahTangga', [DataIndustriRumahTanggaController::class, 'export_excel'])->name('dataIndustriRumahTangga.export_excel');
//route perpustakaan
Route::get('perpustakaan', [PerpustakaanController::class, 'export_excel'])->name('perpustakaan.export_excel');
//route rekapitulasiKelahiranKematian
Route::get('rekapitulasiKelahiranKematian', [RekapitulasiKelahiranKematianController::class, 'export_excel'])->name('rekapitulasiKelahiranKematian.export_excel');
//route rekapitulasiKelahiranKematian
Route::get('catatanKeluarga', [CatatanKeluargaController::class, 'export_excel'])->name('catatanKeluarga.export_excel');
//route rekapitulasiKelahiranKematian
Route::get('rekaptilulasiLahirMati', [RekaptilulasiLahirMatiController::class, 'export_excel'])->name('rekaptilulasiLahirMati.export_excel');
//route catatanDiesnatalis
Route::get('catatanDiesnatalis', [CatatanKeluargaController::class, 'export_excel'])->name('catatanDiesnatalis.export_excel');
//route dasawisma
Route::get('dasawisma', [DasawismaController::class, 'export_excel'])->name('dasawisma.export_excel');
//route penyuluhan
Route::get('penyuluhan', [PenyuluhanController::class, 'export_excel'])->name('penyuluhan.export_excel');
//route catatanKeluargaWarga
Route::get('catatanKeluargaWarga', [CatatanKeluargaWargaController::class, 'export_excel'])->name('catatanKeluargaWarga.export_excel');
//route dataAset
Route::get('dataAset', [DataAsetController::class, 'export_excel'])->name('dataAset.export_excel');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
