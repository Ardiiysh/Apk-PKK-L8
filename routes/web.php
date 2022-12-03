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
use App\Http\Controllers\DataHatinyaController;
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
use App\Http\Controllers\KelompokBelajarController;
use App\Http\Controllers\DataKejarController;
use App\Http\Controllers\DataKelompokBelajarController;
use App\Http\Controllers\DataKeluargaController;

use App\Http\Controllers\DataIndustriRumahTanggaController;
use App\Http\Controllers\RekapitulasiKelompokPkkRtController;
use App\Http\Controllers\RekapitulasiKelahiranKematianController;
use App\Http\Controllers\RekapitulasiKelompokDasawismaController;
use App\Http\Controllers\LayananPosyanduController;
use App\Http\Controllers\PelatihanKaderController;
use App\Http\Controllers\DataLayananPosyanduController;
use App\Http\Controllers\DataPosyanduController;
use App\Http\Controllers\DataKoperasiController;
use App\Http\Controllers\DataPenyuluhanController;
use App\Http\Controllers\HatinyaPkkController;
use App\Http\Controllers\DataHatinyaPkkController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/dashboard1', function () {
    return view('layouts.layout');
});

//route dashboard user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::middleware(['auth', 'Admin'])->group(function () { // Route middleware
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    //route dashboard admin
    Route::get('/', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin');

    //route user
    Route::resource('dataUser', UserController::class);
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
    //route KelompokBelajarController
    Route::resource('kelompokBelajars', KelompokBelajarController::class);
    //route DataKejar
    Route::resource('dataKejars', DataKejarController::class);
    //route DataKelompokBelajarController
    Route::resource('dataKelompokBelajars', DataKelompokBelajarController::class);
    //route DataKeluargaController
    Route::resource('dataKeluargas', DataKeluargaController::class);
    //route DataAset
    Route::resource('dataAsets', DataAsetController::class);
    //route LayananPosyanduController
    Route::resource('layananPosyandus', LayananPosyanduController::class);
    //route pelatihanKaders
    Route::resource('pelatihanKaders', PelatihanKaderController::class);
    //route DataHatinyaController
    Route::resource('dataHatinyas', DataHatinyaController::class);
    //route dataLayananPosyandu
    Route::resource('dataLayananPosyandus', DataLayananPosyanduController::class);
    //route dataPosyandu
    Route::resource('dataPosyandus', DataPosyanduController::class);
    //route DataKoperasi
    Route::resource('dataKoperasis', DataKoperasiController::class);
    //route dataPenyuluhan
    Route::resource('dataPenyuluhans', DataPenyuluhanController::class);
    //route HatinyaPkkController
    Route::resource('hatinyaPkks', HatinyaPkkController::class);
    //route dataHatinyaPkks
    Route::resource('dataHatinyaPkks', DataHatinyaPkkController::class);




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
    //route kelompokBelajar
    Route::get('kelompokBelajar', [KelompokBelajarController::class, 'export_excel'])->name('kelompokBelajar.export_excel');
    //route dataKejar
    Route::get('dataKejar', [DataKejarController::class, 'export_excel'])->name('dataKejar.export_excel');
    //route kelompokBelajar
    Route::get('dataKelompokBelajar', [DataKelompokBelajarController::class, 'export_excel'])->name('dataKelompokBelajar.export_excel');
    //route dataKeluargas
    Route::get('dataKeluarga', [DataKeluargaController::class, 'export_excel'])->name('dataKeluarga.export_excel');
    //route dataAsets
    Route::get('dataAset', [DataAsetController::class, 'export_excel'])->name('dataAset.export_excel');
    //route dataAsets
    Route::get('layananPosyandu', [LayananPosyanduController::class, 'export_excel'])->name('layananPosyandu.export_excel');
    //route pelatihanKaders
    Route::get('pelatihanKader', [PelatihanKaderController::class, 'export_excel'])->name('pelatihanKader.export_excel');
    //route dataHatinyas
    Route::get('dataHatinya', [DataHatinyaController::class, 'export_excel'])->name('dataHatinya.export_excel');
    //route dataLayananPosyandu
    Route::get('dataLayananPosyandu', [DataLayananPosyanduController::class, 'export_excel'])->name('dataLayananPosyandu.export_excel');
    //route dataPosyandu
    Route::get('dataPosyandu', [DataPosyanduController::class, 'export_excel'])->name('dataPosyandu.export_excel');
    //route DataKoperasi
    Route::get('dataKoperasi', [DataKoperasiController::class, 'export_excel'])->name('dataKoperasi.export_excel');
    //route dataPenyuluhan
    Route::get('dataPenyuluhan', [DataPenyuluhanController::class, 'export_excel'])->name('dataPenyuluhan.export_excel');
    //route hatinyaPkks
    Route::get('hatinyaPkk', [HatinyaPkkController::class, 'export_excel'])->name('hatinyaPkk.export_excel');
    //route dataHatinyaPkk
    Route::get('dataHatinyaPkk', [DataHatinyaPkkController::class, 'export_excel'])->name('dataHatinyaPkk.export_excel');
    //route data user
    Route::get('dataUsers', [UserController::class, 'export_excel'])->name('dataUsers.export_excel');
// Route Export PDF
    // route bulu
    Route::get('buku-pdf', [BukuController::class, 'export_pdf']);
});








