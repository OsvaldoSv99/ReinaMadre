@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Departamento</h2>
        <form action="{{route('departamentos.crear.guardar')}}" method="post">
            {{ csrf_field() }}
            <label for="">Nombre del Departamento</label>
            <input type="text" id="nombre_departamento" name="nombre_departamento" class="form-control col-lg-4">
            <br>
            <label for="">Empresa</label>
            <select name="id_empresa" id="id_empresa" class="form-control col-lg-4">
                <option value="">--Selecciona una opcion--</option>
                @foreach ($empresa as $emp)
                    <option value="{{$emp->id_empresa}}">{{$emp->nombre_empresa}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
    </center>
@endsection