<?php

use App\Http\Controllers\FilialeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('contact-responsable/{filiale}',[FilialeController::class,'contactResponsable'])->name('send.email.to.responsable');
Route::resource('filiale', FilialeController::class);
Route::resource('produit', ProduitController::class);
