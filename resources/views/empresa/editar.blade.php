@extends('layout')
@section('contenido')
<center>
    <h2>Nueva Empresa</h2>
    <br>
    <form action="{{route('empresa.editar.guardar')}}" method="post">
        {{ csrf_field() }}
        <label for="">Id Empresa</label>
        <input type="text" name="id_empresa" id="id_empresa" class="form-control col-lg-4" value="{{$empresa->id_empresa}}" readonly>
        <label for="">Nombre de la empresa</label>
        <br>
        <input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control col-lg-4" value="{{$empresa->nombre_empresa}}">
        <br>
        <input type="submit" class="btn btn-success">
    </form>
</center>
@endsection