<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('home', function () {
//     return view('home');
// });

Route::middleware(['auth'])->group(function(){
    
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/upload', [UploadController::class, 'update'])->name('upload');
Route::get('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');
Route::post('/upload/resize', [UploadController::class, 'resize_upload'])->name('upload.resize');
Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');
Route::get('/pdf_upload', [UploadController::class, 'pdf_upload'])->name('pdf.upload');
Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');
        
Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
        Route::resource('pendidikan', 'PendidikanController');
        Route::resource('pengalaman_kerja', 'PengalamanKerjaController');   
    }
);

Route::get('/session/create', [SessionController::class, 'create']);
Route::get('/session/show', [SessionController::class, 'show']);
Route::get('/session/delete', [SessionController::class, 'delete']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/cobaeror/{nama}', [CobaController::class, 'index']);

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');
Route::get('/dropzone', [UploadController::class, 'dropzone']);
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');
Route::get('/pdf_upload', [UploadController::class, 'pdf_upload']);
Route::post('pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');
        

   