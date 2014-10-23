
{{ HTML::style('css/estilo.css') }}
{{ HTML::style('css/menu1.css') }}
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/ocultify.js') }}

<title>Catálogo de ayuda</title>
<img id="logo"src="img/buenaventura.gif" alt="">
<div id="catalogo">
<br><br><h1><center>Catalogo de ayuda</center></h1>
<div id="menu">
<ul id="menu">
@foreach ($categoria as $key ) 
<div class= "categorias"
data-Nombre=""
data-Descripcion=""
data-Solucion=""> 
<li class="{{$key->idCategoria}}" ><a href="#" title="Texto">{{$key->Nombre}}<input type="hidden" value="1" /> </a></li>
</div>	
@endforeach
	
	<ul>
		<li><a href="#" title="Texto">Sap</a></li>
		<li><a href="#" title="Texto">Microsip</a></li>
		<li><a href="#" title="Texto">Pigchamp</a></li>
	</ul>
	</li>
	
</ul>
</div><center>
		<section id="contenido">
	        
		


		<div id="category1">
			<table border=1 cellpadding=4 cellspacing=0>	
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat1 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
			</table>
		</div>
		
		<div id="category2">
			<table border=1 cellpadding=4 cellspacing=0>
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat2 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</table>
		</div>
		
		<div id="category3">
			<table border=1 cellpadding=4 cellspacing=0>
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat3 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</table>
		</div>
		
		<div id="category4">
			<table border=1 cellpadding=4 cellspacing=0>
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat4 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach
			</table>  
		</div>
		
		<div id="category5">
			<table border=1 cellpadding=4 cellspacing=0>
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat5 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach
			</table>  
		</div>


			
		</section>
		
</center>