
@extends('layouts.app')
@section('template_title')
    Crear subcategoria
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
                        <span class="card-title">Crear Subcategoría</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('subcategorias.store') }}"  role="form" enctype="multipart/form-data">
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
