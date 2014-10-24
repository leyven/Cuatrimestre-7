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
			<label>Folio: </label>
			<input type="text"placeholder="Folio" size="15" maxlength="30"required><br><br>
			<!--<label>Prioridad: </label><br> -->
			<label>Prioridad: </label>
			<input type="text" placeholder="Prioridad" required>			
			<br><br>
			<!--Aqui va el label con los datos de la prioridad-->
			<label>Nombre requerimiento: </label>
			<input type="text"placeholder="Nombre requerimiento" size="20" maxlength="30"required><br><br>
			<label>Capturista: </label>
			<input type="text"placeholder="Capturista" size="15" maxlength="30"required><br><br>
			<label>Fecha/hora captura: </label>
			<input type="date"size="15" maxlength="30"required><input type="time"size="15" maxlength="30"required><br><br>
			<label>Solicitante de requerimiento: </label>
			<input type="text" required><br><br>
			<!-- <input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br> -->
			<label>Departamento al que pertenece: </label>
			<input type="text" required><br><br>
			<!-- <input type="numer"placeholder="Hora" size="15" maxlength="30"required><br><br> -->
			<label>Descripcion:</label>
			<input type="text" required>
		</form>
	</div>
</body>