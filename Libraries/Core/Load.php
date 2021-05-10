<?php
    //Load
    $controller = ucwords($controller); //Vuelve la primera letra de un controlado en mayuscula
    $controllerFile = "Controllers/".$controller.".php";
    if(file_exists($controllerFile))
    {
        require_once($controllerFile);
        $controller = new $controller();//Instancia
        if(method_exists($controller, $method))
        {
            $controller->{$method}($params);
        }
        else
        {
            require_once("Controllers/Error.php"); 
        }
    }
    else
    {
        require_once("Controllers/Error.php");
    }
?>