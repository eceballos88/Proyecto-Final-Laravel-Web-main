<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalles del Mecánico</title>
    @include('template.encabezado')
</head>

<body>
    @include('template.navbar')
    <h1>Detalles del Mecánico</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <td>{{ $parametros->nombre }}</td>
        </tr>
        <tr>
            <th>Apellido Paterno</th>
            <td>{{ $parametros->apPaterno }}</td>
        </tr>
        <tr>
            <th>Apellido Materno</th>
            <td>{{ $parametros->apMaterno }}</td>
        </tr>
        <tr>
            <th>Fecha de Contratación</th>
            <td>{{ $parametros->fecha_contratacion }}</td>
        </tr>
        <tr>
            <th>Salario</th>
            <td>{{ $parametros->salario }}</td>
        </tr>
        <tr>
            <th>Estatus</th>
            <td>{{ $parametros->estatus }}</td>
        </tr>
    </table>
</body>

</html>
