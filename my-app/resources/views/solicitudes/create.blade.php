@extends('layouts.app')

@section('content')
<h1 class="mb-4">Registrar Nueva Solicitud</h1>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('solicitudes.store') }}">
            @csrf

            <div class="mb-3">
                <label for="nombre_solicitante" class="form-label">Nombre completo *</label>
                <input type="text" name="nombre_solicitante" id="nombre_solicitante"
                       class="form-control @error('nombre_solicitante') is-invalid @enderror"
                       value="{{ old('nombre_solicitante') }}" required>
                @error('nombre_solicitante')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electrónico *</label>
                <input type="email" name="correo_electronico" id="correo_electronico"
                       class="form-control @error('correo_electronico') is-invalid @enderror"
                       value="{{ old('correo_electronico') }}" required>
                @error('correo_electronico')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tipo_solicitud" class="form-label">Tipo de solicitud *</label>
                <select name="tipo_solicitud" id="tipo_solicitud"
                        class="form-select @error('tipo_solicitud') is-invalid @enderror" required>
                    <option value="">Seleccione...</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo }}" {{ old('tipo_solicitud') == $tipo ? 'selected' : '' }}>
                            {{ $tipo }}
                        </option>
                    @endforeach
                </select>
                @error('tipo_solicitud')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción *</label>
                <textarea name="descripcion" id="descripcion" rows="4"
                          class="form-control @error('descripcion') is-invalid @enderror" required>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('solicitudes.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Registrar Solicitud</button>
            </div>
        </form>
    </div>
</div>
@endsection