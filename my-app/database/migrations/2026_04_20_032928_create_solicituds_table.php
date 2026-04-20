<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_solicitante');
            $table->string('correo_electronico');
            $table->string('tipo_solicitud'); // Ej: Académica, Certificado, Actualización
            $table->text('descripcion');
            $table->enum('estado', ['Pendiente', 'En revisión', 'Aprobada', 'Rechazada'])
                  ->default('Pendiente');
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};