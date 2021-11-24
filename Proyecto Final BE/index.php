<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
    error_reporting ( E_ALL );
    ini_set ( 'display_errors' , 1 );

   include ("funciones.php");
    $productos= traer_items();
    echo json_encode ($productos);
   exit;
   include ("header.php");
    
    ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav>
      <?php include ("nagvar.php");
      ?>
      </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Comprá online desde tu casa.</h1>
                    <h2 class="mt-3 mb-5">ENVIO GRATIS</h2>
                </div>
              </div>
              <div class="col-12">
                <img src="./img/niños.jpg"/>
              </div>

            </div>
        </header>
        <!-- Productos-->
        <section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">nuestros productos</h3>
                  </div>
                </div>
                <div class="row align-items-end">


                <?php foreach($productos as $producto){ ?>

                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/<?php echo $productos['imagen'];?>/>
                      <h4 class="text-lef"><?php echo $productos ['titulo'];?></h4>
                      <h5 class="text-left"><?php echo $productos ['precio'];?></h5>
                      <button data-id="<?php echo $producto['id'];?>" data-precio="<?php echo $producto['precio'];?>" data-nombre="<?php echo $producto['nombre'];?>" data-imagen="<?php echo $producto['imagen'];?>"  class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <?php } ?>
                 </div>
                </div>
          </section>
        
        
      
          <footer><?php include ("footer.php");  ?> 
      </footer>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
