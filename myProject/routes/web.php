<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\PurchaseController;  
use App\Http\Controllers\ReportController;  

/*  
|--------------------------------------------------------------------------  
| Web Routes  
|--------------------------------------------------------------------------  
|  
| Di sinilah Anda dapat mendaftarkan route untuk aplikasi Anda. Route  
| ini dimuat oleh RouteServiceProvider dalam group yang berisi  
| "web" middleware. Silakan membuat sesuatu yang hebat!  
|  
*/  

Route::get('/', function () {  
    return view('welcome');  
});  

// Route menampilkan form input transaksi  
Route::get('/purchases/create', [PurchaseController::class, 'create'])->name('purchases.create');  

// Route menyimpan data transaksi  
Route::post('/purchases', [PurchaseController::class, 'store'])->name('purchases.store');  

// Route menampilkan halaman report  
Route::get('/report', [ReportController::class, 'index'])->name('report.index');  

// Route penyedia data untuk DataTables (server-side)  
Route::get('/report/data', [ReportController::class, 'data'])->name('report.data');