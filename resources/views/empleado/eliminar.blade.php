{{-- Modal --}}
<div class="modal fade" id="modal-eliminar-{{$em->id_empleado}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Empleados</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas Eliminar el Registro "{{$em->nombre_empleado}} {{$em->ap_pat}} {{$em->ap_mat}}"
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{route('empleado.eliminar',$em->id_empleado)}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  