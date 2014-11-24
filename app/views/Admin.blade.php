<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	{{ HTML::style('css/admin.css') }}
	{{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/admin.js') }}
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
				<th>Editar</th>

			</tr> 
			@foreach ($var as $variable)
			<div class="informacion"
			
			>
			<tr class="info"
			data-folio="{{$variable -> folio}}"
			data-actividad="{{$variable -> nombre_Actividad}}"
			data-iduser="{{$variable -> id_Usuario}}"
			data-idactividad="{{$variable -> id_Actividad}}"
			data-inicio="{{$variable -> fecha_Inicio}}"
			data-termino="{{$variable -> fecha_Termino}}"
			data-descripcion="{{$variable -> descripcion}}"
			>
			

				<td> {{$variable -> folio}} </td> 
				<td> {{$variable -> nombre_Actividad}} </td> 
				<td> {{$variable -> id_Usuario}} </td> 
				<td> {{$variable -> id_Actividad}} </td> 
				<td> {{$variable -> fecha_Inicio}} </td> 
				<td> {{$variable -> fecha_Termino}} </td> 
				<td> {{$variable -> descripcion}} </td> 
				<td> <button name="id"value="id_Actividad">{{$variable -> id_Actividad}}</button> </td>
				<td> <button class="mostrar" name="id"value="id_Actividad">click</button> </td> 	

							
			</tr> 
			</div>
			@endforeach
			 <div id="edicion"> 
			 {{Form::open(array('action' => 'AdminController@editar'))}}
			 <form>
  			Folio 				<input id="Cfolio" type="text" name="folio"> </br>
  			Nombre Actividades  <input id="Cactividad" type="text" name="actividad"> </br>
  			Id usuario 			<input id="CidUsuario" type="text" name="idUsuario"> </br>
  			Id actividad 		<input id="CidActividad" type="text" name="idActividad"> </br>
  			Fecha inicio 		<input id="Cinicio" type="text" name="inicio"> </br>
  			Fecha termino 		<input id="Ctermino" type="text" name="termino"> </br>
  			descripcion 		<textarea  rows="5" cols="40" id="Cdescripcion" name="Descripcion" ></textarea></br>
  								<input  type="submit" id="send"   >
  			{{Form::close()}}
    		</div>
		</table> 
	</div>
</body>