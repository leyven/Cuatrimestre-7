<?php

use Illuminate\Auth\UserInterface;


Class Usuarios extends Eloquent implements UserInterface{

public function getRememberToken()
{
    return 0;//$this->remember_token;
}

public function setRememberToken($value)
{
    return 0;//$this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 0;//'remember_token';
}
 
 
    protected $table = 'perfil';
    protected $fillable = array('Nombre','password','Departamento','Tipo');
 
    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }
    
}