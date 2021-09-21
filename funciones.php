<?php

    function traer_productos(){
$productos =[

['nombre' => 'Papas Fritas', 'precio'=>100 , 'imagen'=> '../css/img/papas-fritas.png'],
['nombre' => 'Ensalada ', 'precio'=> 300 , 'imagen'=> 'img/ensalada.png'],
['nombre' => 'Pizza', 'precio'=>500, 'imagen'=> 'img/pizza.png'],
['nombre' => 'Sandwich', 'precio'=>300 , 'imagen' => 'img/sandwich.png'],
['nombre' => 'Hamburguesa ', 'precio'=>350, 'imagen'=> 'img/hamburguesa.png'],
['nombre' => 'Galletita', 'precio'=>200, 'imagen'=> 'img/galletita.png'],
['nombre' => 'Pancho', 'precio'=>200, 'imagen'=> 'img/pancho.png'] ,
['nombre' => 'Dona ', 'precio'=>100, 'imagen'=> 'img/dona.png'],
] ;
return  ($productos) ;
}
?>