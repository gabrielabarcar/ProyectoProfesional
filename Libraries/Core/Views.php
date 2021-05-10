<?php

    class Views
    {
        function getView($controller,$view,$data="")
        {   //Se obtiene la clase controler que se pasa como parametro
           $controller = get_class($controller); 
           if($controller == "Home")
           {
                $view = "Views/".$view.".php";
           }
           else
           {
                $view = "Views/".$controller."/".$view.".php"; 
           }
           require_once ($view);
        }
    }


?>