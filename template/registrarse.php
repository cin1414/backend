<?php
error_reporting (E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

if ($data ['password'] !=$data ['password2']){
    echo "<h2>Las contraseñas no coinciden</h2>";
    header("refresh:2;url=registro.php");
}

unset($data['password2']);


$data ['habilitado']=true; 


$enlace = mysqli_connect("localhost", "root", "", "back end");
if (!$enlace) {
 echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
exit;
}

$nombre= $data ['nombre'];
$apellido= $data ['apellido'];
$dni= $data ['dni'];
$email= $data ['email'];
$contraseña=  password_hash($data ["password"], PASSWORD_DEFAULT);


$sql= "INSERT INTO usuarios (nombre, apellido, dni, email, contraseña,)
VALUES ('$nombre', '$apellido' , '$dni', '$email', '$contraseña')";

if (mysqli_query($enlace, $sql)) {
  echo "Usuario registrado Correctamente";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

 

?>
