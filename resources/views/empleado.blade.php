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
    
    <h1>Empleados</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('empleado.crear') }}">Crear Nuevo Empleado</a>
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id Empleado</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha Ingreso</th>
            <th scope="col">salario</th>
            <th scope="col">Crear empleado</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $item)
            <tr>
                <th scope="row">{{$item->idempleado}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->fechaIngreso}}</td>
                <td>{{$item->salario}}</td>
                <td><a class="btn btn-primary" href="{{ route('empleado.crear') }}">Crear</a></td>
                
            @endforeach
          
        </tbody>
      </table>        

</body>
</html>