<head>

<title>Control de actividades</title>

<!-- COLOCAR CSS a la TABLA -->
<link rel="stylesheet" type="text/css" href="../public/css/estilo.css" media="screen" />
</head>


<body BGCOLOR="#47A484">


<div class="actividades" id="actividades">

<table border = "1" width = "100%"> 


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

</div>
	@endforeach

</table> 


</body>