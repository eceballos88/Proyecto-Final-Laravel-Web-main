<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ver ventas</title>
    @include('template.encabezado')
</head>

<body>
    <div class="page">
        @include('template.navbar')
        <br>
        <h1>Listado de ventas</h1>
        <div class="py-3" style="position: relative; text-align: right; padding-right: 1cm;">
            <button type="button" class="btn btn-primary btn-lg" style="align" onclick="location.href='venta/create'">Registrar venta</button>
        </div>
        <div class="mx-5 mb-5">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Matricula</th>
                <th>Usuario</th>
                <th>Total</th>
                <th>Status</th>
                <th>Creación</th>
                <th>Modificación</th>
                <th colspan="3">Acciones</th>
            </tr>
            @foreach ( $ventas as $venta )
                <tr>
                    <td> {{ $venta -> id }}</td>
                    <td> {{ $venta -> cliente_codigo }}</td>
                    <td> {{ $venta -> coche_matricula }}</td>
                    <td> {{ $venta -> usuario_id }}</td>
                    <td> {{ $venta -> total }}</td>
                    <td> {{ $venta -> status }}</td>
                    <td> {{ $venta -> created_at }}</td>
                    <td> {{ $venta -> updated_at }}</td>
                    <td>
                        <a href="{{ route('venta.edit',['venta'=> $venta]) }}">Editar</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('venta.delete', ['venta'=> $venta]) }}">
                            @csrf
                            @method('put')
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('venta.read_only',['venta'=> $venta]) }}">Detalle</a>
                    </td>
                    {{-- <td> {{ $venta -> cliente_codigo }}</td> --}}
                </tr>
            @endforeach
        </table>
        <button value="Registrar venta">
            <a href="{{ route('venta.create') }}">Registrar venta</a>
        </button>
       
    </div>
</body>

@include('template.pie')

</html>