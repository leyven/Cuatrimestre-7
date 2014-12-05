
<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($var as $key)
	{{key->Folio}} {{"<br>"}}
	{{key->Nombre}}
	{{key->ApellidoPaterno}}
	{{key->ApellidoMaterno}}
	{{key->Telefono}}
	{{key->Celular}}
	{{key->Departamento}}
	{{key->Puesto}}
	{{key->InicioTrabajo}}

@endforeach
</body>
</html>>
