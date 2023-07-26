<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ver Mecánicos</title>
    @include('template.encabezado')
</head>

<body>
    <div class="page">
        @include('template.navbar')
        <br>
        <h1>Listado de Mecánicos</h1>
        <div class="py-3" style="position: relative; text-align: right; padding-right: 1cm;">
            <button type="button" class="btn btn-primary btn-lg" style="align" onclick="location.href='mecanico/create'">Crear Mecánico</button>
        </div>
        <div class="mx-5 mb-5">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Fecha Contratacion</th>
                        <th scope="col">Salario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                @foreach ($mecanicos as $mecanico)
                    <tbody class="table-group-divider">
                        <tr>
                            <td>{!! $mecanico->id !!}</td>
                            <td>{!! $mecanico->nombre !!}</td>
                            <td>{!! $mecanico->apPaterno !!}</td>
                            <td>{!! $mecanico->apMaterno !!}</td>
                            <td>{!! $mecanico->fecha_contratacion !!}</td>
                            <td>{!! $mecanico->salario !!}</td>
                            <td>
                                <a href="{!! 'mecanico/' . $mecanico->id !!}">Detalle</a>
                                <a href="{!! 'mecanico/' . $mecanico->id . '/edit' !!}">Editar</a>

                                {!! Form::open(['method' => 'DELETE', 'url' => '/mecanico/' . $mecanico->id]) !!}
                                {!! Form::submit('Eliminar') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        @include('template.pie')
        <br />
    </div>
</body>

</html>
