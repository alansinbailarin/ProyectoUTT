@extends('layouts.app2')

@section('content')
<body id="register">
    <div class="cardback"></div>

    <div class="contenedor-log2">
        <p id="inicia-s2">Registrate</p>
        <p id="ntc2">Ya tienes una cuenta?</p>
        <a id="reg2" href="{{ route('login') }}">Inicia sesión.</a>


        <form class="formulario2" method="POST" action="{{ route('register') }}">
            @csrf
            <input id="matriculainp" placeholder="Ingresa tu matricula" type="text" class=" @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" autofocus>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(196, 196, 196)" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
                                @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <br>
            <input id="nameinp" placeholder="Ingresa tu nombre" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(196, 196, 196)" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <br>
            <input id="emailinp" placeholder="Ingresa tu email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(196, 196, 196)" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <br>
            <input id="passwordinp" placeholder="Crea una contraseña" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="rgb(196, 196, 196)" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <br>
            <input id="password-confirminp" placeholder="Repite la contraseña" type="password"  name="password_confirmation" required autocomplete="new-password"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="rgb(196, 196, 196)" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg>


            <button type="submit" class="btniniciarsesion2">
                {{ __('Registrarme') }}
            </button>
        </form>
        <div class="bloqueright2">

    <p id="textoprin2"></p>


    </div>
    <img src="{{ asset('img/logo.png') }}" id="logo2">
    <img src="{{ asset('img/allura.png') }}" id="imagenesp2">
 </div>

</body class="container">
@endsection
</html>

