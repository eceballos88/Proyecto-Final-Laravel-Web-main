<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar venta</title>
    @include('template.encabezado')
    @include('template.navbar')

</head>
<body>
    
    <h1>Editar venta</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('venta.update', ['venta'=> $venta]) }}">
        @csrf
        @method('put')
        <div>
            <label for="cliente_codigo">Código de cliente</label>
            <input type="text" name="cliente_codigo" placeholder="Cliente" value="{{ $venta->cliente_codigo }}">
        </div>
        <br>
        <div>
            <label for="coche_matricula">Matrícula del coche</label>
            <input type="text" name="coche_matricula" placeholder="Matrícula" value="{{ $venta->coche_matricula }}">
        </div>
        <br>
        <div>
            <label for="usuario_id">Id. de usuario</label>
            <input type="text" name="usuario_id" placeholder="Usuario" value="{{ $venta->usuario_id }}">
        </div>
        <br>
        <div>
            <label for="total">Total</label>
            <input type="number" name="total" placeholder="Total" value="{{ $venta->total }}">
        </div>
        <br>
        <div>
            <label for="status">Status</label>
            <input type="" name="status" placeholder="Status" value="{{ $venta->status }}" readonly>
        </div>
        
        <br>
        <div>
            <input type="submit" value="Guardar cambios"/>
        </div>
    </form>
    <br>
    <button>
        <a href="{{ route('venta.index') }}">Volver</a>
    </button>
</body>
@include('template.pie')

</html>