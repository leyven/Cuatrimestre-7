
{{ HTML::style('menu1.css') }}
{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<h2>
  Ingresar
 </h2>
 
@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif
 
{{ Form::open(array('url' => 'login')) }}
    
    {{ Form::label('Nombre', 'Nombre'); }}
    {{ Form::text('Nombre'); }}<br><br>
    {{ Form::label('password', 'Contraseña'); }} 
    {{ Form::password('password'); }}<br><br>
    {{ Form::submit('Ingresar'); }}<br><br>
 
{{ Form::close() }}
 
<h2>
  Registro
</h2>
@if (Session::has('mensaje_registro'))
<span>{{ Session::get('mensaje_registro') }}</span>
@endif
 
{{ Form::open(array('url' => 'registro')) }}<br><br><br>
    
    {{ Form::label('nombre', 'Nombre'); }}
    {{ Form::text('Nombre'); }}<br><br>
    
    {{ Form::label('password', 'Contraseña'); }} 
    {{ Form::password('password'); }}<br><br>
    {{ Form::submit('Registrar'); }}
 
{{ Form::close() }}