@extends('layouts.app')

@section('content')
  <div class="row">


          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            	<div class="form-group">
               <label for="">Datos del Usuario</label>
            	    <p>{{$usuario->name}} {{$usuario->apellidos}}</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
               <label for="telefonor">Celular o Telefono</label>
                  <p>{{$usuario->telefono}}</p>
            </div>
          </div>
             
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                       <label>DNI</label>
                    <p>{{$usuario->dni}}</p>
               </div>
              </div>
               <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                       <label>Correo</label>
                    <p>{{$usuario->email}}</p>
               </div>
              </div>
             
 <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                       <label>Direccion</label>
                    <p>{{$usuario->address}}</p>
               </div>
              </div>
              
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
             <label>Avatar</label>
                <div class="form-group">
                      
                    <img src="{{asset('imagenes/articulo/'.$usuario->imagen)}}" alt="{{$usuario->name}}"  class="img-thumbnail" style="width: 130px;height: 225px"  >
               </div>
              </div>
                  


           

</div>


@endsection