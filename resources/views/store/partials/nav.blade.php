<!-- REGILLA DE BOOOTRASP

col-lg-(NUMERO DE COLUMNAS)
PHONES=<768PX


col-md-(NUMERO DE COLUMNAS) 
PHONES=>768PX


col-sm-(NUMERO DE COLUMNAS) 
LAPTOP/DESKTOP=>992PX

col-xs-(NUMERO dDE COLUMNAS)
COMPUTADORAS DE ESCRITORIO 
LARGE DESKTOP=>1200PX




-->

<nav class="navbar navbar-expand-sm  bg-warning  sticky-top"  style="height: ">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#uno"><img src="{{asset('imagenes/menu/menu.png')}}" width="15" height="14">
 </button>
 <style type="text/css">
   .navli a:hover{

    background-color:rgb(0,123,155);
color: #fff;

  }
   
 </style>



  <div class="collapse navbar-collapse" id="uno"  >
      <p class="navbar-text navbar-brand"></p>
    <ul class="navbar-nav ml-auto navli" >
       
      
      
    
    
    

        <li class="nav-item"><a  class="nav-link mr-sm-2  " href="{{url('web')}}">Conocenos</a></li>
          <li class="nav-item"> <a class="nav-link mr-sm-2  " href="{{url('web#contacto')}}">Contacto</a></li>
          <!--
        <li class="nav-item"><a  class="nav-link mr-sm-2  " href="{{url('web/delivery')}}">Delivery</a></li> --->


  @include('store.partials.menu-user')
  


  
     

    </ul>
    
  </div>

</nav>


















     

   