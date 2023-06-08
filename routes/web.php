<?php

use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
// Route::get('faktury', function () {
//     return view('invoices.index');
// });
// Route::get('faktury/dodaj', function () {
//     return view('invoices.create');
// });
Route::get('/faktury', [InvoicesController::class, 'index']);
Route::get('/faktury/dodaj', [InvoicesController::class, 'create']);
Route::post('/faktury/zapisz', [InvoicesController::class, 'store'])->name('invoices.store');
