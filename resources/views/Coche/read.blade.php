<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalles del Coche</title>
    @include('template.encabezado')
</head>

<body>
    @include('template.navbar')
    <h1>Detalles del Coche</h1>
    <table class="table table-bordered">
        <tr>
            <th>Matrícula</th>
            <td>{{ $coche->matricula }}</td>
        </tr>
        <tr>
            <th>Modelo</th>
            <td>{{ $coche->modelo }}</td>
        </tr>
        <tr>
            <th>Marca</th>
            <td>{{ $coche->marca }}</td>
        </tr>
        <tr>
            <th>Color</th>
            <td>{{ $coche->color }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ $coche->precio }}</td>
        </tr>
        @if ($coche->tipo == 1)
        <tr>
            <th>Unidades</th>
            <td>{{ $cocheNuevo->unidades }}</td>
        </tr>
        @else
        <tr>
            <th>Kilometraje</th>
            <td>{{ $cocheUsado->kilometraje }}</td>
        </tr>
        @endif
    </table>
    <a href="{{ route('Coche.index') }}" class="btn btn-primary">Regresar a la lista de Coches</a>
</body>

</html>

