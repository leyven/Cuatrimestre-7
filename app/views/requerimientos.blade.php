{{ HTML::style('menu1.css') }}

{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<title>Requerimientos</title>
<img id="logo"src="img/buenaventura.gif" alt="">

<?php
echo 'Bienvenido '. Auth::user()->Nombre . ', su Id es: '.Auth::user()->id .', tipo de usuario: '. Auth::user()->Tipo .', Departamento: '. Auth::user()->Departamento;
?>

<div id="catalogo">
<br><br><h1><center>Requerimientos</center></h1>
<center>
		<section id="contenido">
	        
		
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Folio </th><th>Prioridad</th><th>Departamento
				</th> 
			@foreach($req1 as $key)
			{{'<tr>'.'<td>'.$key->Folio.'</td>'.'<td>'.$key->Prioridad.'</td>'.'<td>'.$key->Departamento.'</td>'.'</tr>'}}
			@endforeach  
			</table>
				
		</section>
		
</center>
