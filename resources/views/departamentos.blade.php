@extends('layout')
@section('contenido')
    <center>
        <h2>Departamentos de la empresa</h2>
        <table class="table">
            <thead>
                <th>Id Departamento</th>
                <th>Nombre</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($empresa as $emp)
                    <tr>
                        <td>{{$emp->id_departamento}}</td>
                        <td>{{$emp->nombre_departamento}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
@endsection