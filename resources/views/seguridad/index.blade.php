@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>LISTADO USUARIOS <a href="seguridad/create"><button class="btn btn-success"><i class="fa fa-plus-circle"></i> Nuevo</button></a></h3>

     
        @include('seguridad.search')
    </div>
</div>



<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">




            <table class="table table-striped table-bordered table-condensed table-hover">

                <thead>
                    <!-- NOMBRES Y CELDAS PARA MOSTRAR LA LISTA DE CATEGORIA-->
                    <th>Id</th>
                    <th>Apellidos Nombre</th>
                    <th>email</th>
                    <th>Direccion</th>
                  
                    <th>DNI</th>
                    <th>Rol</th>
                    <th>Telefono</th>
                    <th>Imagen</th>
                
                    <th>Opciones</th>
                </thead>

               @foreach ($usuarios as $usu)
                <tr>
                    <td>{{ $usu->id}}</td>
                    <td>{{ $usu->apellidos}} {{$usu->name}}</td>
                    <td>{{ $usu->email}}</td>
                    <td>{{ $usu->address}}</td>
                    
                    <td>{{ $usu->dni}}</td>
                     <td>{{ $usu->rol}}</td>
                    <td>{{ $usu->telefono}}</td>
                  <td><img src="{{asset('imagenes/avatar/'.$usu->imagen)}}" alt="{{$usu->name}}"  class="img-thumbnail" style="width: 70px;height: 55px"  ></td>
                    

                    <!-- -->
                    <td>
                        <a href="{{URL::action('UsuarioController@show',$usu->id)}}" ><button class="btn-warning"><i class="fa fa-eye" ></i></button></a>
                        <a href="{{URL::action('UsuarioController@edit',$usu->id)}}" ><button class="btn-primary"><i class="fa fa-pencil-square" ></i></button></a>
                         <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn-danger"><i class="fa fa-trash"></i></button></a>
                         
                    </td>
                </tr>
                @include('seguridad.modal')
                @endforeach
            </table>



        </div>
        {{$usuarios->render()}}
    </div>
</div>


@endsection