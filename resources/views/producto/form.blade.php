<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('N. Inventario') }}
            {{ Form::text('num_inventario', $producto->num_inventario, ['class' => 'form-control' . ($errors->has('num_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Agrega el N. Inventario']) }}
            {!! $errors->first('num_inventario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::select('area_id',$areas, $producto->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Agregar un area']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Alta') }}
            {{ Form::select('tipo_id',$tipoaltas, $producto->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un tipo de alta']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Alta') }}
            {{ Form::date('fecha_alta', $producto->fecha_alta, ['class' => 'form-control' . ($errors->has('fecha_alta') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una fecha']) }}
            {!! $errors->first('fecha_alta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::select('marca_id',$marcas, $producto->marca_id, ['class' => 'form-control' . ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una marca']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Encargado') }}
            {{ Form::select('user_id',$users, $producto->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un encargado']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Status') }}
            {{ Form::select('status_id',$estados, $producto->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un status']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::select('modelo_id',$modelos, $producto->modelo_id, ['class' => 'form-control' . ($errors->has('modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un modelo']) }}
            {!! $errors->first('modelo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N. Serie') }}
            {{ Form::text('num_serie', $producto->num_serie, ['class' => 'form-control' . ($errors->has('num_serie') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un N. serie']) }}
            {!! $errors->first('num_serie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('categoria_id',$categorias, $producto->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una categoría']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Subcategoría') }}
            {{ Form::select('subcategoria_id',$subcategorias, $producto->subcategoria_id, ['class' => 'form-control' . ($errors->has('subcategoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Agreaga una subcategoría']) }}
            {!! $errors->first('subcategoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>