<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePageCortroller;
use App\Http\Controllers\portfolioPageCortroller;
use App\Http\Controllers\AboutPageCortroller;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MainPagesController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/banner/main', [MainPagesController::class, 'index'])->name('admin.main');
    Route::put('/banner/main', [MainPagesController::class, 'update'])->name('admin.main.update');

    Route::get('/services/create', [ServicePageCortroller::class, 'create'])->name('admin.services.create');
    Route::post('/services/create', [ServicePageCortroller::class, 'store'])->name('admin.services.store');
    Route::get('/services/list', [ServicePageCortroller::class, 'list'])->name('admin.services.list');
    Route::get('/services/edit/{id}', [ServicePageCortroller::class, 'edit'])->name('admin.services.edit');
    Route::post('/services/update/{id}', [ServicePageCortroller::class, 'update'])->name('admin.services.update');
    Route::delete('/services/destroy/{id}', [ServicePageCortroller::class, 'destroy'])->name('admin.services.destroy');

    Route::get('/portfolios/create', [portfolioPageCortroller::class, 'create'])->name('admin.portfolios.create');
    Route::put('/portfolios/create', [portfolioPageCortroller::class, 'store'])->name('admin.portfolios.store');
    Route::get('/portfolios/list', [portfolioPageCortroller::class, 'list'])->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', [portfolioPageCortroller::class, 'edit'])->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', [portfolioPageCortroller::class, 'update'])->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', [portfolioPageCortroller::class, 'destroy'])->name('admin.portfolios.destroy');

    Route::get('/abouts/create', [AboutPageCortroller::class, 'create'])->name('admin.abouts.create');
    Route::put('/abouts/create', [AboutPageCortroller::class, 'store'])->name('admin.abouts.store');
    Route::get('/abouts/list', [AboutPageCortroller::class, 'list'])->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}', [AboutPageCortroller::class, 'edit'])->name('admin.abouts.edit');
    Route::post('/abouts/update/{id}', [AboutPageCortroller::class, 'update'])->name('admin.abouts.update');
    Route::delete('/abouts/destroy/{id}', [AboutPageCortroller::class, 'destroy'])->name('admin.abouts.destroy');
});

  Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
