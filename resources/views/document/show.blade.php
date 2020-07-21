@extends('layouts.app')

@section('content')
  <div class="row">


          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            	<div class="form-group">
               <label for="">Nombre</label>
            	    <p style="color:none">{{$documento->name}} </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
               <label for="telefonor">descripcion</label>
                  <p>{{$documento->telefono}}</p>
            </div>
          </div>
             
      
        


           

</div>


@endsection