<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors' , 1 );
include ('modelo.php');

function traer_items(){
    $productos=model_traer_productos();
    return $productos;
}




?>






