@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Departamento</h2>
        <br>
        <form action="{{route('departamentos.editar.guardar')}}" method="post">
            {{ csrf_field() }}
            <label for="">Id Departamento</label>
            <input type="text" id="id_departamento" name="id_departamento" class="form-control col-lg-4" value="{{$departamentos->id_departamento}}" readonly>
            <br>
            <label for="">Nombre del Departamento</label>
            <input type="text" id="nombre_departamento" name="nombre_departamento" class="form-control col-lg-4" value="{{$departamentos->nombre_departamento}}">
            <br>
            <label for="">Empresa</label>
            <select name="id_empresa" id="id_empresa" class="form-control col-lg-4">
                <option value="">--Selecciona una opcion--</option>
                @foreach ($empresa as $emp)
                    <option value="{{$emp->id_empresa}}" @if ($departamentos->id_empresa == $emp->id_empresa)
                        selected
                    @endif >{{$emp->nombre_empresa}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
    </center>
@endsection