@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verifica tu correo electrónico</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Se te ha enviado un link para cambiar tu contrasñea
                            </div>
                        @endif
                        <p>Antes de proceder, revisa tu correo electrónico para verificar el link, sino ha llegado,</p>
                        <a href="{{ route('verification.resend') }}">click aqui para re enviar'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
