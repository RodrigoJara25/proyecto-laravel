<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @extends('layouts.app')

    @section('content')
    <div class="container">

        @if(Session::has('mensaje'))
            {{ Session::get('mensaje') }}
        @endif

        <h1 class="text-center text-primary m-3">¡Hola, Bootstrap con Vite en Laravel!</h1>
        <h2 class="text-center text-secondary">Empleados</h2>

        <a class="btn btn-success m-3 ms-5" href="{{url('empleado/create')}}">Registrar nuevo empleado</a>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>
                    <img src="{{ asset('storage/'.$empleado->Foto) }}" alt="Foto de {{ $empleado->Nombre }}" width="100">
                        {{ $empleado->Foto }}
                    </td>
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->ApellidoPaterno }}</td>
                    <td>{{ $empleado->ApellidoMaterno }}</td>
                    <td>{{ $empleado->Edad }}</td>
                    <td>{{ $empleado->Correo }}</td>
                    <td>
                        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                        
                        <form action="{{url ('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Quieres Borrar?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @endsection
</body>
</html>