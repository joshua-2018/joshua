@extends('layouts.app')

@section('content')
  <div class="row">


          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            	<div class="form-group">
               <label for="">Nombre</label>
            	    <p>{{$proceso->name}} </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
               <label for="telefonor">descripcion</label>
                  <p>{{$proceso->telefono}}</p>
            </div>
          </div>
             
      
              
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
             <label>Avatar</label>
                <div class="form-group">
                      
                    <img src="{{asset('archivo'.$proceso->archivo)}}" alt="{{$proceso->name}}"  class="img-thumbnail" style="width: 130px;height: 225px"  >
               </div>
              </div>
                  


           

</div>


@endsection