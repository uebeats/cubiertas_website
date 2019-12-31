<?php

/* 
Creado por Jesús Caballero
for @uebeats by Github
*/
    require_once 'cb_config/conexion.php';

    $titulo = 'Ficha Producto';
    $error = '';

    /* ACTIVE MENU PRODUCTOS */
    function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);
        if($currect_page === $url){
            echo 'active'; //class name in css 
        } 
    }

    /* ACTIVE PARA MENU PRINCIPAL */
    $current_home = '';
    $current_about = '';
    $current_products = 'active';
    $current_contact = '';
    
    if(!isset($_GET['id_product']) or (!isset($_GET['category']))){
        /* ERROR NO EXISTE PRODUCTO */
        $error = '<div class="alert alert-warning" role="alert">
            Hay un problema para cargar el producto que buscas o simplemente no existe.
            </div>';
    }else{

        /* PARAMETROS RECIBIDOS */
        $id_product = $_GET['id_product'];
        $cat_product = $_GET['category'];

        /* SELECT PRODUCTOS */
        $sel = "SELECT * FROM tbl_products_cb WHERE id_product_cb LIKE '$id_product' AND cat_product_cb LIKE '$cat_product'";
        $res = $con->query($sel);
        $row = $res->fetch_assoc();

        $cant_img = $row['cant_images'];

        if(isset($row)){

            /* NOMBRE PRODUCTO */
            $name_product = $row['name_product_cb'];

            /* LIMPIAR NOMBRE DE PRODUCTO PARA PASARLO A URL */
            $limpiar_1 = str_replace('-', '', $name_product);
            $limpiar = str_replace('/', '', $limpiar_1);

            /* SE PASA NOMBRE DE PRODUCTO A URL Y SE QUITAN LAS MAYUSCULAS */
            $url = urlencode(strtolower($limpiar));

            /* SE REEMPLAZA LOS SIGNOS + POR _ PARA COINCIDIR CON NOMBRE IMAGENES */
            $str = str_replace('+', '_', $url);

            /* URL O SLUG DE IMAGENES PRODUCTOS */
            $slug_img = 'imagenes/productos/' . $str;
            $slug_pdf = 'fichaspdf/'. $str;

            /* DESCRIPCION DEL PRODUCTO */
            $desc_product = $row['desc_product_cb'];

        }else{
            /* ERROR NO EXISTE PRODUCTO */
            $error = '
                <div class="alert alert-warning" role="alert">
                Hay un problema para cargar el producto que buscas o simplemente no existe.
                </div>';
        }

        
    }

    /* SE INCLUYE EL ARCHIVO DE LA VISTA */
    include 'vistas/ficha-producto.view.php';
?>