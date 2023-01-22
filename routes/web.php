<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [FilmController::class,'index'])->name('index');

// Route::prefix('participants')->name('participants.')->group(function () {
//     Route::get('export', [ParticipantController::class, 'export'])->name('export');
//     Route::post('import', [ParticipantController::class, 'import'])->name('import');
//     Route::get('delete-all', [ParticipantController::class, 'deleteAll'])->name('delete-all');
//     Route::post('update-all', [ParticipantController::class, 'updateAll'])->name('update-all');
// });
// Route::resource('participants', ParticipantController::class);

// Route::resource('certificates', CertificateController::class);

Route::prefix('film')->name('film.')->group(function () {
    Route::get('{provinsi}', [FilmController::class, 'show'])->name('show');
    // Route::get('destroy', [FilmController::class, 'destroy'])->name('destroy');
});
Route::resource('film', FilmController::class);

// Route::prefix('transactions')->name('transactions.')->group(function () {
//     Route::get('{film}', [TransactionController::class, 'tampil'])->name('tampil');
// });
// Route::resource('transactions', TransactionController::class);



