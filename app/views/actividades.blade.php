<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>ACTIVIDADES</h1></center>
	<div id="container">
		<table> 
		<a href="{{ URL::to('generar2') }}">Reporte</a>
			<tr> 
				<th>Folio</th> 
				<th>Nombre actividad</th> 
				<th>Id usuario</th>
				<th>Id actividad</th>
				<th>Fecha inicio</th>
				<th>Fecha termino</th>
				<th>Descripcion</th>
			</tr> 
			@foreach ($var as $variable)
			<tr> 
				<td> {{$variable -> folio}} </td> 
				<td> {{$variable -> nombre_Actividad}} </td> 
				<td> {{$variable -> id_Usuario}} </td> 
				<td> {{$variable -> id_Actividad}} </td> 
				<td> {{$variable -> fecha_Inicio}} </td> 
				<td> {{$variable -> fecha_Termino}} </td> 
				<td> {{$variable -> descripcion}} </td> 
			</tr> 
			@endforeach
		</table> 
		<br><br><a href="login2">Cerrar sesión.</a>
	</div>
	
	
</body>