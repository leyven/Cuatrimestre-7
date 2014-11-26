{{ HTML::style('menu1.css') }}

{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<title>Requerimientos</title>
<img id="logo"src="img/buenaventura.gif" alt="">

<?php
echo 'Bienvenido '. Auth::user()->Nombre . ', su Id es: '.Auth::user()->id .', tipo de usuario: '. Auth::user()->Tipo .', Departamento: '. Auth::user()->Departamento;
$depto = Auth::user()->Departamento;
$tipo = Auth::user()->Tipo;
?>
<br><br><center>
 
<center>{{HTML::link('/CatalogoAyuda','ir a catalogo de ayuda');}}<br><br>
</center>
<div id="requerimiento">
<br><br><h1><center>Requerimientos</center></h1>
<center>
<br><br>  <input type='button' name='nTarjeta'size='20' maxLength='60' value ="{{$depto}}" onclick="toggle(this)"><br><br>
		<section id="contenido">
	        
		<div id="depto1">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>      
			@foreach($req1 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>
		
		<div id="depto2">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>
			@foreach($req2 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>
		
		<div id="depto3">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>
			@foreach($req3 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>
		
		<div id="depto4">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>
			@foreach($req4 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>
		
		<div id="depto5">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th> 
			@foreach($req5 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>		
		</section>
		
</center>
</div>

<br><br><a href="logout">Cerrar sesión.</a>