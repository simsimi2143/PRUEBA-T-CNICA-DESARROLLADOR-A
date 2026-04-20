<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success alert-custom mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('status') }}
        </div>
    @endif

    <div class="login-card">
        <!-- Header -->
        <div class="login-header">
            <div class="icon-wrapper">
                <i class="bi bi-shield-lock-fill fs-2"></i>
            </div>
            <h2>Bienvenido</h2>
            <p>Sistema de Gestión de Solicitudes</p>
        </div>

        <!-- Body -->
        <div class="login-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium text-secondary small">Correo electrónico</label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-envelope-fill icon"></i>
                        <input 
                            type="email" 
                            class="form-control form-control-lg @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            placeholder="admin@universidad"
                            required 
                            autofocus 
                            autocomplete="username"
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label fw-medium text-secondary small">Contraseña</label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-lock-fill icon"></i>
                        <input 
                            type="password" 
                            class="form-control form-control-lg @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            required 
                            autocomplete="current-password"
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="remember_me" 
                            name="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="form-check-label text-secondary small" for="remember_me">
                            Recordarme
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-link">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-login w-100 text-white">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                </button>
            </form>

            <!-- Back to site -->
            <div class="back-link">
                <a href="{{ route('solicitudes.index') }}">
                    <i class="bi bi-arrow-left me-1"></i>Volver al listado de solicitudes
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>