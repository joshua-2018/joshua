@extends('store.template')

@section('content')

<div class="container-fluid mt-1" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" height="6px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <img  class="d-block img-fluid" src="{{asset('imagenes/menu/slider.jpg')}}" alt="First slide"  height="200">
     
    </div>


    <div class="carousel-item ">
      <img  class="d-block img-fluid" src="{{asset('imagenes/menu/slider1.jpg')}}" alt="Second slide" height="200">
    </div>

    <div class="carousel-item">
      <img  class="d-block img-fluid" src="{{asset('imagenes/menu/slider2.jpg')}}" alt="Third slide" height="200">
    </div>
  
  </div>



  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"  data-slide="prev">
  <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">ANTERIOR</span>
  </a>
  <a class="carousel-control-next"href="#carouselExampleIndicators" role="button" data-slide="next">
  <span  class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Siguiente</span>
  </a>
</div>

</div><hr>


@endsection




