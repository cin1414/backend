<?php

$enlace = mysqli_connect('localhost', 'root', '', 'curso_backend');
$data = $_POST;
$id_producto = $data['id'];
$id_usuario = $data['id_usuario'];
$precio = $data['precio'];
$nombre = $data['nombre'];
$imagen = $data['imagen'];

$sql = "INSERT INTO carritos (id_usuario, id_producto, precio, nombre, imagen)
VALUES ('$id_usuario', '$id_producto', '$precio', '$nombre', '$imagen')";
  $('.btn-agregar').click(function(){
    var precio = $(this).attr("data-precio");
    var imagen = $(this).attr("data-imagen");
    var nombre = $(this).attr("data-nombre");
    var id_usuario = $("#user_dni").val();
    var id = $(this).attr("data-id");
    console.log(id, id_usuario);
    $.post("agregar_carrito.php", {
        id: id,
        id_usuario: id_usuario,
        precio: precio,
        nombre: nombre,
        imagen: imagen
    }, function(result){
      alert("producto insertado!");
    });
})

$('#cantidad').change(function(){
  var cantidad = $(this).val();
  var precio = $('#precio').text();
  var subtotal = cantidad * precio;
  $("#subtotal").text(subtotal);
})

?>