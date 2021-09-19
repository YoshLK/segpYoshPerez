<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/segp_YoshPerez/Config/Config.php';

class Conectar_Database{
    private static $instancia=NULL;
    
    
    


    public static function crearinstancia(){
        if(!isset( self::$instancia)){
            $opciones [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;   
            self::$instancia=new PDO('mysql:host=localhost;dbname=gestioncv','root','', $opciones);
           // echo 'Conexión Exitosa'; //comprobacion de conneccion
        }
        
        return self::$instancia;
    }  
}
?>

