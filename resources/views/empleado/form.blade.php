<input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre" placeholder="Nombre">
<br>
<input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}" id="ApellidoPaterno" placeholder="Apellido Paterno">
<br>
<input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" id="ApellidoMaterno" placeholder="Apellido Materno">
<br>
<input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo" placeholder="Correo">
<br>
<input class="form-control" type="text" name="Edad" value="{{ isset($empleado->Edad) ? $empleado->Edad : '' }}" id="Edad" placeholder="Edad">
<br>
<input class="form-control" type="text" name="Direccion" value="{{ isset($empleado->Direccion) ? $empleado->Direccion : '' }}" id="Direccion" placeholder="Direccion">
<br>
<label for="Foto">Foto:</label>
@if(isset($empleado->Foto))
    <img src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" width="300">
@endif
<input class="form-control" type="file" name="Foto" id="Foto">
<br>
<input class="form-control" type="submit" value="{{$modo}}">
<br>
<a class="btn btn-primary m-3 ms-5" href="{{ url('empleado') }}">Regresar</a>