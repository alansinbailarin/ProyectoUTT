
@extends('layouts.app')
@section('template_title')
    Actualizar Planta
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Plantas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-header">
                        <span class="card-title">Actualizar Plantas</span>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('plantas.update', $planta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('planta.form')

                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
