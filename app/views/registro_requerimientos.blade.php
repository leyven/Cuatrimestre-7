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
	
	<center><table>
		{{Form::open(array('action' => 'requerimientoController@registro_requerimientos'))}}
				<ul class="errors">
 @foreach($errors->all() as $message)
 <li>{{ $message }}</li>
 @endforeach
 </ul>

				<tr>
				<td>Folio:</td>
				<td>{{Form::text('Folio',Input::old('Folio'), array('placeholder'=>'Folio','size'=>'20', 'maxlength'=>'30'))}}</td>
			</tr>
			<tr>
				<td>Prioridad: </td>
				<td>{{Form::text('Prioridad',Input::old('Prioridad'), array('placeholder'=>'Prioridad','size'=>'20', 'maxlength'=>'30'))}}</td>
			</tr>
			<!--Aqui va el label con los datos de la prioridad-->
			<tr>
				<td>Nombre requerimiento: </td>
				<td>{{Form::text('Nombre',Input::old('Nombre'), array('placeholder'=>'Nombre de requerimiento','size'=>'20', 'maxlength'=>'30'))}}</td>
			</tr>
			<tr>
				<td>Fecha/Hora Captura:</td>
				<td>
					{{Form::custom('date', 'fecha_captura')}}
					{{Form::custom('time', 'hora_captura')}}
				</td>
			</tr>
			<tr>
				<td>Descripcion: </td>
				<td>
				{{Form::textarea('Descripcion',Input::old('Descripcion'), array('placeholder'=>'Descripcion','cols'=>'30','rows'=>'10'))}}
			</tr>
			<tr>
				<td>Caputurisa:</td>
				<td>{{Form::text('Capturista',Input::old('Capturista'), array('placeholder'=>'Capturista','size'=>'20', 'maxlength'=>'30'))}}
				</td>
			</tr>
			<tr>
				<td>{{Form::submit('Guardar')}}</td>
			</tr>
		{{Form::close()}}
		</table></center>
	</div>
</body>