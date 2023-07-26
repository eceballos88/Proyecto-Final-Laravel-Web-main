<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalle de venta</title>
    @include('template.encabezado')
    @include('template.navbar')

</head>
<body>
    <h1>Detalle de venta</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('venta.read_only', ['venta'=> $venta]) }}">
        @csrf
        @method('put')
        <div>
            <label for="cliente_codigo">Código de cliente</label>
            <input type="text" name="cliente_codigo" placeholder="Cliente" value="{{ $venta->cliente_codigo }}" disabled>
        </div>
        <div>
            <label for="coche_matricula">Matrícula del coche</label>
            <input type="text" name="coche_matricula" placeholder="Matrícula" value="{{ $venta->coche_matricula }}" disabled>
        </div>
        <div>
            <label for="usuario_id">Id. de usuario</label>
            <input type="text" name="usuario_id" placeholder="Usuario" value="{{ $venta->usuario_id }}" disabled>
        </div>
        <div>
            <label for="total">Total</label>
            <input type="text" name="total" placeholder="Total" value="{{ $venta->usuario_id }}" disabled>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" placeholder="Status" value="{{ $venta->status }}" disabled>
        </div>
    </form>
    <br>
    <button>
        <a href="{{ route('venta.index') }}">Volver</a>
    </button>
    <br>
    @include('template.pie')
</body>
</html>