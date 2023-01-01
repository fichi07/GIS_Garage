<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\TransaksiHomeController;
use App\Http\Controllers\Dashboard\TokoController;
use App\Http\Controllers\Dashboard\TitikController;
use App\Http\Controllers\Dashboard\StatusController;
use App\Http\Controllers\Dashboard\LayananController;
use App\Http\Controllers\Dashboard\TransaksiController;
use App\Models\Titik;

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

// belum login


// seluruh titik 
Route::get('/', [PetaController::class, 'index'])->name('peta.index');
Route::get('/peta/{peta}', [PetaController::class, 'show'])->name('peta.show');

//authenticate & authorization
Auth::routes();

// udah login banget banget
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/dashboard/status', StatusController::class)->middleware('admin');
    Route::resource('/dashboard/titik', TitikController::class)->only(['index','show']);
    Route::resource('/dashboard/toko', TokoController::class)->except(['show']);
});
