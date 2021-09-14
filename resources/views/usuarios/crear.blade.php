@extends('layout')
@section('contenido')
    <center>
        <h2>Nuevo Usuario</h2>
        <form action="{{route("usuarios.crear.guardar")}}" method="post">
            {{ csrf_field() }}
            <label for="">Nombre</label>
            <input type="text" id="name" name="name" class="form-control col-lg-4">
            <br>
            <label for="">Apellido Paterno</label>
            <input type="text" class="form-control col-lg-4" id="ap_pat" name="ap_pat">
            <br>
            <label for="">Apellido Materno</label>
            <input type="text" name="ap_mat" id="ap_mat" class="form-control col-lg-4">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" id="email" class="form-control col-lg-4">
            <br>
            <label for="">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control col-lg-4">
            <br>
            <input type="submit" value="Enviar" class="btn btn-success">
            <br><br>
        </form>
    </center>
@endsection