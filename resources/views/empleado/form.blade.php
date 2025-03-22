@if(count($errors)> 0)
        <div class="alert alert-danger" role="alert">
                <ul>
                @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                @endforeach
                </ul>
        </div>
@endif

<input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre" placeholder="Nombre">
<br>
<input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno" placeholder="Apellido Paterno">
<br>
<input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno" placeholder="Apellido Materno">
<br>
<input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo" placeholder="Correo">
<br>
<input class="form-control" type="text" name="Edad" value="{{ isset($empleado->Edad) ? $empleado->Edad : old('Edad') }}" id="Edad" placeholder="Edad">
<br>
<input class="form-control" type="text" name="Direccion" value="{{ isset($empleado->Direccion) ? $empleado->Direccion : old('Nombre') }}" id="Direccion" placeholder="Direccion">
<br>
<label for="Foto">Foto:</label>
@if(isset($empleado->Foto))
    <img class="img-thumbnail" src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" width="300">
@endif
<input class="form-control" type="file" name="Foto" id="Foto">
<br>
<input type="submit" class="btn btn-success" value="{{$modo}}">
<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>                                                             