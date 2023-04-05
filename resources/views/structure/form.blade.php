<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $structure->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $structure->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $structure->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $structure->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $structure->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $structure->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipios') }}
            {{ Form::text('municipios', $structure->municipios, ['class' => 'form-control' . ($errors->has('municipios') ? ' is-invalid' : ''), 'placeholder' => 'Municipios']) }}
            {!! $errors->first('municipios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('secciones_asignadas') }}
            {{ Form::text('secciones_asignadas', $structure->secciones_asignadas, ['class' => 'form-control' . ($errors->has('secciones_asignadas') ? ' is-invalid' : ''), 'placeholder' => 'Secciones Asignadas']) }}
            {!! $errors->first('secciones_asignadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('secciones') }}
            {{ Form::text('secciones', $structure->secciones, ['class' => 'form-control' . ($errors->has('secciones') ? ' is-invalid' : ''), 'placeholder' => 'Secciones']) }}
            {!! $errors->first('secciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('avance') }}
            {{ Form::text('avance', $structure->avance, ['class' => 'form-control' . ($errors->has('avance') ? ' is-invalid' : ''), 'placeholder' => 'Avance']) }}
            {!! $errors->first('avance', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3 text-center">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="{{ route('structures.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>