@extends('layouts.app')

@section('template_title')
    {{ $edificio->name ?? 'Datos de Edificio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos de Edificio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('edificios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Edificio:</strong>
                            {{ $edificio->name }}
                        </div>
                        <div class="form-group">
                            <strong>No.Teléfono:</strong>
                            {{ $edificio->number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $edificio->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación:</strong>
                            {{ $edificio->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado Edificio:</strong>
                            {{ $edificio->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
