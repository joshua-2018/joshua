
<form action="document" method="GET" autocomplete="off" >
@method('GET')
@csrf
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar...nombre " value="{{$searchText}}">
		<!--CLASS PPARA Q EL BOTON ME SALGA AL COSTADO DE NUESTRAA CAJA DE BUSQUEDA-->
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

</form>
