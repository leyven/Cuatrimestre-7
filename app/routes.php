<?php


Route::get('/registro_actividades', function()
{
	return View::make('registro_actividades');
});

Route::get('/registro_requerimientos', function()
{
	return View::make('registro_requerimientos');
});

Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');
Route::get('/actividades', 'actividadController@mostrar');


//admin de Cat Ayuda
Route::get('/AdminA', 'CatalogoController@catalogoAdmin');
Route::post('/AdminA', 'CatalogoController@administrar');


//fin


Route::get('/inicioSesion','inicioController@sesion');
Route::get('/personal', 'PersonalController@mostrarPersonal');

Route::get('/admin', 'actividadController@mostrarAdmin');
Route::post('/admin', 'AdminController@editar');
Route::delete('/admin', 'actividadController@eliminar');

Route::post('/registro_actividades', 'actividadController@registro');
Route::post('/registro_requerimientos', 'requerimientoController@registro_requerimientos');

Route::get('/requerimientos', 'RequerimientosController@mostrarRequerimientos');	


// esta sera la ruta principal de nuestra aplicación
// aquí va a estar el formulario para registrase y para inicio de sesión
// esta ruta debe ser publica y por lo tanto no debe llegar el filtro auth
Route::get('login', function(){
    return View::make('login'); 
});

Route::get('login2', function(){
    return View::make('login2'); 
});

Route::get('login3', function(){
    return View::make('login3'); 
});

Route::get('login4', function(){
    return View::make('login4'); 
});
 
 Route::get('registro', function(){
    return View::make('registro'); 
});
// esta ruta sera para crear al usuario 
Route::post('registro', function(){
 
    $input = Input::all();
    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
    $input['password'] = Hash::make($input['password']);
 
    Usuarios::create($input);
 
    return Redirect::to('registro')->with('mensaje_registro', 'Usuario Registrado');
});
 
// esta ruta servirá para iniciar la sesión por medio del correo y la clave 
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave
Route::post('login', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
    if (Auth::attempt( array('Nombre' => Input::get('Nombre'), 'password' => Input::get('password') ), true )){
		
		return Redirect::to('/requerimientos');	
    }else{
        return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
    }
 
});


Route::post('login2', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 

	
	if (Auth::attempt( array('Nombre' => Input::get('Nombre'), 'password' => Input::get('password') ), true )){
		
		return Redirect::to('/actividades');	
		
		
    }else{
        return Redirect::to('login2')->with('mensaje_login', 'Ingreso invalido');
    }
	
 
});


Route::post('login3', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 

	
	if (Auth::attempt( array('password' => Input::get('password') ), true )){
		
		return Redirect::to('/admin');	
		
		
    }else{
        return Redirect::to('login3')->with('mensaje_login', 'Ingreso invalido');
    }
	
 
});

Route::post('login4', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 

	
	if (Auth::attempt( array('password' => Input::get('password') ), true )){
		
		return Redirect::to('/AdminA');	
		
		
    }else{
        return Redirect::to('login4')->with('mensaje_login', 'Ingreso invalido');
    }
	
 
});

 
// Por ultimo crearemos un grupo con el filtro auth. 
// Para todas estas rutas el usuario debe haber iniciado sesión. 
// En caso de que se intente entrar y el usuario haya iniciado session 
// entonces sera redirigido a la ruta login
Route::group(array('before' => 'auth'), function()
{
    
    Route::get('sesión_iniciada', function(){
              
        // Con la función Auth::user() podemos obtener cualquier dato del usuario 
        // que este en la sesión, en este caso usamos su correo y su id
        // Esta función esta disponible en cualquier parte del código
        // siempre y cuando haya un usuario con sesión iniciada
        echo 'Bienvenido '. Auth::user()->Nombre . ', su Id es: '.Auth::user()->id .', tipo de usuario: '. Auth::user()->Tipo .', Departamento: '. Auth::user()->Departamento;
		
		$requerimientos = DB::table('requerimientos')->get();
		
    });
});

Route::get('logout', 'AuthController@logOut');

Route::get('generar', function()
{
    $html = '<html><body>';
    $html.= '<p style="color:red">Generando un sencillo pdf ';
    $html.= 'de forma realmente sencilla.</p>';
    $html.= '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->show();
});


Route::get('vista', function()
{
    $html = View::make("hello");
    return PDF::load($html, 'A4', 'portrait')->show();
});



Route::get('generar2', function()
{
    $html = '<html><body>';
    $html.= '<p style="color:red">Generando un sencillo pdf ';
    $html.= 'de forma realmente sencilla.</p>';
    $html.= '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->download('nombreArchivoPdf');
});
