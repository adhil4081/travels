<?php

use Dotenv\Store\File\Paths;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AdpackageController;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/package/{country}', [PackageController::class, 'index'])->name('packages');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Auth::routes(['login'=>false]);

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    // booking
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class)->only(['index', 'destroy']);
    // travel packages
    Route::get('travelpackages', [AdpackageController::class, 'index'])->name('adpackage');
    Route::get('travelpackages/create', [AdpackageController::class, 'create'])->name('createpackage');
    Route::post('travelpackages/create', [AdpackageController::class, 'store'])->name('storepackage');
    Route::get('travelpackages/edit/{id}', [AdpackageController::class, 'edit'])->name('editpackage');
    Route::put('travelpackages/update/{id}', [AdpackageController::class, 'update'])->name('updatepackage');
    Route::delete('travelpackages/{id}', [AdpackageController::class, 'destroy'])->name('deletepackage');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    Route::resource('travel_packages.galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['create', 'index', 'show']);
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
