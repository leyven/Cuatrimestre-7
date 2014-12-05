<?php 
class CatalogoController extends BaseController {
    	public function mostrarCatalogo(){
			try{
			$categoria = DB::table('categoria')->get();
			$catalogo = DB::table('catalogo_ayuda')->get();
			$catalogocat1 = DB::table('catalogo_ayuda')->where('idCategoria','=',1)->get();
			$catalogocat2 = DB::table('catalogo_ayuda')->where('idCategoria','=',2)->get();
			$catalogocat3 = DB::table('catalogo_ayuda')->where('idCategoria','=',3)->get();
			$catalogocat4 = DB::table('catalogo_ayuda')->where('idCategoria','=',4)->get();
			$catalogocat5 = DB::table('catalogo_ayuda')->where('idCategoria','=',5)->get();
			}catch(ErrorException $e){}
			
			return View::make('catalogo_ayuda')->with('catalogo', $catalogo)->with('categoria', $categoria)->with('catalogocat1',$catalogocat1)
			->with('catalogocat2',$catalogocat2)->with('catalogocat3',$catalogocat3)->with('catalogocat4',$catalogocat4)->with('catalogocat5',$catalogocat5);
		
			
		}
    	public function catalogoAdmin(){
    		$CatSelect=0;
			try{
			$categoria = DB::table('categoria')->get();
			$catalogo = DB::table('catalogo_ayuda')->get();
		$categorias = DB::table('categoria')
           ->select(DB::raw('distinct idCategoria'))
           ->whereNotNull('idCategoria')
           ->get();

foreach ($categorias as $key ) {
	if (!$key->Categoria!=null) { } else{
	$CatSelect[$key->Categoria]= $key->Categoria;
	}
}

			}catch(ErrorException $e){}
			
			return View::make('AdminAyuda')->with('catalogo', $catalogo)->with('categoria',$CatSelect);
		
			
		} 

		public function eliminarC(){
	try{
	$target= $_POST["eliminar"];
	DB::table('catalogo_ayuda')->where('Idcatalogo', '=', $target)->delete();
	 return Redirect::to('AdminA');
	}
	catch(ErrorException $e){return Redirect::to('admin');
			}
}

		public function administrar(){
				$decision= $_POST["type"];
				if ($decision=="editar"){


		$nombre= $_POST["nombre"];
		$descripcion= $_POST["descripcion"];
		$solucion= $_POST["solucion"];
		$Categoria= $_POST["Categoria"];
		$Idcatalogo= $_POST["toedit"];
		
		
		
		$mensaje1='datos almacenados';
		$error='datos incorrectos';


	$data = Input::all();
	//reglas de validacion
	$reglas=$array = array('nombre' => 'required', 
						   'descripcion'=>'required',
						   'solucion'=>'required',
						   'Categoria'=>'required',						   
						   

						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);

 	 if($validador->passes()) {
 	 	try{
		 $bd = DB::table('catalogo_ayuda')
            ->where('Idcatalogo', $Idcatalogo)
            ->update(array(
            'Nombre' => $nombre,
            'Descripcion' => $descripcion,
            'Solucion' => $solucion,
            'idCategoria' => $Categoria
            ));

			
		return Redirect::to('AdminA');
		}
		
		catch(ErrorException $e){
			return Redirect::to('AdminA');
		}
 	 }
 	 return Redirect::to('AdminA')->withErrors($validador);

			

	}
	else{
		return $this->eliminarC();
	}
	}
	
		
	   public function doLogout()
    {
        //Desconctamos al usuario
        Auth::logout();
 
        //Redireccionamos al inicio de la app con un mensaje
        return Redirect::to('/logout')->with('msg', 'Gracias por visitarnos!.');
    }
}
?>