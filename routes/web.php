<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
#FRANCHISE
use App\Http\Controllers\NameQuotientController;
use App\Http\Controllers\NQCertificateController;
use App\Http\Controllers\ConsultActivtyController;
use App\Http\Controllers\UmrohController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ChracterReaderController;


Route::get('', function () {
    return view('auth.login');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profiles');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('news', [NewsController::class, 'index'])->name('news');

## FRANCHISE
Route::prefix('namequotient')->group(function () {
    Route::get('/', [NameQuotientController::class, 'index'])->name('namequotient.index'); // Menampilkan daftar pengguna
    Route::get('/create', [NameQuotientController::class, 'create'])->name('namequotient.create'); // Menampilkan form tambah pengguna
    Route::post('/', [NameQuotientController::class, 'store'])->name('namequotient.store'); // Menyimpan data pengguna baru
    Route::get('/{id}/edit', [NameQuotientController::class, 'edit'])->name('namequotient.edit'); // Menampilkan form edit pengguna
    Route::put('/{id}', [NameQuotientController::class, 'update'])->name('namequotient.update'); // Memperbarui data pengguna
    Route::delete('/{id}', [NameQuotientController::class, 'destroy'])->name('namequotient.destroy'); // Menghapus pengguna
});
Route::get('nqcertificate', [NQCertificateController::class, 'index'])->name('nqcertificate');
Route::get('consultactivty', [ConsultActivtyController::class, 'index'])->name('consultactivty');
Route::get('umroh', [UmrohController::class, 'index'])->name('umroh');
Route::get('training', [TrainingController::class, 'index'])->name('training');
Route::get('chracterreader', [ChracterReaderController::class, 'index'])->name('chracterreader');

Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions.{permissionId}.delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles.{roleId}.delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles.{roleId}.give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles.{roleId}.give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users.{userId}.delete', [App\Http\Controllers\UserController::class, 'destroy']);

});

require __DIR__.'/auth.php';

// Route::get('chracterreader', [ChracterReaderController::class, 'index'])->name('chracterreader')->middleware(['auth', 'verified']);
