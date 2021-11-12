<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_solicitante') }}
            {{ Form::text('nombre_solicitante', $resguardo->nombre_solicitante, ['class' => 'form-control' . ($errors->has('nombre_solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Agregue al Solicitante']) }}
            {!! $errors->first('nombre_solicitante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. Telefónico') }}
            {{ Form::text('number', $resguardo->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Agregue un Telefóno']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $resguardo->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_resguardo') }}
            {{ Form::date('fecha_resguardo', $resguardo->fecha_resguardo, ['class' => 'form-control' . ($errors->has('fecha_resguardo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Resguardo']) }}
            {!! $errors->first('fecha_resguardo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('matrícula') }}
            {{ Form::text('matricula', $resguardo->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Agrega Matrícula']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Devolución') }}
            {{ Form::date('fecha_dev', $resguardo->fecha_dev, ['class' => 'form-control' . ($errors->has('fecha_dev') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una Fecha de Devolución']) }}
            {!! $errors->first('fecha_dev', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $resguardo->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Agregue una Observación']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Encargado') }}
            {{ Form::select('user_id',$users, $resguardo->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un Encargado']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            
            {{ Form::label('Area donde pertenece') }}
            {{ Form::select('area_id',$areas, $resguardo->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Agregue un Area']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>