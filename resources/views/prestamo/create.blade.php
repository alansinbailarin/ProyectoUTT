@extends('layouts.app')
@section('template_title')
    Crear Prestamo
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Prestamos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-header">
                        <span class="card-title">Crear Prestamo</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('prestamos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('prestamo.form')

                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
