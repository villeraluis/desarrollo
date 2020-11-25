<?php require_once 'vistas/header.php' ?>

<div class="container-fluid col-6">
  <div class="text-center">
    <label for="" class="h4 pt-4">Ingresar</label>
  </div>
  <form class="mt-4" action="index.php?accion=ingresar" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Correo</label>
      <input required type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="clave" name="clave" required>
    </div>

    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>

</div>


<?php

require_once 'vistas/footer.php';
?>