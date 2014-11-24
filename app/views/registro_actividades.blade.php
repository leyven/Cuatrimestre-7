<head>
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Registro de Actividades</h1></center>
	<div id="container">
		<form action="">
			<center><table>
				<tr>
					<td>Folio:</td>
					<td><!--AQUI VA EL FOLIO --></td>
				</tr>
				<tr>
					<td>Actividad: </td>
					<td><input type="text"placeholder="Actividad" size="15" maxlength="30"required></td>
				</tr>
				<tr>
					<td>Prioridad:</td>
					<td><!--Aqui va el label con los datos de la prioridad--></td>
				</tr>
				<tr>
					<td>Departamento</td>
					<td><input type="text"placeholder="Departamento" size="15" maxlength="30"required></td>
				</tr>
				<tr>
					<td>Requerimiento al<br>que pertenece:</td>
					<td><input type="text"placeholder="Requerimiento" size="15" maxlength="30"required></td>
				</tr>
				<tr>
					<td>Encargado:</td>
					<td><input type="text"placeholder="Encargado" size="15" maxlength="30"required></td>
				</tr>
				<tr>
					<td>Fecha/Hora Inicio:</td>
					<td>
						<input type="text" required placeholder="dd/mm/aaaa" size="15" maxlength="30"required>
						<br><input type="text"placeholder="Hora" size="15" maxlength="30"required>
					</td>

				</tr>
				<tr>
					<td>Fecha estimada<br>de termino:</td>
					<td><input type="text" required placeholder="dd/mm/aaaa" size="15" maxlength="30"required></td>
				</tr>
				<tr>
					<td>Fecha/Hora de termino:</td>
					<td>
						<input type="text" required placeholder="dd/mm/aaaa" size="15" maxlength="30"required>
						<br><input type="text"placeholder="Hora" size="15" maxlength="30"required>
					</td>
				</tr>
				<tr>
					<td>Descripción:</td>
					<td><textarea name="descripcion" id="" cols="30" rows="20"></textarea></td>
				</tr>
				<tr>
					<td>Capturista: </td>
					<td><input type="text"placeholder="Capturista" size="15" maxlength="30"required></td>
				</tr>
			</table></center>
		</form>
	</div>
</body>