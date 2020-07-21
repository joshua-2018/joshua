@extends('layouts.app')

@section('content')


	
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $usuario->name}}</h3>




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


 <form method="POST" action="{{ route('seguridad.update', ['seguridad' => $usuario->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
<div class="row container-fluid" >


  <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Nombre</label>

                            
                                <input id="name" type="text" class="form-control" name="name" value="{{$usuario->name}}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                               <div class="form-group">
                              <label for="apellidos"  class="col-md-12 control-label">Apellidos</label>
                             
                              <input class="form-control" type="text" name="apellidos" value="{{ $usuario->apellidos}}">
                              </div>
                        </div>



                         <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                               <div class="form-group">
                              <label for="dni"  class="col-md-12 control-label">DNI</label>
                             
                              <input class="form-control" type="text" name="dni" required autocomplete="dni"  value="{{ $usuario->dni }}">
                              </div>
                        </div>

                          <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                               <div class="form-group">
                              <label for="telefono"  class="col-md-12 control-label">Telefono</label>
                             
                              <input class="form-control" type="text" name="telefono" required autocomplete="telefono"  value="{{ $usuario->telefono}}">
                              </div>
                        </div>

                          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
                              <div class="form-group">
                            <label>Rol</label>
                              <select name="idrol" class="form-control">
                                @foreach($rol as $rol)
                                    <option  value="{{$rol->id}}"> {{$rol->name}} </option>
                                @endforeach

                              </select>
                             </div>
                       </div>


                       
                          <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">Correo</label>

                          
                                <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email}}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>









                        <div class="col-md-6">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Contraseña</label>

                            
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="col-md-6">

                          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-12 control-label">Confirmar Contraseña</label>

                          
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">

                         <div class="form-group ">
                           
                            <label for="adrress" class="col-md-12 control-label">Dirección</label>
                           
                           <input class="form-control" name="address" autocomplete="address" value="{{ $usuario->address}}"></input>
                            </div>
                        </div>

  


 <div class="col-lg-6   col-sm-12   col-md-12  col-xs-12">
                     <div class="form-group">
                       
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen"   class="form-control" >
                      
                      @if(($usuario->imagen)!="")
                      <img src="{{asset('imagenes/avatar/'.$usuario->imagen)}}" height="200px" width="200px">
                      
                      @endif
                    </div>
         
                </div>
     


</div>            

             <div class="form-group" style="margin-top:5% ">
              
              <button class="btn btn-danger" type="reset">Cancelar</button>

              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>


</form>


@endsection