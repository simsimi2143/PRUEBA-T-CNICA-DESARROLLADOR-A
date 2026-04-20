<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    protected $fillable = [
        'nombre_solicitante',
        'correo_electronico',
        'tipo_solicitud',
        'descripcion',
        'estado',
    ];

    // Tipos de solicitud disponibles (útil para selects)
    public static function tipos(): array
    {
        return ['Académica', 'Certificado', 'Actualización de datos', 'Otra'];
    }

    // Estados posibles
    public static function estados(): array
    {
        return ['Pendiente', 'En revisión', 'Aprobada', 'Rechazada'];
    }
}