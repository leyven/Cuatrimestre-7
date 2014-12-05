
<!DOCTYPE html>
<html>
<head>
	<title>catalogo de personal</title>
	{{ HTML::style('css/admin.css') }}
</head>
<body>
<img id="logo"src="img/buenaventura.gif" alt="">
	<center><h1>Catalogo de personal</h1></center>
<div id="container">
<table>
<tr> 
				<th>Folio</th> 
				<th>Nombre </th> 
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Telefono</th>
				<th>Celular</th>
				<th>Departamento</th>
				<th>Puesto</th>
				<th>Fecha de inicio</th>
				

</tr> 
@foreach ($var as $key)
<tr>
	<td>{{$key->Folio}} </td>
	<td>{{$key->Nombre}}</td>
	<td>{{$key->ApellidoPaterno}}</td>
	<td>{{$key->ApellidoMaterno}}</td>
	<td>{{$key->Telefono}}</td>
	<td>{{$key->Celular}}</td>
	<td>{{$key->Departamento}}</td>
	<td>{{$key->Puesto}}</td>
	<td>{{$key->InicioTrabajo}}</td>

</tr>

@endforeach
</table>
</div>
</body>
</html>
