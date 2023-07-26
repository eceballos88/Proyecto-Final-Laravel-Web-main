<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Mecánico</title>
    @include('template.encabezado')
</head>

<body>
    @include('template.navbar')
    <h1>Editar Mecánico</h1>

    {!! Form::open(['method' => 'PATCH', 'url' => 'mecanico/' . $parametros->id]) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre Persona') !!}
        {!! Form::text('nombre', $parametros->nombre, ['placeholder' => '', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('apPaterno', 'apellido paterno') !!}
        {!! Form::text('apPaterno', $parametros->apPaterno, ['placeholder' => '', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('apMaterno', 'apellido materno') !!}
        {!! Form::text('apMaterno', $parametros->apMaterno, ['placeholder' => '', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('fecha_contratacion', 'fecha contratacion') !!}
        {!! Form::text('fecha_contratacion', $parametros->fecha_contratacion, [
            'placeholder' => '',
            'class' => 'form-control',
        ]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('salario', 'salario') !!}
        {!! Form::text('salario', $parametros->salario, ['placeholder' => '', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('estatus', 'Estatus') !!}
        {!! Form::text('estatus', $parametros->estatus, ['placeholder' => '', 'class' => 'form-control']) !!}
    </div>

    <div class="center-btn">
        {!! Form::submit('Guardar', ['class' => 'btn-edit btn btn-primary']) !!}

    </div>
    {!! Form::close() !!}

</body>

</html>

