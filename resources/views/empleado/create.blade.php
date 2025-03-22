<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1 class="text-center text-primary mt-5">Registrar Empleado</h1>
        <form class="m-5" action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('empleado.form', ['modo'=>'Crear'])
        </form>
    </div>
    @endsection
</body>
</html>