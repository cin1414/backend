<?php
// Conexion
$mysqli = new mysqli("localhost","root","","zapas_online");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include ("header.php");
      ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include ("nagvar.php");
      ?> 
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <br>
                    <h1 class="my-0 txt-black mb-4">REGISTRO</h1>
                    <form method= "post" action="registrarse.php">                    
                      <input type="text" name="nombre"  class="form-control mb-4" placeholder="Nombre">
                      <input type="text" name= "apellido"  class="form-control mb-4" placeholder= "Apellido">
                      <input type="text" name= "dni"    class="form-control mb-4" placeholder="dni">
                      <input type="email" name= "email"   class="form-control mb-4" placeholder="email">
                      <input type="contraseña" name= "contrasena"   class="form-control mb-4" placeholder="contraseña">
                      <input type="contraseña2" name= "contrasena2"   class="form-control mb-4" placeholder="Confirme contraseña">
                      <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                                
                    </form>
                </div>
              </div>


            </div>
        </header>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>