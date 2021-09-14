{{-- Modal --}}
<div class="modal fade" id="modal-eliminar-{{$emp->id_empresa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Empresas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas Eliminar el Registro "{{$emp->nombre_empresa}}"
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{route('empresa.eliminar',$emp->id_empresa)}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  