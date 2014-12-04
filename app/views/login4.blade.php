
{{ HTML::style('menu1.css') }}
{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<head><title>Inicio de Sesión Control de Actividades</title></head><center>
{{ HTML::image('img/buenaventura.gif', "Buenaventura, S.A. de C.V.") }}</center>
 <div id="sesion">
 <center>
 <h2>Inicio de sesión del Control de Actividades</h2>
@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif


{{ Form::open(array('url' => 'login4')) }}
    <table>
	<tr><td><center>{{ Form::label('Nombre', 'Administrador') }}</td></tr>
   	<tr><td>{{ Form::label('password', 'Contraseña:') }}</td></tr>
    <tr><td>{{ Form::password('password'); }}</td></tr>
    <tr><td><center>{{ Form::submit('Ingresar'); }}</td></tr>
	<a href="login">Regresar</a>	
	</table>
 
{{ Form::close() }}
</div>