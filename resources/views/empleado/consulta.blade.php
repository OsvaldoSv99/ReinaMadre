@extends('layout')
@section('contenido')
<center>
    <h2>Empleados</h2>
    <br>
    <a href="{{route("empleado.crear")}}" class="btn btn-info">Nuevo Empleado</a>
    <br>
    <table class="table" id="table">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Fecha de Ingreso</th>
            <th>Empresa</th>
            <th>Departamento</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <tr>
            @foreach ($empleado as $em)
             <td>{{$em->id_empleado}}</td>   
             <td>{{$em->nombre_empleado}} {{$em->ap_pat}} {{$em->ap_mat}}</td>
             <td>{{$em->fecha_nacimiento}}</td>
             <td>{{$em->telefono}}</td>
             <td>{{$em->celular}}</td>
             <td>{{$em->email}}</td>
             <td>{{$em->genero}}</td>
             <td>{{$em->fecha_ingreso}}</td>
             <td>{{$em->nombre_empresa}}</td>
            <td>{{$em->id_departamento}}</td>
             <td>
                 <a href="{{route('empleado.editar',$em->id_empleado)}}" class="btn btn-primary">Editar</a>
                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$em->id_empleado}}">
                    Eliminar
                    </button>
                </td>
            </tr>
            @include('empleado.eliminar')
            @endforeach
        </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</center>
    
@endsection