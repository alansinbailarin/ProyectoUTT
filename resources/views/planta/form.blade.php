<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la Planta') }}
            {{ Form::text('name', $planta->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Agregar nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edificio') }}
            {{ Form::select('edificio_id',$edificios, $planta->edificio_id, ['class' => 'form-control' . ($errors->has('edificio_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un edificio']) }}
            {!! $errors->first('edificio_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>