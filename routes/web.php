<?php

use App\Http\Controllers\RayonController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DasawismaController;
use App\Http\Controllers\CatatanDiesnatalisController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
