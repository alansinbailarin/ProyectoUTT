@extends('layouts.app')

@section('template_title')
    {{ $planta->name ?? 'Show Planta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Planta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plantas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Planta:</strong>
                            {{ $planta->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Edificio:</strong>
                            {{ $planta->edificio-name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
