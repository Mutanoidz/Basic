<?php

use App\Http\Controllers\Econtroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecommerce', [Econtroller::class, 'index'])->name('ecommerce.index');
Route::get('/ecommerce/create', [Econtroller::class, 'create'])->name('ecommerce.create');
Route::post('/ecommerce', [Econtroller::class, 'store'])->name('ecommerce.store');
Route::get('/ecommerce/{id}', [Econtroller::class, 'show'])->name('ecommerce.show');
Route::get('/ecommerce/{id}/edit', [Econtroller::class, 'edit'])->name('ecommerce.edit');
Route::put('/ecommerce/{id}', [Econtroller::class, 'update'])->name('ecommerce.update');
Route::delete('/ecommerce/{id}', [Econtroller::class, 'destroy'])->name('ecommerce.destroy');

Route::get('about-me', function () {
    return view('about-me');
});