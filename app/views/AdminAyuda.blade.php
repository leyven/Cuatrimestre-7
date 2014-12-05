<head>
<!-- COLOCAR CSS a la TABLA -->
	<meta charset="UTF-8">
	<!--<link rel='shortcut icon' href='img/logo-ico.png' type='image/png'>-->
	<title>Control de Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	{{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/adminA.js') }}
</head>

<body>
	<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Administrador del Catalogo de ayuda</h1></center>
	<div id="container">
		<table> 
			<tr> 
				<th>Nombre</th> 
				<th>Descripcion</th> 
				<th>Solucion</th>
				<th>Tipo</th>
				<th>Editar</th>
				<th>Eliminar</th>
				

			</tr> 
			@foreach ($catalogo as $key)
			<tr class="info"
			data-nombre="{{$key -> Nombre}}"
			data-descripcion="{{$key -> Descripcion}}"
			data-solucion="{{$key -> Solucion}}"
			data-idcategoria="{{$key -> idCategoria}}"
			data-idcatalogo="{{$key -> Idcatalogo}}"
			>
				<td> {{$key -> Nombre}} </td> 
				<td> {{$key -> Descripcion}} </td> 
				<td> {{$key -> Solucion}} </td> 
<?php 
$var="hola";
switch ($key -> idCategoria ) {
					case 1:
						$var="Red";
						break;
					case 2:
						$var="Telefono";
						break;
					case 3:
						$var="Servidores";
						break;
					case 4:
						$var="Aplicaciones";
						break;	
					case 5:
						$var="Desarrollo";
						break;
					
					default:
						$var="planta";
						break;
				}?> 

				<td><?php  echo $var;?> </td> 
				<td> <button class="show" name="id"value="id_Actividad">click</button> </td>
				<td> 	
				{{Form::open(array('action' => 'CatalogoController@administrar'))}}
				<input type="hidden"name="eliminar"value="{{$key -> Idcatalogo}}">
				<input type="hidden"name="type"value="eliminar">
				<input type="submit" value="eliminar">
				{{Form::close()}}
					</td>	
				
			</tr> 
			@endforeach
			 <div id="edicion"> 
			 {{Form::open(array('action' => 'CatalogoController@administrar'))}}
			 
  			Nombre 				<input id="CNombre" type="text" name="nombre"> </br>
  			descripcion 		<textarea  rows="5" cols="40" id="CDescripcion" name="descripcion" ></textarea></br>
  			Solucion 			
  			<textarea  rows="5" cols="40" id="CSolucion" name="solucion" rows="5" cols="40"></textarea></br>
  		

<?php
$categorias = DB::table('categoria')
                     ->select(DB::raw('distinct Nombre,idCategoria'))
                     ->whereNotNull('Nombre')
                     ->get();

foreach ($categorias as $key ) {
	if (!$key->Nombre!=null) { } else{
	$CatSelect[$key->idCategoria]= $key->Nombre;

	}
}
?>
  	Categoria: {{Form::select('Categoria', $CatSelect)}}
  								<input id="getval"type="hidden"name="toedit">
  								<input type="hidden"name="type"value="editar">
  								<input  type="submit" id="send"value="editar">
  			{{Form::close()}}
    		</div>
			<br><br><a href="login">Cerrar sesión.</a>
			<br><a href="personal">Catalogo de personal.</a>
		</table> 
	</div>
</body>