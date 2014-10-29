<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	{{ HTML::style('css/estilo.css') }}
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>ACTIVIDADES</h1></center>
	<div id="container">
	{{Form::open(array('action' => 'actividadController@registro'))}}
<br>
	{{Form::label('Actividad', 'Actividad: ')}}
	{{Form::text('Actividad')}}
<br>
<br>
	{{Form::label('Prioridad', 'Prioridad: ')}}<br>
<br>
	{{Form::label('Descripcion', 'Descripcion: ')}}
<br>
	{{Form::textarea('Descripcion')}}
<br>
<br>
	{{Form::label('Departamento', 'Departamento al que pertenece: ')}}
	{{Form::text('Departamento')}}
<br>
<br>
	{{Form::label('Requerimiento', 'Requerimiento: ')}}
	{{Form::text('Requerimiento')}}
<br>
<br>
	{{Form::label('Encargado', 'Encargado: ')}}
	{{Form::text('Encargado')}}
<br>
<br>
	{{Form::label('Fecha/Hora', 'Fecha/Hora de Inicio: ')}}
	{{Form::custom('date', 'fecha_inicio')}}
	{{Form::custom('time', 'hora_inicio')}}
<br>	
<br>
	{{Form::label('FechaE', 'Fecha estimada de término: ')}}
	{{Form::custom('date', 'fecha_estimada')}}
<br>
<br>
	{{Form::label('Fecha/HoraT', 'Fecha/Hora de Término: ')}}
	{{Form::custom('date', 'fecha_termino')}}
	{{Form::custom('time', 'hora_termino')}}
<br>	
<br>

	{{Form::submit('Guardar')}}
{{Form::close()}}	
	
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