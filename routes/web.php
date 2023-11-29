<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\ApprenantController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/**La configuration de la route pour le module formation*/
Route::prefix('formation')->group(function () {
    Route::get('/liste', [FormationController::class, 'liste'])->name('liste-formation');
    Route::get('/add', [FormationController::class, 'add'])->name('add-formation');
    Route::post('/enregistrer', [FormationController::class, 'enregistrer'])->name('enregistrer-formation');
    Route::get('/detail/{id}', [FormationController::class, 'detail'])->name('detail-formation');
});


/**La configuration de la route pour le module apprenant*/
Route::prefix('apprenant')->group(function () {
    Route::get('/liste', [ApprenantController::class, 'liste'])->name('liste-apprenant');
    Route::get('/add', [ApprenantController::class, 'add'])->name('add-apprenant');
    Route::post('/enregistrer', [ApprenantController::class, 'enregistrer'])->name('enregistrer-apprenant');
    Route::get("/detail/{id}",[ApprenantController::class,'show'])->name('detail-apprenant');
});
