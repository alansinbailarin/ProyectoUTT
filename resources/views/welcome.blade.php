@extends('layouts.app2')

@section('content')
<body id="bodylogin">
    <!-- Inicio del header -->

    <div class="cardback">


    </div>
    <!-- Contenedor principal -->
    <div class="contenedor-log">
        <p id="inicia-s">Inicia sesión</p>
        <p id="ntc">No tienes una cuenta?</p>
        @if (Route::has('register'))
        <a id="reg" href="{{ route('register') }}">Registrate.</a>
        @endif

        <form class="formulario" method="POST" action="{{ route('login') }}">
            @csrf
            <input id="emailinp" type="email" placeholder="Ingresa tu email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(196, 196, 196)" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <br>
            <input id="passinp" placeholder="Ingreas tu contraseña" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="rgb(196, 196, 196)" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <input  type="checkbox" name="remember" id="recordarsesion {{ old('remember') ? 'checked' : '' }}" ><label for="check1">Recordar sesión</label>
                                <button class="btniniciarsesion" type="submit">Iniciar sesión</button>
                                    @if (Route::has('password.request'))
                                <a id="olvidemicontra" href="{{ route('password.request') }}">Olvide mi contraseña</a>
                                    @endif
                            </form>


    </div>

    <!-- Bloque secundario -->
    <div class="bloqueright">




    </div>
<img src="{{ asset('img/logo.png')}}" id="logo">
<img src="{{ asset('img/juntos.png') }}" id="imagenesp">
</body>
@endsection

