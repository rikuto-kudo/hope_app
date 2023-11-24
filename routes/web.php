<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SearchController;
//use App\Http\Controllers\RegistrationController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HospitalController::class, 'index']);
//Route::get('/register', [RegistrationController::class, 'showRegistrationForm']);
Route::get('/search', [SearchController::class, 'prefecture_city_town_village_search']);
Route::get('/getCityTownVillages', [SearchController::class, 'getCity_town_villages']);
Route::post('/submit', [SearchController::class, 'hospital']);

