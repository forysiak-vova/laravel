<?php

use App\Http\Controllers\CustomerController;
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
})->name('home');
// Route::get('faktury', function () {
//     return view('invoices.index');
// });
// Route::get('faktury/dodaj', function () {
//     return view('invoices.create');
// });
Route::get('/faktury', [InvoicesController::class, 'index'])->name('invoices.index');
Route::get('/faktury/dodaj', [InvoicesController::class, 'create'])->name('invoices.create');
Route::get('/faktury/edytuj/{id}', [InvoicesController::class, 'edit'])->name('invoices.edit');
Route::post('/faktury/zapisz', [InvoicesController::class, 'store'])->name('invoices.store');
Route::put('/faktury/zmien/{id}', [InvoicesController::class, 'update'])->name('invoices.update');
Route::delete('/faktury/usuń/{id}', [InvoicesController::class, 'delete'])->name('invoices.delete');

Route::resource('klienci', CustomerController::class, ['names' => 'customers']);
