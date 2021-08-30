<?php
    session_start();
    if (isset($_GET["view"])) 
    {
        require_once "app/Views/" . $_GET["view"] . ".php";
    }
    else if (isset($_GET["action"]) && isset($_GET["class"])) 
    {
        $controller = $_GET["class"] . "Controller";
        $action = $_GET["action"];
      
        require_once "app/Controllers/" . $controller . ".php";
      
        $controller = new $controller();
        $controller->$action();
    }
?>
