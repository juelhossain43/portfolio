<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;
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

Route::get('/',[PagesController::class,'index'])->name('pages.index');
Route::get('/admin/dashboard',[PagesController::class,'dashboard'])->name('pages.dashboard');
Route::get('/admin/main',[MainPagesController::class,'index'])->name('pages.main');
Route::put('/admin/main',[MainPagesController::class,'update'])->name('pages.main.update');
Route::get('/admin/services',[ServicePagesController::class,'create'])->name('pages.services.create');
Route::post('/admin/services',[ServicePagesController::class,'store'])->name('pages.services.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
