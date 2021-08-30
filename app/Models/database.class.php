<?php

    Class Database
    {

        public static $instancia;

        public function __construct(){}

        public static function getInstancia()
        {
            if(!isset(self::$instancia))
            {
                self::$instancia = new PDO ('mysql:host=localhost; dbname=veterinaria', 'root', '');
            }

            return self::$instancia
        }
        
    }

?>