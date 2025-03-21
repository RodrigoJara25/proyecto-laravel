<input class="form-control" type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre" placeholder="Nombre">
        <br>
        <input class="form-control" type="text" name="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}" id="ApellidoPaterno" placeholder="Apellido Paterno">
        <br>
        <input class="form-control" type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno" placeholder="Apellido Materno">
        <br>
        <input class="form-control" type="text" name="Correo" value="{{$empleado->Correo}}" id="Correo" placeholder="Correo">
        <br>
        <input class="form-control" type="text" name="Edad" value="{{$empleado->Edad}}" id="Edad" placeholder="Edad">
        <br>
        <input class="form-control" type="text" name="Direccion" value="{{$empleado->Direccion}}" id="Direccion" placeholder="Direccion">
        <br>
        <label for="Foto">Foto:</label>
        {{$empleado->Foto}}
        <input class="form-control" type="file" name="Foto" id="Foto">
        <br>
        <input class="form-control" type="submit" value="Guardar">