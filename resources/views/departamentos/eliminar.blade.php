{{-- Modal --}}
<div class="modal fade" id="modal-eliminar-{{$dep->id_departamento}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Departamentos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas Eliminar el Registro "{{$dep->nombre_departamento}}"
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{route('departamentos.eliminar',$dep->id_departamento)}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  