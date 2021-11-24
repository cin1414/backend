<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors' , 1 );

$data=$_POST;

$enlace = mysqli_connect ( "localhost" , "root" , "" , "zapas_online" );
if (!$enlace ) {
echo  "Error No se pudo conectar a MySQL". PHP_EOL ;
echo  "errno de depuración:" . mysqli_connect_errno (). PHP_EOL ;
}

$sql="SELECT * FROM usuarios where dni =' ".$data["dni"]."'";

$result=mysqly_query ($enlace, $sql);

if (mysqly_num_rows($result)>0) {
    while($usuarios=mysqly_fetch_assoc($result)){
    echo "dni:" .$usuarios["dni"].". nombre:" .$usuarios["nombre"]."". $usuarios["apellido"]. $usuarios["habilitado"]."<br>";
$hash=$data['contrasena'];

$hash=$usuarios['contrasena'];

if (password_verify($data['contrasena']), $hash)){
    echo ' la conraseña es valida';
    session_start();
    $_SESSION['user']=$usuarios['dni'];
    header('Location:' .'htpp://'.$_SERVER ['SERVER_NAME']. $SERVER ['REQUEST_URI']);
}else{
    session_destroy();
    echo 'la contrasña no coincide';
}
}


?>






