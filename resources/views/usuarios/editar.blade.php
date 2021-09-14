@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Usuario</h2>
        <form action="{{route("usuarios.editar.guardar")}}" method="post">
            {{ csrf_field() }}
            <label for="">Id Usuarios</label>
            <input type="text" name="id" id="id" class="form-control col-lg-4" value="{{$user->id}}" readonly>
            <label for="">Nombre</label>
            <input type="text" id="name" name="name" class="form-control col-lg-4" value="{{$user->name}}">
            <br>
            <label for="">Apellido Paterno</label>
            <input type="text" class="form-control col-lg-4" id="ap_pat" name="ap_pat" value="{{$user->ap_pat}}">
            <br>
            <label for="">Apellido Materno</label>
            <input type="text" name="ap_mat" id="ap_mat" class="form-control col-lg-4" value="{{$user->ap_mat}}">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" id="email" class="form-control col-lg-4" value="{{$user->email}}">
            <br>
            <input type="submit" value="Enviar" class="btn btn-success">
            <br><br>
        </form>
    </center>
@endsection