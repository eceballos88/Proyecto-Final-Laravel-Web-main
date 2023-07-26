<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ver Coches</title>
    @include('template.encabezado')
</head>

<body>
    <div class="page">
        @include('template.navbar')
        <br>
        <h1>Listado de Coches</h1>
        <div class="py-3" style="position: relative; text-align: right; padding-right: 1cm;">
            <button type="button" class="btn btn-primary btn-lg" style="align" onclick="location.href='Coche/create'">Crear Coche</button>
        </div>
        <div class="mx-5 mb-5">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Color</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                @foreach ($coches as $coche)
                    <tbody class="table-group-divider">
                        <tr>
                            <td>{!! $coche->id !!}</td>
                            <td>{!! $coche->matricula !!}</td>
                            <td>{!! $coche->modelo !!}</td>
                            <td>{!! $coche->marca !!}</td>
                            <td>{!! $coche->color !!}</td>
                            <td>{!! $coche->precio !!}</td>
                            <td>
                                <a href="{!! 'Coche/' . $coche->matricula !!}">Detalle</a>
                                <a href="{!! 'Coche/' . $coche->matricula . '/edit' !!}">Editar</a>

                                {!! Form::open(['method' => 'DELETE', 'url' => '/Coche/' . $coche->matricula]) !!}
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
