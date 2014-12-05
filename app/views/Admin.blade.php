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

	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Administracion de Actividades</h1></center>
	<div id="container">
	<?php 
	 ?>
<table>
@foreach ($notificaciones as $key)
	{{ "la actividad ".$key->nombre_Actividad." esta proxima a vencer en la fecha ". $key->fecha_Termino}}{{"<br>"}}
@endforeach
</table>
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
				<th>Eliminar</th>

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
			data-key="{{$variable -> descripcion}}"
			>
			

				<td> {{$variable -> folio}} </td> 
				<td> {{$variable -> nombre_Actividad}} </td> 
				<td> {{$variable -> id_Usuario}} </td> 
				<td> {{$variable -> id_Actividad}} </td> 
				<td> {{$variable -> fecha_Inicio}} </td> 
				<td> {{$variable -> fecha_Termino}} </td> 
				<td> {{$variable -> descripcion}} </td> 

				<td>	<button class="asignar" name="idA">click</button>
				<div class="showasignar">
				{{Form::open(array('action' => 'actividadController@eliminar'))}}
				Encargado de la actividad <input id="nom" type="text" name="encargado"> </br>
  			Fecha termino 		<input id="Ctermino" type="date" name="termino"> </br>
				<input type="hidden"name="asignar"value="{{$variable -> id_Actividad}}">
				<input type="hidden"name="type"value="asignar">
				<input type="submit" value="asignar">
				{{Form::close()}}
				</div>
				 </td>
				<td> <button class="mostrar" name="id"value="id_Actividad">click</button> </td>
				<td> 	
				{{Form::open(array('action' => 'actividadController@eliminar'))}}
				<input type="hidden"name="eliminar"value="{{$variable -> id_Actividad}}">
				<input type="hidden"name="type"value="eliminar">
				<input type="submit" value="eliminar">
				{{Form::close()}}
					</td>		
			</tr> 
			</div>
			@endforeach
				

			 <div id="edicion"> 
			 {{Form::open(array('action' => 'AdminController@editar'))}}
			 
  			Folio 				<input id="Cfolio" type="text" name="folio"> </br>
  			Nombre Actividades  <input id="Cactividad" type="text" name="actividad"> </br>
  			Id usuario 			<input id="CidUsuario" type="text" name="idUsuario"> </br>
  			Id actividad 		<input id="CidActividad" type="text" name="idActividad"> </br>
  			Fecha inicio 		<input id="Cinicio" type="text" name="inicio"> </br>
  			Fecha termino 		<input id="Ctermino" type="text" name="termino"> </br>
  			descripcion 		<textarea  rows="5" cols="40" id="Cdescripcion" name="Descripcion" ></textarea></br>
  								<input type="hidden"name="type"value="editar">
  								<input  type="submit" id="send"value="editar">
  			{{Form::close()}}
    		</div>
			<a href="login2">Cerrar sesión</a>
		</table> 
	</div>
</body>