<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$pro->id}}">
	

<form action="{{ route('proceso.destroy',['proceso' => $pro->id]) }}" method="POST">
  @method('delete')
      
       @csrf	
	<div class="modal-dialog">
		<div class="modal-content">


			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">X</span>
                </button>
                <h4 class="modal-title">Eliminar Usuario</h4>
			</div>


			<div class="modal-body">
				<p>Confirme si desea Eliminar el Usuario</p>
			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>



		</div>
	</div>
	
	</form>

</div>