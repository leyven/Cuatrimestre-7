<html>
<head>	
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	{{ HTML::style('css/estilo.css') }}
	
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Registro de Actividades</h1></center>
	<div id="container">
<center><table>
	{{Form::open(array('action' => 'actividadController@registro'))}}
<ul class="errors">
 @foreach($errors->all() as $message)
 <li>{{ $message }}</li>
 @endforeach
 </ul>
<tr>
	<td>{{Form::label('Actividad', 'Actividad: ')}}
	{{Form::text('Actividad')}}</td></tr>
<tr><td>
	{{Form::label('Prioridad', 'Prioridad: ')}}<br></td></tr>
<tr>
	<td>{{Form::label('Descripcion', 'Descripcion: ')}}

	{{Form::textarea('Descripcion')}}</td></tr>
<tr><td>
	{{Form::label('Departamento', 'Departamento al que pertenece: ')}}
	{{Form::text('Departamento')}}</td></tr>
<tr><td>
	{{Form::label('Requerimiento', 'Requerimiento: ')}}
	{{Form::text('Requerimiento')}}</td></tr>
<tr><td>
	{{Form::label('Encargado', 'Encargado: ')}}
	{{Form::text('Encargado')}}</td></tr>
<tr><td>
	{{Form::label('Fecha/Hora', 'Fecha/Hora de Inicio: ')}}
	{{Form::custom('date', 'fecha_inicio')}}
	{{Form::custom('time', 'hora_inicio')}}<tr><td>
<tr><td>
	{{Form::label('FechaE', 'Fecha estimada de término: ')}}
	{{Form::custom('date', 'fecha_estimada')}}</tr></td>
<tr><td>
	{{Form::label('Fecha/HoraT', 'Fecha/Hora de Término: ')}}
	{{Form::custom('date', 'fecha_termino')}}
	{{Form::custom('time', 'hora_termino')}}</tr></td>
<tr><td>
	{{Form::submit('Guardar')}}</tr></td>
{{Form::close()}}	
	</table>
		<!--<form>
			<label>Fecha/Hora Inicio: </label>
			<input type="date" required>
			<input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br>
			<label>Fecha estimada de termino: </label>
			<input type="date" required><br><br>
			<label>Fecha/Hora de termino: </label>
			<input type="date" required>
			<input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br>
		</form>-->

	</div>
	
	
</body>
</html>