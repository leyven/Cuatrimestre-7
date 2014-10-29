<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Registro de Requerimientos</h1></center>
	<div id="container">
		<form action="">
			<center><table>
							<tr>
				<td>Folio:</td>
				<td><input type="text"placeholder="Folio" size="20" maxlength="30"required></td>
			</tr>
			<tr>
				<td>Prioridad: </td>
				<td><input type="text" placeholder="Prioridad"size="20"maxlength="30"required></td>
			</tr>
			<!--Aqui va el label con los datos de la prioridad-->
			<tr>
				<td>Nombre requerimiento: </td>
				<td><input type="text"placeholder="Nombre requerimiento" size="20" maxlength="30"required></td>
			</tr>
			<tr>
				<td>Fecha/Horga Captura:</td>
				<td>
					<input type="text"placeholder="dd/mm/aaa"size="20" maxlength="30"required><br>
					<input type="text"placeholder="Hora"size="20" maxlength="30"required>
				</td>
			</tr>
			<tr>
				<td>Descripcion: </td>
				<td><textarea name="descripcion" id="" cols="30" rows="20"></textarea></td>
			</tr>
			<tr>
				<td>Caputurisa:</td>
				<td><input type="text"placeholder="Capturista" size="20" maxlength="30"required></td>
			</tr>
			</table></center>
		</form>
	</div>
</body>