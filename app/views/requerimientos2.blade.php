{{ HTML::style('menu1.css') }}

{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<title>Requerimientos</title>
<img id="logo"src="img/buenaventura.gif" alt="">


<br><br><center>
 
<center>{{HTML::link('/AdminA','volver a catalogo de ayuda');}}<br><br>
</center>
<a href="reporte_requerimientos">Generar reporte.</a>
<div id="requerimiento">
<br><br><h1><center>Requerimientos</center></h1>
<center>

		<section id="contenido">
	        
		<div id="deptos">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>      
			@foreach($reqt as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->fecha_Captura.'</td>'.'<td>'.$key->hora_Captura.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Capturista.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>	
		</section>
		
</center>
</div>

<br><br><a href="logout">Cerrar sesión.</a>