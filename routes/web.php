<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('pages.index');
//Route::resource('pages', PageController::class);
Route::get('/navigation', [MenuController::class, 'index']);

Route::group(['prefix' => 'page'], function () {

    Route::get('/list', [PageController::class, 'index'])->name('pages.index');
    Route::get('/new', [PageController::class, 'create'])->name('pages.create');
    Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');
    Route::get('/edit/{id}', [PageController::class, 'edit'])->name('pages.edit');
    Route::post('/add', [PageController::class, 'store'])->name('pages.store');
    Route::post('/update', [PageController::class, 'update'])->name('pages.update');
    Route::get('/delete/{id}', [PageController::class, 'destroy'])->name('pages.destroy');
    
    

});
