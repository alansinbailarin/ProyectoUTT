@extends('layouts.app')
@section('template_title')
    Editar Subcategoría
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Subcategoría</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-header">
                        <span class="card-title">Actualizar Subcategoría</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('subcategorias.update', $subcategoria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subcategoria.form')

                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
