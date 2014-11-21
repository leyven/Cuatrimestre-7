<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>

<body>
<h1>Specially designed to manage things</h1>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>ACTIVIDADES</h1></center>
	<div id="container">
		<table> 
			<tr> 
				<th>Folio</th> 
				<th>Nombre actividad</th> 
				<th>Id usuario</th>
				<th>Id actividad</th>
				<th>Fecha inicio</th>
				<th>Fecha termino</th>
				<th>Descripcion</th>
				<th>Asignar</th>

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
				<td> <button name="id"value="id_Actividad">{{$variable -> id_Actividad}}</button> </td> 
			</tr> 
			@endforeach
			 <div> 
    <object type="text/html" data="localhost/Cuatrimestre-7/public/admin.blade.php" width="800px" height="600px" style="overflow:auto;border:5px ridge blue">
    </object></div>
		</table> 
	</div>
</body>