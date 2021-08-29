<?php

class Rota {

    private $controler ='Pags';

    public function __construct()
    {
        $url = $this->url();
        
        if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')){
            $this->controler = ucwords($url[0]);
            unset($url[0]);
        }

        require_once'../app/Controllers/'.$this->controler.'.php';
        $this->controler = new $this->controler;

        var_dump($this);
    }

    private function url(){
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = trim(rtrim($url,'/'));
            $url = explode('/',$url);
            return $url;
        }
    }
}