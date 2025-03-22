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
        <h1 class="text-center text-primary mt-5">Editar Datos</h1>
        <form class="m-5" action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            @include('empleado.form', ['modo'=>'Editar'])
        </form>
    </div>
    @endsection
</body>
</html>