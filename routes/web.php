<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CeritificateController;

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

Route::get('/', [ParticipantController::class,'index'])->name('index');

Route::prefix('participants')->name('participants.')->group(function () {
    Route::get('export', [ParticipantController::class, 'export'])->name('export');
    Route::post('import', [ParticipantController::class, 'import'])->name('import');
    Route::get('delete-all', [ParticipantController::class, 'deleteAll'])->name('delete-all');
    Route::post('update-all', [ParticipantController::class, 'updateAll'])->name('update-all');
});
Route::resource('participants', ParticipantController::class);

Route::prefix('ceritificates')->name('ceritificates.')->group(function () {
    Route::get('{participant}/view', [CeritificateController::class, 'view'])->name('view');
    Route::get('{participant}/download', [CeritificateController::class, 'download'])->name('download');
    Route::get('{participant}/send', [CeritificateController::class, 'send'])->name('send');
    Route::get('viewpdf', [CeritificateController::class, 'viewpdf'])->name('viewpdf');
});
Route::resource('ceritificates', CeritificateController::class);

// Route::resource('certificates', CertificateController::class);

// Route::prefix('film')->name('film.')->group(function () {
//     Route::post('/{provinsi}/{provinsi_id}', [FilmController::class, 'tampil'])->name('tampil');
    // Route::get('{role}', [FilmController::class, 'gantiRole'])->name('ganti-role');
    // Route::post('tambah', [FilmController::class, 'tambah'])->name('tambah');
// });
// Route::resource('film', FilmController::class);

// Route::prefix('transactions')->name('transactions.')->group(function () {
//     Route::get('{film}', [TransactionController::class, 'tampil'])->name('tampil');
// });
// Route::resource('transactions', TransactionController::class);



