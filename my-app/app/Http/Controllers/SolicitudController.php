<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SolicitudController extends Controller
{
    /**
     * Muestra el listado con filtros.
     */
    public function index(Request $request)
    {
        $query = Solicitud::query();

        // Filtro por estado
        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        // Filtro por tipo de solicitud
        if ($request->filled('tipo')) {
            $query->where('tipo_solicitud', $request->tipo);
        }

        // Filtro por texto libre (nombre o correo)
        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre_solicitante', 'like', "%{$buscar}%")
                  ->orWhere('correo_electronico', 'like', "%{$buscar}%");
            });
        }

        $solicitudes = $query->orderBy('created_at', 'desc')->paginate(10);

        // Obtener listados para los selects de filtros
        $tipos = Solicitud::tipos();
        $estados = Solicitud::estados();

        return view('solicitudes.index', compact('solicitudes', 'tipos', 'estados'));
    }

    /**
     * Muestra formulario de creación.
     */
    public function create()
    {
        $tipos = Solicitud::tipos();
        return view('solicitudes.create', compact('tipos'));
    }

    /**
     * Almacena una nueva solicitud.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_solicitante' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255',
            'tipo_solicitud'     => ['required', Rule::in(Solicitud::tipos())],
            'descripcion'        => 'required|string',
        ]);

        Solicitud::create($validated + ['estado' => 'Pendiente']);

        return redirect()->route('solicitudes.index')
                         ->with('success', 'Solicitud registrada exitosamente.');
    }

    /**
     * Muestra el detalle de una solicitud (opcional pero útil).
     */
    public function show(Solicitud $solicitud)
    {
        return view('solicitudes.show', compact('solicitud'));
    }

    /**
     * Muestra formulario de edición (solo para cambiar estado).
     */
    public function edit(Solicitud $solicitud)
    {
        $estados = Solicitud::estados();
        return view('solicitudes.edit', compact('solicitud', 'estados'));
    }

    /**
     * Actualiza el estado de la solicitud.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $validated = $request->validate([
            'estado' => ['required', Rule::in(Solicitud::estados())],
        ]);

        $solicitud->update($validated);

        return redirect()->route('solicitudes.index')
                         ->with('success', 'Estado actualizado correctamente.');
    }

    /**
     * Elimina una solicitud (opcional, no requerido pero se puede incluir).
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud->delete();
        return redirect()->route('solicitudes.index')
                         ->with('success', 'Solicitud eliminada.');
    }
}