<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('solicitudes.index');
});

Route::resource('solicitudes', SolicitudController::class);