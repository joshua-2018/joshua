@extends('layouts.app')

@section('content')


	
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $proceso->name}}</h3>




			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif


    </div>
    </div>


 <form method="POST" action="{{ route('proceso.update', ['proceso' => $proceso->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
<div class="row container-fluid" >



                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              
                       <div class="form-group">

                            <label for="nombre">Nombre</label>
                          <input type="text" name="name" required value="{{$proceso->name}}" class="form-control" placeholder="Nombre...">
                        </div>


                     </div>
             






               <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                 <div class="form-group">
                   
                   <label for="descripcion">Descripcion</label>
                   <input type="text" name="description" value="{{$proceso->description}}"  class="form-control" placeholder="descripcion del articulo....">
                   </div>
         
                </div>

                 

                 <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                   <div class="form-group">
                   
                      <input type="file" name="archivo"   class="form-control" >
                      <img src="{{asset('archivo/'.$proceso->archivo)}}" alt="{{$proceso->name}}"  class="img-thumbnail" style="width: 130px;height: 225px"  >
                    </div>
         
                </div>

                       


                    
  




</div>            

             <div class="form-group" style="margin-top:5% ">
              
              <button class="btn btn-danger" type="reset">Cancelar</button>

              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>


</form>


@endsection