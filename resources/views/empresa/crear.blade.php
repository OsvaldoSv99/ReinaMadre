@extends('layout')
@section('contenido')
<center>
    <h2>Nueva Empresa</h2>
    <br>
    <form action="{{route('empresa.crear.guardar')}}" method="post">
        {{ csrf_field() }}
        <label for="">Nombre de la empresa</label>
        <br>
        <input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control col-lg-4">
        <br>
        <input type="submit" class="btn btn-success">
    </form>
</center>
@endsection