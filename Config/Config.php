<?php
    //define("BASE_URL","http://localhost/ProyectoProfesional/");
    const BASE_URL = "http://localhost/ProyectoProfesional";

    //Zona Horaria
    date_default_timezone_set('America/Costa_Rica');

    //Datos de conexión a la base de datos
    const DB_HOST = "localhost";
    const DB_NAME = "db_tiendavirtual";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    //Delimitadores decimal y millar Ej. 24,1989.00
    const SPD = ".";
    const SPM = ",";

    //Simbolo de moneda
    const SMONEY = "₡ ";


?>