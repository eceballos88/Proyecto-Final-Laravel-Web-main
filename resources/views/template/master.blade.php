<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    @include('template.encabezado')
</head>

<body>
    <div class="page">
        @include('template.navbar')
        @include('template.menu')
        @yield('contenido_central')

        @include('template.pie')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>

</body>

</html>
