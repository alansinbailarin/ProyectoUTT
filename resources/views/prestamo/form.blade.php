<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Matrícula ') }}
            {{ Form::text('matricula', $prestamo->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matrícula ']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $prestamo->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De Solicitante']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fecha_Salida') }}
            {{ Form::date('fecha_sali', $prestamo->fecha_sali, ['class' => 'form-control' . ($errors->has('fecha_sali') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una fecha de salida']) }}
            {!! $errors->first('fecha_sali', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_Devolución') }}
            {{ Form::date('fecha_dev', $prestamo->fecha_dev, ['class' => 'form-control' . ($errors->has('fecha_dev') ? ' is-invalid' : ''), 'placeholder' => 'Agrega Una Fecha']) }}
            {!! $errors->first('fecha_dev', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $prestamo->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Agregar observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Encargado') }}
            {{ Form::select('user_id',$users, $prestamo->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Agregar a un encargado']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area prestamo') }}
            {{ Form::select('area_id',$areas, $prestamo->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Agregar el area donde se  prestará']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>