<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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


// ROOT
Route::get('/', [PagesController::class, 'home']);

// CRUD
Route::get('/daftarbuku', [PagesController::class, 'index']);
Route::get('/daftarbuku/create', [PagesController::class, 'create']);
Route::post('daftarbuku/', [PagesController::class, 'store']);
Route::delete('/daftarbuku/{buku}', [PagesController::class, 'destroy']);
Route::get('/daftarbuku/{buku}/edit', [PagesController::class, 'edit']);
Route::patch('/daftarbuku/{buku}', [PagesController::class, 'update']);


Route::get('/daftarbuku/novel', [PagesController::class, 'novel']);
Route::get('/daftarbuku/komik', [PagesController::class, 'komik']);
Route::get('/daftarbuku/biografi', [PagesController::class, 'biografi']);
Route::get('/daftarbuku/kamus', [PagesController::class, 'kamus']);
Route::get('/daftarbuku/ensiklopedia', [PagesController::class, 'ensiklopedia']);
Route::get('/daftarbuku/dongeng', [PagesController::class, 'dongeng']);


// DASHBOARD
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
