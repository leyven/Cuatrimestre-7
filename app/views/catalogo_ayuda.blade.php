{{ HTML::style('menu1.css') }}
{{ HTML::script('js/jquery.js') }}

<title>Inicio</title>
<div id="catalogo">
<br><br><h1><center>Catalogo de ayuda</center></h1>
<div id="menu">
<ul id="menu">
@foreach ($categoria as $key ) 
<div class= "categorias"
data-Nombre=""
data-Descripcion=""
data-Solucion=""> 
<li><a href="#" title="Texto">{{$key->Nombre}}<input type="hidden" value="1" /> </a></li>
</div>	
@endforeach
	
	<ul>
		<li><a href="#" title="Texto">Sap</a></li>
		<li><a href="#" title="Texto">Microsip</a></li>
		<li><a href="#" title="Texto">Pigchamp</a></li>
	</ul>
	</li>
	
</ul>
</div><br><br><br><br><br><br>
		<section id="contenido">
		<table border=1 cellpadding=4 cellspacing=0>        
		


		<div id="category1">

		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat1 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</div>
		
		<div id="category2">
		
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat2 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</div>
		
		<div id="category3">
		
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat3 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</div>
		
		<div id="category4">
		
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat4 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</div>
		
		<div id="category5">
		Desarrollo <br>
		<th>Nombre </th><th>Descripción</th><th>Solución
				</th> 
			@foreach($catalogocat5 as $key)
			{{'<tr>'.'<td>'.$key->Nombre.'</td>'.'<td>'.$key->Descripcion.'</td>'.'<td>'.$key->Solucion.'</td>'.'</tr>'}}
			@endforeach  
		</div>


		</table>	
		</section>
		
