<?php
include './../app/autoload2.php';
class Rota
{

    private $controlador = 'Pags';
    private $metodo = 'index';

    public function __construct()
    {
        $url = $this->url() ? $this->url() : [0];

        if (file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')) {
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        $controlador = new Pags;
        $this->controlador = new $this->controlador;

        if (isset($url[1])) :
            if (method_exists($this->controlador, $url[1])) :
                $this->metodo = $url[1];
                unset($url[1]);
            endif;
        endif;
        var_dump($this);
    }

    private function url()
    {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if (isset($url)) {
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        }
    }
}
