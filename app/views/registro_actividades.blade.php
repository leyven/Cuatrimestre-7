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
	<td>{{Form::label('Actividad', 'Actividad: ')}}</td>
	<td>{{Form::text('Actividad',Input::old('Actividad'), array('placeholder'=>'Actividad','size'=>'20', 'maxlength'=>'30'))}}</td></tr>
<!--<tr><td>
	{{Form::label('Prioridad', 'Prioridad: ')}}<br></td></tr>-->
<tr>
	<td>{{Form::label('Descripcion', 'Descripcion: ')}}</td>

	<td>{{Form::textarea('Descripcion',Input::old('Descripción'), array('placeholder'=>'Descripción','cols'=>'30','rows'=>'10'))}}</td></tr>
<tr>
	<td>{{Form::label('Departamento', 'Departamento al que pertenece: ')}}</td>
	<td>{{Form::text('Departamento',Input::old('Departamento'), array('placeholder'=>'Departamento','size'=>'20', 'maxlength'=>'30'))}}</td></tr>
<tr><td>
	{{Form::label('Requerimiento', 'Requerimiento: ')}}</td>
	<td>{{Form::text('Requerimiento',Input::old('Requerimiento'), array('placeholder'=>'Requerimiento','size'=>'20', 'maxlength'=>'30'))}}</td></tr>
<tr><td>
	{{Form::label('Encargado', 'Encargado: ')}}</td>
	<td>{{Form::text('Encargado',Input::old('Encargado'), array('placeholder'=>'Encargado','size'=>'20', 'maxlength'=>'30'))}}</td></tr>
<tr><td>
	{{Form::label('Fecha/Hora', 'Fecha/Hora de Inicio: ')}}</td>
	<td>{{Form::custom('date', 'fecha_inicio')}}
	{{Form::custom('time', 'hora_inicio')}}<tr></td>
<tr><td>
	{{Form::label('FechaE', 'Fecha estimada de término: ')}}</td>
	<td>{{Form::custom('date', 'fecha_estimada')}}</tr></td>
<tr><td>
	{{Form::label('Fecha/HoraT', 'Fecha/Hora de Término: ')}}</td>
	<td>{{Form::custom('date', 'fecha_termino')}}
	{{Form::custom('time', 'hora_termino')}}</td></tr>
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
