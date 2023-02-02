<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\PortfolioPagesController;
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
//Route::prefix('admin')->group(function (){

    Route::get('/',[PagesController::class,'index'])->name('pages.index');
    Route::get('/admin/dashboard',[PagesController::class,'dashboard'])->name('pages.dashboard');
    Route::get('/admin/main',[MainPagesController::class,'index'])->name('pages.main');
    Route::put('/admin/main',[MainPagesController::class,'update'])->name('pages.main.update');
    //service
    Route::get('/admin/services/create',[ServicePagesController::class,'create'])->name('pages.services.create');
    Route::post('/admin/services/create',[ServicePagesController::class,'store'])->name('pages.services.store');
    Route::get('/admin/services/list',[ServicePagesController::class,'list'])->name('pages.services.list');
    Route::get('/admin/services/edit/{id}',[ServicePagesController::class,'edit'])->name('pages.services.edit');
    Route::post('/admin/services/update/{id}',[ServicePagesController::class,'update'])->name('pages.services.update');
    Route::get('/admin/services/delete/{id}',[ServicePagesController::class,'delete'])->name('pages.services.delete');
//portfolio
    Route::get('/admin/portfolio/create',[PortfolioPagesController::class,'create'])->name('pages.portfolio.create');
    Route::get('/admin/portfolio/tailwind',[PortfolioPagesController::class,'tailwind'])->name('pages.portfolio.tailwind');
    Route::post('/admin/portfolio/create',[PortfolioPagesController::class,'store'])->name('pages.portfolio.store');
    Route::get('/admin/portfolio/list',[PortfolioPagesController::class,'list'])->name('pages.portfolio.list');
    Route::get('/admin/portfolio/edit/{id}',[PortfolioPagesController::class,'edit'])->name('pages.portfolio.edit');
    Route::post('/admin/portfolio/update/{id}',[PortfolioPagesController::class,'update'])->name('pages.portfolio.update');
    Route::get('/admin/portfolio/delete/{id}',[PortfolioPagesController::class,'delete'])->name('pages.portfolio.delete');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
