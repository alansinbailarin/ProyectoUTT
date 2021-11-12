@extends('layouts.app')
@section('template_title')
    Crear Resguardo
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Resguardos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-header">
                        <span class="card-title">Crear Resguardo</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('resguardos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('resguardo.form')

                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
