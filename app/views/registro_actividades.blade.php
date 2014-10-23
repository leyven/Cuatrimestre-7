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
		<form action="">
			<label>Actividad: </label>
			<input type="text"placeholder="Actividad" size="15" maxlength="30"required><br><br>
			<label>Prioridad: </label><br><br>
			<!--Aqui va el label con los datos de la prioridad-->
			<label>Departamento: </label>
			<input type="text"placeholder="Departamento" size="15" maxlength="30"required><br><br>
			<label>Requerimiento al<br>que pertenece: </label>
			<input type="text"placeholder="Requerimiento" size="15" maxlength="30"required><br><br>
			<label>Encargado: </label>
			<input type="text"placeholder="Encargado" size="15" maxlength="30"required><br><br>
			<label>Fecha/Hora Inicio: </label>
			<input type="date" required>
			<input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br>
			<label>Fecha estimada de termino: </label>
			<input type="date" required><br><br>
			<label>Fecha/Hora de termino: </label>
			<input type="date" required>
			<input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br>
		</form>
	</div>
</body>