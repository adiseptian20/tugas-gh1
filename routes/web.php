<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/master', function () {
    return view('section.master');
});
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });
Route::get('/sys', function () {
    return view('pages.sys');
});

// Route::get('/product', function () {
//     return view('pages.product');
// });

Route::get('/dashboard', [DataController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])
->name('product');
Route::get('/product/tambah', [ProductController::class, 'create'])
->name('tambahProduct');

Route::post('/product/store', [ProductController::class, 'store'])
->name('storeProduct');

Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])
->name('hapusProduct');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])
->name('editProduct');

Route::post('/product/update/{id}', [ProductController::class, 'update'])
->name('updateProduct');