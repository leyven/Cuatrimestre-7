
{{ HTML::style('menu1.css') }}
{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<h2>
  Registro de usuarios del Help  Desk
</h2>
@if (Session::has('mensaje_registro'))
<span>{{ Session::get('mensaje_registro') }}</span>
@endif
 
{{ Form::open(array('url' => 'registro')) }}<br><br><br>
    
    {{ Form::label('nombre', 'Nombre: '); }}
    {{ Form::text('Nombre'); }}<br><br>
    
	{{ Form::label('tipo', 'Tipo de usuario: '); }}
	{{ Form::select('Tipo', array(
		'Gerente' => 'Gerente',
		'Encargado' => 'Encargado'))}}<br><br>
	
	{{ Form::label('departamento', 'Departamento al que pertenece: '); }}
    {{ Form::select('Departamento', array(
		'Recursos Humanos' => 'Recursos Humanos',
		'Recursos Financieros' => 'Recursos Financieros',
		'Administracion' => 'Administración',
		'Gerencia' => 'Gerencia',
		'Compras' => 'Compras'))}}<br><br>
	
    {{ Form::label('password', 'Contraseña: '); }} 
    {{ Form::password('password'); }}<br><br>
    {{ Form::submit('Registrar'); }}
 
{{ Form::close() }}