<?php

    class Controllers
    {
        public function __construct()
        {
            //Aca se coloca la instancia de la vista
            $this->views = new Views();
            $this->loadModel();
        }

        public function loadModel()
        {
            //HomeModel.php
            $model = get_class($this)."Model";
            $routClass = "Models/".$model.".php";
            if(file_exists($routClass))
            {
                require_once($routClass);
                $this->model = new $model();
            }
        }
    }


?>