
{{ HTML::style('menu1.css') }}
{{ HTML::script('js/jquery.js') }}

<title>Inicio</title>
<div id="catalogo">
<br><br><h1><center>Catalogo de ayuda</center></h1>
<div id="menu">
<ul id="menu">
	<li><a href="#" title="Texto">Red<input type="hidden" value="1" /> </a></li>
	<li><a href="#" title="Texto">Teléfono<input type="hidden" value="2" /> </a></li>
	<li><a href="#" title="Texto">Servidores<input type="hidden" value="3" /></a>
	<li><a href="#" title="Texto">Aplicaciones<input type="hidden" value="4" /></a>
	<ul>
		<li><a href="#" title="Texto">Sap</a></li>
		<li><a href="#" title="Texto">Microsip</a></li>
		<li><a href="#" title="Texto">Pigchamp</a></li>
	</ul>
	</li>
	<li><a href="#" title="Texto">Desarrollo<input type="hidden" value="5" /></a></li>
</ul>
</div><br><br><br><br><br><br>
		<section id="contenido">
		<table border=1 cellpadding=4 cellspacing=0>        
		@foreach($catalogo as $cat)
				{{'<th>'.'Nombre '.'</th>'.'<th>'.'Descripción'.'</th>'.'<th>'.'Solución'
				.'</th>'.
				'<tr>'.'<td>'.$cat->Nombre.'</td>'.'<td>'.$cat->Descripcion.'</td>'.'<td>'.$cat->Solucion.'</td>'.'</tr>'}}
		@endforeach  
		</table>	
		</section>
		

<script>

$('#contenido').delegate('img','click', function(){
	$('#imgContent2').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#titleContent').html($(this).attr('title'));
	$('#descriptionContent').html($(this).attr('alt'));
});

</script>