<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa']);
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/siswa/{siswa_id}', [SiswaController::class, 'show']);
Route::get('/siswa/{siswa_id}/edit', [SiswaController::class, 'Edit']);
Route::get('/siswa/{siswa_id}', [SiswaController::class, 'Update']);
Route::delete('/siswa/{siswa_id}',[SiswaController::class,'destroy']);
