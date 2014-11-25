
{{ HTML::style('menu1.css') }}
{{ HTML::style('css/estilos.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<head><title>Inicio de Sesión</title></head>
 <div id="sesion">
 <center>
 {{ HTML::image('img/buenaventura.gif', "Buenaventura, S.A. de C.V.") }}
 <h2>Inicio de sesión </h2>
@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif


{{ Form::open(array('url' => 'login')) }}
    <table>
	<tr><td>{{ Form::label('Nombre', 'Usuario:') }}</td></tr>
   <tr><td> 
    {{ Form::text('Nombre'); }}</td></tr>
	<tr><td>{{ Form::label('password', 'Contraseña:') }}</td></tr>
    <tr><td>{{ Form::password('password'); }}</td></tr>
    <tr><td><center>{{ Form::submit('Ingresar'); }}</td></tr>			
	</table>
 
{{ Form::close() }}
</div>