@extends('layouts.app')

@section('content')
<h1 class="mb-4">Cambiar Estado de Solicitud #{{ $solicitud->id }}</h1>

<div class="card mb-4">
    <div class="card-header">
        Datos de la solicitud
    </div>
    <div class="card-body">
        <p><strong>Solicitante:</strong> {{ $solicitud->nombre_solicitante }}</p>
        <p><strong>Correo:</strong> {{ $solicitud->correo_electronico }}</p>
        <p><strong>Tipo:</strong> {{ $solicitud->tipo_solicitud }}</p>
        <p><strong>Descripción:</strong> {{ $solicitud->descripcion }}</p>
        <p><strong>Estado actual:</strong> 
            <span class="badge 
                @if($solicitud->estado == 'Pendiente') bg-warning
                @elseif($solicitud->estado == 'En revisión') bg-info
                @elseif($solicitud->estado == 'Aprobada') bg-success
                @else bg-danger
                @endif">
                {{ $solicitud->estado }}
            </span>
        </p>
        <p><strong>Fecha de creación:</strong> {{ $solicitud->created_at?->format('d/m/Y H:i') ?? 'No disponible' }}</p>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('solicitudes.update', ['solicitud' => $solicitud->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="estado" class="form-label">Nuevo estado *</label>
                <select name="estado" id="estado" class="form-select @error('estado') is-invalid @enderror" required>
                    <option value="">Seleccione...</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado }}" {{ old('estado', $solicitud->estado) == $estado ? 'selected' : '' }}>
                            {{ $estado }}
                        </option>
                    @endforeach
                </select>
                @error('estado')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('solicitudes.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar Estado</button>
            </div>
        </form>
    </div>
</div>
@endsection