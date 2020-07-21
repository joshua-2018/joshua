@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>LISTADO REGISTROS <a href="registers/create"><button class="btn btn-success"><i class="fa fa-plus-circle"></i> Nuevo</button></a></h3>

     
        @include('registers.search')
    </div>
</div>



<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">




            <table class="table table-striped table-bordered table-condensed table-hover">

                <thead>
                    <!-- NOMBRES Y CELDAS PARA MOSTRAR LA LISTA DE CATEGORIA-->
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    
                  
                    <th>Enlace</th>
                     <th>Procedimiento</th>              
                    <th>Opciones</th>
                </thead>

               @foreach ($register as $pro)
                <tr>
                    <td>{{ $pro->id}}</td>
                    <td> {{$pro->name}}</td>
                    <td>{{ $pro->descripcion}}</td>
                    <td>{{ $pro->ruta_drive}}</td>
                    <td>{{ $pro->procedimiento}}</td>
                
              
                    

                    <!-- -->
                    <td>
                        <a href="{{URL::action('RegistersController@show',$pro->id)}}" ><button class="btn-warning"><i class="fa fa-eye" ></i></button></a>
                        <a href="{{URL::action('RegistersController@edit',$pro->id)}}" ><button class="btn-primary"><i class="fa fa-pencil-square" ></i></button></a>
                         <a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal"><button class="btn-danger"><i class="fa fa-trash"></i></button></a>
                         
                    </td>
                </tr>
                @include('registers.modal')
                @endforeach
            </table>



        </div>
        {{$register->render()}}
    </div>
</div>


@endsection