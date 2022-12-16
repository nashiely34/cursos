<?php

class Connection extends Mysqli {
    function __construct() {
        parent::__construct('127.0.0.1','root','123456789','api_rest',3306);
        $this->set_charset('utf8');
        $this->connect_error == NULL ? 'Conexion exitosa a la DB' : die('Error al conectarse a la BD');
        
    }//end __construct
}//end class Connection
    
