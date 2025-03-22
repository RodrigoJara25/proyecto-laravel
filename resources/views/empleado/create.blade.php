<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form class="m-5" action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre">
        <br>
        <input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" placeholder="Apellido Paterno">
        <br>
        <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" placeholder="Apellido Materno">
        <br>
        <input class="form-control" type="text" name="Correo" id="Correo" placeholder="Correo">
        <br>
        <input class="form-control" type="text" name="Edad" id="Edad" placeholder="Edad">
        <br>
        <input class="form-control" type="text" name="Direccion" id="Direccion" placeholder="Direccion">
        <br>
        <label for="Foto">Foto:</label>
        <input class="form-control" type="file" name="Foto" id="Foto">
        <br>
        <input class="form-control" type="submit" value="Guardar">
    </form>
    <br>
    <a class="btn btn-primary m-3 ms-5" href="{{url('empleado')}}">Regresar</a>
</body>
</html>