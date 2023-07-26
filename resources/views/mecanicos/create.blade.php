<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear Mecánico</title>
    @include('template.encabezado')
</head>

<body>
    @include('template.navbar')
    <h1>Crear Mecánico</h1>

    {!! Form::open(['url'=>'/mecanico']) !!}

<div class="form-group">    
    {!! Form::label ('nombre','Nombre Persona') !!}
    {!! Form::text ('nombre',null,['placeholder'=>'', "class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label ('apPaterno','apellido Paterno') !!}
    {!! Form::text ('apPaterno',null,['placeholder'=>'', "class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label ('apMaterno','apellido materno') !!}
    {!! Form::text ('apMaterno',null,['placeholder'=>'', "class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha_contratacion', 'Fecha de contratacion:') !!}
    {!! Form::date('fecha_contratacion', null, ['placeholder'=>'', "class"=>"form-control"]) !!}

</div>

<div class="form-group">
    {!! Form::label ('salario','salario') !!}
    {!! Form::text ('salario',null,['placeholder'=>'', "class"=>"form-control"]) !!}
</div>

<div class="form-group">

    {!! Form::label ('estatus','Estatus') !!}
    {!! Form::text ('estatus',null,['placeholder'=>'', "class"=>"form-control"]) !!}
</div>


<div class="center-btn">
    {!! Form::submit('Insertar', ['class' => 'btn-edit btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

</body>

</html>