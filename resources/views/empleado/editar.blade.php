@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Empleado</h2>
        <br>
        <form action="{{route('empleado.editar.guardar')}}" method="post">
            {{ csrf_field() }}
            <label for="">Id Empleado</label>
            <input type="text" id="id_empleado" name="id_empleado" class="form-control col-lg-4" value="{{$empleado->id_empleado}}" readonly>
            <br>
        <label for="">Nombre del Empleado *</label>
        <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control col-lg-4" required="required" value="{{$empleado->nombre_empleado}}">
        <br>
        <label for="">Apellido Paterno *</label>
        <input type="text" name="ap_pat" id="ap_pat" class="form-control col-lg-4" required value="{{$empleado->ap_pat}}">
        <br>
        <label for="">Apellido Materno *</label>
        <input type="text" name="ap_mat" id="ap_mat" class="form-control col-lg-4" required value="{{$empleado->ap_mat}}">
        <br>
        <label for="">Fecha de Nacimiento *</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control col-lg-4" required value="{{$empleado->fecha_nacimiento}}">
        <br>
        <label for="">Telefono</label>
        <input type="number" name="telefono" id="telefono" class="form-control col-lg-4" value="{{$empleado->telefono}}">
        <br>
        <label for="">Celular</label>
        <input type="number" name="celular" id="celular" class="form-control col-lg-4" value="{{$empleado->celular}}">
        <br>
        <label for="">Email *</label>
        <input type="email" name="email" id="email" class="form-control col-lg-4" required value="{{$empleado->email}}">
        <br>
        <label for="">Genero</label>
        <br>
        <input type="radio" name="genero" id="genero" value="Femenino" checked="checked">Femenino
        <input type="radio" name="genero" id="genero" value="Masculino">Masculino
        <br><br>
        <label for="">Fecha de Ingreso *</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control col-lg-4" required value="{{$empleado->fecha_ingreso}}" readonly>
        <br>
        <label for="">Empresa</label>
        <select name="id_empresa" id="id_empresa" class="form-control col-lg-4">
            <option value="">--Selecciona una opcion--</option>
            @foreach ($empresa as $emp)
            <option value="{{$emp->id_empresa}}" @if ($empleado->id_empresa == $emp->id_empresa)
                selected
            @endif 
                >{{$emp->nombre_empresa}}</option>    
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
        <p class="font-italic">Los apartados marcados con asterisco son obligatorios</p>
        <p class="font-italic">La fecha de ingreso no podra ser modificada en el futuro</p>
        
        <br>
        <input type="submit" value="Enviar" class="btn btn-success">
        <br><br>
    </form>
    </center>
@endsection