<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SolicitudController extends Controller
{
    /**
     * Muestra el listado con filtros (PÚBLICO - no requiere login).
     */
    public function index(Request $request)
    {
        $query = Solicitud::query();

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('tipo')) {
            $query->where('tipo_solicitud', $request->tipo);
        }

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre_solicitante', 'like', "%{$buscar}%")
                  ->orWhere('correo_electronico', 'like', "%{$buscar}%");
            });
        }

        $solicitudes = $query->orderBy('created_at', 'desc')->paginate(10);
        $tipos = Solicitud::tipos();
        $estados = Solicitud::estados();

        return view('solicitudes.index', compact('solicitudes', 'tipos', 'estados'));
    }

    /**
     * Muestra formulario de creación (PÚBLICO).
     */
    public function create()
    {
        $tipos = Solicitud::tipos();
        return view('solicitudes.create', compact('tipos'));
    }

    /**
     * Almacena una nueva solicitud (PÚBLICO).
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
     * Muestra el detalle (PÚBLICO).
     */
    public function show(Solicitud $solicitud)
    {
        return view('solicitudes.show', compact('solicitud'));
    }

    /**
     * Muestra formulario de edición (SOLO ADMIN - protegido por rutas).
     */
    public function edit(Solicitud $solicitud)
    {
        $estados = Solicitud::estados();
        return view('solicitudes.edit', compact('solicitud', 'estados'));
    }

    /**
     * Actualiza el estado (SOLO ADMIN - protegido por rutas).
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
     * Elimina una solicitud (SOLO ADMIN - protegido por rutas).
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud->delete();
        return redirect()->route('solicitudes.index')
                         ->with('success', 'Solicitud eliminada.');
    }
}