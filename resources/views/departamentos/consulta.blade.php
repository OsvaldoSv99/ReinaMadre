@extends('layout')
@section('contenido')
    <center>
        <h2>Departamentos</h2>
        <br>
        <a href="{{route('departamentos.crear')}}" class="btn btn-info">Nuevo Departamento</a>
        <br>
        <table class="table" id="table">
            <thead>
                <th>Id Departamento</th>
                <th>Nombre Departamento</th>
                <th>Empresa</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                @foreach ($departamentos as $dep)
                    <tr>
                        <td>{{$dep->id_departamento}}</td>
                        <td>{{$dep->nombre_departamento}}</td>
                        <td>{{$dep->nombre_empresa}}</td>
                        <td>
                            <a href="{{route('departamentos.editar',$dep->id_departamento)}}" class="btn btn-primary">Editar</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$dep->id_departamento}}">
                                Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('departamentos.eliminar')
                        @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </center>
@endsection