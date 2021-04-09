<?php

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

use App\Http\Controllers\Productes;
use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function (){
Route::get('', [Productes::class, 'index'])->name('productes');
Route::get('/create', [Productes::class, 'create'])->name('create.producte');
Route::post('/store', [Productes::class, 'store'])->name('store.producte');
Route::get('/{id}/edit',[Productes::class,'edit'])->name('edit.producte');
Route::post('/{id}/update',[Productes::class,'update'])->name('update.producte');
    Route::get('/delete/{id}', [Productes::class, 'delete'])->name('delete');

});
