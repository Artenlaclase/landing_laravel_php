<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
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
    return view('landing');
});
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/gallery/cine', [GalleryController::class, 'cine'])->name('gallery.cine');
Route::get('/gallery/actividaes', [GalleryController::class, 'escultura'])->name('gallery.actividades');
Route::get('/gallery/trabajo', [GalleryController::class, 'trabajo'])->name('gallery.trabajo');