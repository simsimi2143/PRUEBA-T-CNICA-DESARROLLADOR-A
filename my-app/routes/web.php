<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('solicitudes.index');
});

// RUTAS PÚBLICAS (cualquier usuario autenticado o no puede ver y crear)
Route::get('solicitudes', [SolicitudController::class, 'index'])->name('solicitudes.index');
Route::get('solicitudes/create', [SolicitudController::class, 'create'])->name('solicitudes.create');
Route::post('solicitudes', [SolicitudController::class, 'store'])->name('solicitudes.store');
Route::get('solicitudes/{solicitud}', [SolicitudController::class, 'show'])->name('solicitudes.show');

// RUTAS PROTEGIDAS (solo admin puede editar estado y eliminar)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('solicitudes/{solicitud}/edit', [SolicitudController::class, 'edit'])->name('solicitudes.edit');
    Route::put('solicitudes/{solicitud}', [SolicitudController::class, 'update'])->name('solicitudes.update');
    Route::delete('solicitudes/{solicitud}', [SolicitudController::class, 'destroy'])->name('solicitudes.destroy');
});

// Rutas de autenticación de Breeze (ya deberían estar, pero verifica que existan)
require __DIR__.'/auth.php';