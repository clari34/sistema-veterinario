<?php 
include './../app/autoload2.php';
class Controller{
    public function model($model){
        return new $model;
    }

    public function view ($view, $dados = []){
        $c = ('../app/Views/'.$view.'.php');
        if(file_exists($c)):
            require_once $arquivo;
        else:
            die('Não existe arquivo de View!');
        endif;
    }
}