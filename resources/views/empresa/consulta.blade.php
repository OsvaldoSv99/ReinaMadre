@extends('layout')
@section('contenido')
    <center>
        <h2>Empresas</h2>
        <br>
        <a href="{{route('empresa.crear')}}" class="btn btn-info">Nueva Empresa</a>
        <br>
        <table class="table" id="table">
            <thead>
                <th>Id Empresa</th>
                <th>Nombre de la Empresa</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                @foreach ($empresa as $emp)
                    <tr>
                        <td>{{$emp->id_empresa}}</td>
                        <td>{{$emp->nombre_empresa}}</td>
                        <td>
                            <a href="{{route('empresa.departamentos',$emp->id_empresa)}}" class="btn btn-success">Departamentos</a>
                            <a href="{{route('empresa.editar',$emp->id_empresa)}}" class="btn btn-primary">Editar</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$emp->id_empresa}}">
                                Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('empresa.eliminar')
                    
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </center>
@endsection