@extends('layout')
@section('contenido')
    <center>
        <h2>Usuarios</h2>
        <a href="{{route("register")}}" class="btn btn-info">Nuevo Usuario</a>
        <br>
        <table class="table">
            <thead>
                <th>Id Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                @foreach ($user as $u)
                 <tr>
                    <td>{{$u->id}}</td>     
                    <td>{{$u->name}} {{$u->ap_pat}} {{$u->ap_mat}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <a href="{{route("usuarios.editar",$u->id)}}" class="btn btn-primary">Editar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$u->id}}">
                            Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('usuarios.eliminar')
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </center>
@endsection