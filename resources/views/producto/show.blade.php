@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>N Inventario:</strong>
                            {{ $producto->num_inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $producto->area->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo alta:</strong>
                            {{ $producto->tipoalta->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Alta:</strong>
                            {{ $producto->fecha_alta }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $producto->marca->name }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $producto->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $producto->estado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $producto->modelo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>N. Serie:</strong>
                            {{ $producto->num_serie }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $producto->categoria->name}}
                        </div>
                        <div class="form-group">
                            <strong>Subcategoría:</strong>
                            {{ $producto->subcategoria->name }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
