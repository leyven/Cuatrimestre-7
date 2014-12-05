<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="cache-control" content="no-store" />
<meta http-equiv="cache-control" content="must-revalidate" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
{{ HTML::style('menu1.css') }}
{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<head><title>Inicio de Sesión de Help Desk</title></head><center>
{{ HTML::image('img/buenaventura.gif', "Buenaventura, S.A. de C.V.") }}</center>
 <div id="sesion">
 <center>
 <h2>Inicio de sesión de Help Desk</h2>
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