@extends('layouts.app')

@section('content')
<h1 class="mb-4">Listado de Solicitudes</h1>

{{-- Filtros --}}
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('solicitudes.index') }}" class="row g-3">
            <div class="col-md-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="estado" id="estado" class="form-select">
                    <option value="">Todos</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado }}" {{ request('estado') == $estado ? 'selected' : '' }}>
                            {{ $estado }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="tipo" class="form-label">Tipo de solicitud</label>
                <select name="tipo" id="tipo" class="form-select">
                    <option value="">Todos</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo }}" {{ request('tipo') == $tipo ? 'selected' : '' }}>
                            {{ $tipo }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="buscar" class="form-label">Buscar (nombre o correo)</label>
                <input type="text" name="buscar" id="buscar" class="form-control"
                       value="{{ request('buscar') }}" placeholder="Ej: Juan Pérez o juan@mail.com">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
        </form>
    </div>
</div>

{{-- Tabla de solicitudes --}}
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del solicitante</th>
                <th>Tipo de solicitud</th>
                <th>Estado</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->id }}</td>
                    <td>{{ $solicitud->nombre_solicitante }}</td>
                    <td>{{ $solicitud->tipo_solicitud }}</td>
                    <td>
                        <span class="badge 
                            @if($solicitud->estado == 'Pendiente') bg-warning
                            @elseif($solicitud->estado == 'En revisión') bg-info
                            @elseif($solicitud->estado == 'Aprobada') bg-success
                            @else bg-danger
                            @endif">
                            {{ $solicitud->estado }}
                        </span>
                    </td>
                    <td>{{ $solicitud->created_at->format('d/m/Y H:i') }}</td>
                    <td>
    @auth
        @if(auth()->user()->isAdmin())
            <a href="{{ route('solicitudes.edit', $solicitud) }}" class="btn btn-sm btn-outline-primary">
                Cambiar estado
            </a>
        @else
            <span class="text-muted">-</span>
        @endif
    @else
        <span class="text-muted">-</span>
    @endauth
</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay solicitudes registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $solicitudes->links() }}
@endsection