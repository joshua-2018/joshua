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
  <form action="{{route('seguridad.store')}}" method="POST" autocomplete="off"  class="container" enctype="multipart/form-data">
     
      @method('POST')
      
       @csrf



            <div class="row container-fluid">
         
            <div class="row">
                            <p class="col-lg-12   col-sm-12   col-md-12  col-xs-12" >Dato obligatorios</p>


                         <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">

                          <div class="form-group ">
                            <label for="name" class="col-md-12">{{ __('Nombre') }}</label>
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                        <div class="form-group ">
                            <label for="last_name"  class="col-md-12">Apellidos</label>
                            
                            <input class="form-control" type="text" name="apellidos" value="{{ old('apellidos') }}">
                            </div>
                    </div>




                     <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                        <div class="form-group ">
                            <label for="dni"  class="col-md-12">DNI</label>
                            
                            <input class="form-control" type="text" name="dni" value="{{ old('dni') }}" required autocomplete="dni" value="{{ old('dni') }}">
                            </div>
                    </div>


                



                        <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">

                           <div class="form-group ">
                            <label for="email" class="col-md-12">{{ __('Correo') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                             <div class="form-group ">
                            <label for="password" class="col-md-12">{{ __('Contraseña') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <div class="form-group ">
                            <label for="password-confirm" class="col-md-12">{{ __('Confirmar Contraseña') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">

                            <div class="form-group ">
                           
                               <label for="adrress" class="col-md-12">Dirección</label>
                        
                                <input class="form-control" name="address" required autocomplete="address" placeholder="Dirección" value="{{ old('address') }}">
                            </div>
                        </div>




                    <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                        <div class="form-group ">
                            <label for="telefono"  class="col-md-12">Telefono</label>
                            
                            <input class="form-control" type="text" name="telefono"  required autocomplete="telefono" value="{{ old('telefono') }}">
                            </div>
                    </div>


                        


<p class="col-lg-12  col-sm-12   col-md-12 col-xs-12">Dato opcional</p>



                   <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                     <div class="form-group">
                       
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen"   class="form-control" value="{{ old('imagen') }}" >
                    </div>
         
                   </div>


<br>

                <div class="form-group" style="margin-top:5% ">
              
              <button class="btn btn-danger" type="reset">Cancelar</button>

              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>


                </div>

            </div>
                     
              

    </form>		
          







@endsection