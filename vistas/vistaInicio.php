<?php require_once 'header.php' ?>


<div class="jumbotron">
  <h1 class="display-4">Bienvenidos a la pagina de Inicio</h1>
  <?php if(!empty($_SESSION)) {?>

  <p class="lead">Bienvenido <?php echo $_SESSION['nombre'] ?> a la aplicacion de Lecturas</p>

  <?php } else{ ?>
    <p class="lead">Para acceder a las funciones de la palicacion debes Ingresar o crear una cuenta registrandote por primera vez</p>
  <?php }?>
  <hr class="my-4">
  <p>esto es un parrafo de ejemplo</p>
  
</div>







<?php require 'footer.php';



?>