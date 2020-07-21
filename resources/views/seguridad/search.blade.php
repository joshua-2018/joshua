<!--AGREGAMOS UN FORMULARIO METODO DEL EN LA URL ENVIA ALMACEN/CATEGORIA  AUTOCOMPLETE APAGADO ,UUN FORMURARIO DE TIPO BUSQUEDA-->



<form action="seguridad" method="GET" autocomplete="off" >
@method('GET')
@csrf
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar...nombre apellido o dni" value="{{$searchText}}">
		<!--CLASS PPARA Q EL BOTON ME SALGA AL COSTADO DE NUESTRAA CAJA DE BUSQUEDA-->
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

</form>

