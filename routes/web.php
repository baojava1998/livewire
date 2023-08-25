<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannersController;
use App\Livewire\ShowBanners;
use App\Livewire\CreateBanner;
use App\Livewire\UpdateBanner;

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
    return view('admin');
});
Route::group(['prefix' => 'banners'], function () {
    Route::get('/', ShowBanners::class)->name('admins.banners.index');
    Route::get('/create', CreateBanner::class)->name('admins.banners.create');
    Route::post('/store', [BannersController::class, 'store'])->name('admins.banners.store');
    Route::get('/edit/{id}', UpdateBanner::class)->name('admins.banners.edit');
    Route::put('/update/{id}', [BannersController::class, 'update'])->name('admins.banners.update');
    Route::get('/delete/{id}', [BannersController::class, 'destroy'])->name('admins.banners.destroy');
});
