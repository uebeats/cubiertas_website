<?php
	/*-------------------------
    Autor: Jesús Caballero P.
    Web: www.igospel.cl
    Correo: uebeats@gmail.com
    ---------------------------*/
    /*Datos de conexion a la base de datos*/
    // define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
    // define('DB_USER', 'cubiertas_dbuser');//Usuario de tu base de datos
    // define('DB_PASS', 'igospel2019');//Contraseña del usuario de la base de datos
    // define('DB_NAME', 'cubiertas_dbweb');//Nombre de la base de datos

    define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
    // define('DB_USER', 'wp_usrweb');//Usuario de tu base de datos
    // define('DB_PASS', 'hmm67p.)MDcFp2G');//ContraseÃ±a del usuario de la base de datos
    define('DB_USER', 'cubiertas_dbuser');//Usuario de tu base de datos
    define('DB_PASS', 'igospel2019');//Contraseña del usuario de la base de datos
    define('DB_NAME', 'cubiertas_dbweb');//Nombre de la base de datos
    
	# conectare la base de datos
	global $con;
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexion fallo: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    $con->set_charset('utf8');
?>