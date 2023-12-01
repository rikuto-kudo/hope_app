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

/*-----トップページ-----*/
Route::get('/', [HospitalController::class, 'index']);

/*-----検索ページ-----*/
Route::get('/getAreas', [SearchController::class, 'getAreas'])->name('getAreas');
Route::get('/getCityTownVillages', [SearchController::class, 'getCityTownVillages'])->name('getCityTownVillages');
//Route::get('/showHospitals', [SearchController::class, 'showHospitals'])->name('showHospitals');
Route::get('/resultHospitals', [SearchController::class, 'resultHospitals'])->name('resultHospitals');
//Route::get('/getCityTownVillages/{area}', [SearchController::class, 'getCity_town_villages']);
//Route::get('/getCityTownVillages', [SearchController::class, 'getCity_town_villages']);
//Route::post('/searchResult', [SearchController::class, 'searchResult']);
//Route::get('/update-areas', [SearchController::class, 'areasUpdate']);
//Route::get('/update-city-town-villages', [SearchController::class, 'cityTownVillageUpdate']);
//Route::get('/update-hospitals', [SearchController::class, 'hospitalsUpdate']);

