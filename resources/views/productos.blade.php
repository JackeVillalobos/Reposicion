<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Productos</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('producto.crear') }}">Crear Nuevo Empleado</a>
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Prexio</th>
            <th scope="col">Stock</th>
            <th scope="col">pagaIsv</th>
            <th scope="col">Crear empleado</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->pagaIsv}}</td>
                <td><a class="btn btn-primary" href="{{ route('producto.crear') }}">Crear</a></td>
              </tr>
            @endforeach
          
        </tbody>
      </table>        

</body>
</html>