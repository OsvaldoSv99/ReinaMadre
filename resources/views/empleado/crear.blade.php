@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Empleado</h2>
        <br>
        <form action="{{route('empleado.crear.guardar')}}" method="post">
            {{ csrf_field() }}
        <label for="">Nombre del Empleado *</label>
        <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control col-lg-4" required="required">
        <br>
        <label for="">Apellido Paterno *</label>
        <input type="text" name="ap_pat" id="ap_pat" class="form-control col-lg-4" required>
        <br>
        <label for="">Apellido Materno *</label>
        <input type="text" name="ap_mat" id="ap_mat" class="form-control col-lg-4" required>
        <br>
        <label for="">Fecha de Nacimiento *</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control col-lg-4" required>
        <br>
        <label for="">Telefono</label>
        <input type="number" name="telefono" id="telefono" class="form-control col-lg-4">
        <br>
        <label for="">Celular</label>
        <input type="number" name="celular" id="celular" class="form-control col-lg-4">
        <br>
        <label for="">Email *</label>
        <input type="email" name="email" id="email" class="form-control col-lg-4" required>
        <br>
        <label for="">Genero</label>
        
        <br>
        <input type="radio" name="genero" id="genero" value="Femenino">Femenino
        <input type="radio" name="genero" id="genero" value="Masculino">Masculino
        <br>
        <br>
        <label for="">Fecha de Ingreso *</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control col-lg-4" required>
        <br>
        <label for="">Empresa</label>
        <select name="id_empresa" id="id_empresa" class="form-control col-lg-4">
            <option value="">--Selecciona una opcion--</option>
            @foreach ($empresa as $emp)
            <option value="{{$emp->id_empresa}}">{{$emp->nombre_empresa}}</option>    
            @endforeach
        </select>
        <br>
        <label for="">Departamento</label>
        <select name="id_departamento" id="id_departamento" class="form-control col-lg-4">
            <option value="">--Selecciona una opcion--</option>
            @foreach ($departamentos as $dep)
                @foreach ($empresa as $em)
                <option value="{{$dep->id_departamento}}">{{$dep->nombre_departamento}} - {{$em->nombre_empresa}}</option>    
                @endforeach
            @endforeach
        </select>
        <br>
        <p class="font-italic">Los apartados marcados con asterisco son obligatorios</p>
        <p class="font-italic">La fecha de ingreso no podra ser modificada en el futuro</p>
        
        <br>
        <input type="submit" value="Enviar" class="btn btn-success">
        <br><br>
    </form>
    </center>
@endsection