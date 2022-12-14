<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabunganController;

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
    return redirect(route('index'));
});


Route::get('/index',[TabunganController::class,'create'])->name('index');


Route::post('/store', [TabunganController::class, 'store'])->name('store');

Route::get('/edit/{id}', [TabunganController::class,'edit'])->name('edit');

Route::post('/edit-store/{id}',[TabunganController::class, 'storeEdit'])->name('storeEdit');

Route::post('/destroy/{id}', [TabunganController::class, 'destroy'])->name('destroy');