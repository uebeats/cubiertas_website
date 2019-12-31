<?php

/* 
Creado por Jesús Caballero
for @uebeats by Github
*/
    $titulo = 'Productos';

    /* ACTIVE MENU PRODUCTOS */
    function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);
        if($currect_page === $url){
            echo 'active'; //class name in css 
        } 
    }

    /* CURRENT MENU */
    $current_home = '';
    $current_about = '';
    $current_products = 'active';
    $current_contact = '';

    include 'vistas/productos.view.php';
?>