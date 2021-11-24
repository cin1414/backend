<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors' , 1 );

$data = $_POST;

if($data['password'] != $data['password2']){
  echo "<h1>Las contraseñas no coinciden</h1>";
  header( "refresh:2;url=registro.php" );
} else {
  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
}

unset($data['password2']);
$data['habilitado'] = true;

$enlace = mysqli_connect ( "localhost" , "root" , "" , "zapas_online" );
if (!$enlace ) {
echo  "Error No se pudo conectar a MySQL". PHP_EOL ;
echo  "errno de depuración:" . mysqli_connect_errno (). PHP_EOL ;
echo  "error de depuración:" . mysqli_connect_error (). PHP_EOL ;
}

$sql = "INSERT INTO usuarios (dni, nombre, apellido, email, contrasena,  habilitado)
  VALUES ('".$data["dni"]."', '".$data["nombre"]."' , '".$data["apellido"]."', '".$data["email"]."' , '".$data["contrasena"]."', '".$data["habilitado"]."' )";

  if (mysqli_query($enlace, $sql)) {
    echo "Usuario Registrado Correctamente!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
  }

?>
