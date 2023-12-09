<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

    <div class="content">
        <a href="{{ route('producto.index') }}">
            <div class="tarjeta centrar">
                <h1>Prodcutos</h1>
            </div>
        </a>

        <a href="{{ route('proveedor.index') }}"> 
            <div class="tarjeta centrar">
                <h1>Provedores</h1>
                <img src="" alt="">
            </div>
        </a>

        <a href="{{ route('empleado.index') }}"> 
            <div class="tarjeta centrar">
                <h1>Empleados</h1>
               
            </div>

        </a>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>