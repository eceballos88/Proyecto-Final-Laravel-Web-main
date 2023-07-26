<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear Coche</title>
    @include('template.encabezado')
    <!-- Agrega esto en la sección <head> o al final del <body> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('template.navbar')
<body>
    <h1>Registrar venta</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('venta.store') }}" class="">
        @csrf
        @method('post')
        <div>
            <label for="cliente_codigo">Código de cliente</label>
            <input type="number" name="cliente_codigo" placeholder="Cliente">
        </div>
        <div>
            {{-- <label for="coche_matricula">Matrícula del coche</label>
            <input type="text" name="coche_matricula" placeholder="Matrícula"> --}}

            {!! Form::label('coche_matricula', 'Matrícula del coche:') !!}
            {!! Form::select('coche_matricula', $coches->pluck('matricula', 'matricula')->all(), null, [
            'placeholder' => 'Seleccionar',
            ]) !!}
        </div>
        <br>
        <div>
            <label for="usuario_id">Id. de usuario</label>
            <input type="number" name="usuario_id" placeholder="Usuario">
        </div>
        <div>
            <label for="total">Total</label>
            <input type="text" name="total" placeholder="Total">
        </div>
        <br>
        <div>
            <label for="status">Status</label>
            <select name="status" placeholder="Status">
                <option value="1">Activo</option>
                <option value="0">Baja</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="Registrar venta"/>
        </div>
        
    </form>
    <br>
    <button>
        <a href="{{ route('venta.index') }}">Volver</a>
    </button>
    <br>
    <div>
@include('template.pie')
    </div>
</body>
</html>