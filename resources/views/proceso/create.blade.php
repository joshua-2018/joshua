@extends('layouts.app')

@section('content')

<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



			<h3>Nuevo Usuario</h3>


			<!--SI LOS ERRORES SON DE  LLLAMAMOS Y MOSTRAMOS LOS ERRORES-->
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

          <!--FIN DEL FILTRO DE ERRORES LOS ERRORES SON DE  LLLAMAMOS Y MOSTRAMOS LOS ERRORES-->



    </div>
  </div>
  <form action="{{route('proceso.store')}}" method="POST" autocomplete="off"  class="container" enctype="multipart/form-data">
     
      @method('POST')
      
       @csrf



            <div class="row container-fluid">
         
            <div class="row">
                     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              
                       <div class="form-group">

                            <label for="nombre">Nombre</label>
                          <input type="text" name="name" required value="{{old('name')}}" class="form-control" placeholder="Nombre...">
                        </div>


                     </div>
             






               <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                 <div class="form-group">
                   
                   <label for="descripcion">Descripcion</label>
                   <input type="text" name="description" value="{{old('description')}}"  class="form-control" placeholder="descripcion del articulo....">
                   </div>
         
                </div>

                 

                 <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                   <div class="form-group">
                   
                      <label for="archivo">Archivo</label>
                      <input type="file" name="archivo"   class="form-control" >
                    </div>
         
                </div>


                         


                  <br>
                  <div class="col-lg-8   col-sm-8   col-md-8  col-xs-12">

                <div class="form-group" style="margin-top:5% ">
              
                  <button class="btn btn-danger" type="reset">Cancelar</button>

                  <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
                </div>


                </div>

            </div>
                     
              

    </form>		
          







@endsection