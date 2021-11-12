
@extends('layouts.app')
@section('template_title')
    Crear Producto
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Producto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-header">
                        <span class="card-title">Crear Productos</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('producto.form')

                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

