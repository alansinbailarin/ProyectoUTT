@extends('layouts.app2')

@section('content')
<div class="cardback">

</div>

    <div class="contenedor-log3">
                <div class="card-header">{{ __('Cambiar contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="emailinp2" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu correo electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btnresetpass">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                            <div>
                            @if (Route::has('register'))
                            <a id="reg-3" href="{{ route('login') }}">Cancelar</a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
