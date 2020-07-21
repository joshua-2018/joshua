@extends('store.template')

@section('content')
<div class="container">
     <h1 class="text-center" >Rellene el Formulario</h1><hr>
   



                    <form method="POST" action="{{ route('register') }}" style="background-color: #e5dfcd;" class="container-fluid">
                        @csrf
                        <br>

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
                            
                            <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
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

                        <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                            <div class="form-group ">
                            <label for="password-confirm" class="col-md-12">{{ __('Confirmar Contraseña') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">

                            <div class="form-group ">
                           
                               <label for="adrress" class="col-md-12">Dirección</label>
                        
                                <textarea class="form-control" name="address" required autocomplete="address" placeholder="Estos datos serviran para enviarte el producto">{{ old('address') }}</textarea>
                            </div>
                        </div>




                    <div class="col-lg-4   col-sm-4   col-md-6  col-xs-12">
                        <div class="form-group ">
                            <label for="telefono"  class="col-md-12">Telefono</label>
                            
                            <input class="form-control" type="text" name="telefono"  required autocomplete="telefono" value="{{ old('telefono') }}">
                            </div>
                    </div>


                        


<p class="col-lg-3   col-sm-3   col-md-4  col-xs-12">Dato opcional</p>



                   <div class="col-lg-6   col-sm-6   col-md-6  col-xs-12">
                     <div class="form-group">
                       
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen"   class="form-control" value="{{ old('imagen') }}" >
                    </div>
         
                   </div>




                        <div class="col-lg-12   col-sm-12   col-md-12  col-xs-12">
                            <div class="col-lg-4   col-sm-4   col-md-4  col-xs-12" style="margin-left: 43%">
                            <div class="form-group ">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear cuenta') }}
                                </button>
                            </div>
                            </div>
                        </div>

                </div>
                    </form>



           
</div>
<br>
@endsection



