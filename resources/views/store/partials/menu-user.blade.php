@if(Auth::check())
	<li class="dropdown" >
		<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-left: -0px">
			<i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" style="margin-left: -85px">
			<li><a class="nav-link" href="{{ url('logout') }}">Finalizar sesión</a></li>
		</ul>
	</li>
	<li><a class="nav-link" href="{{ url('seguridad') }}">Seguridad</a></li>
@else
	<li class="dropdown" >
		<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" style="margin-left: -120px; hover:ba">
			
			<li><a class="nav-link" href="{{ url('register') }}">Registrarse</a></li>
			<li><a class="nav-link" href="{{ url('login') }}">Administrador</a></li>
		</ul>
	</li>
@endif