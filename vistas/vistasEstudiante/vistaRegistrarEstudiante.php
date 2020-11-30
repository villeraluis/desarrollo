<?php require_once 'vistas/header.php' ?>
<div class="container-fluid col-6">


    <form class="mt-4" action="index.php?accion=registroPrim" method="post">

        <div class="text-center">
        <label for="" class="h4 pt-4">Registro Estudiantes Por Primera Vez</label>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Numero Identificacion</label>
            <input name="identificacion" type="number" class="form-control" id="identificacion">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nombres</label>
            <input name="nombres" type="text" class="form-control" id="nombres">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            <input name="apellidos" type="text" class="form-control" id="apellidos">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Grado</label>
            <input name="grado" type="number" class="form-control" id="grado">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input name="correo" type="email" class="form-control" id="correo">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name="clave" type="password" class="form-control" id="clave">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input name="conClave" type="password" class="form-control" id="conClave">
        </div>


        <input id="codigo" name="codigo" type="hidden" value="xm234jq">
        <input id="rol" name="rol" type="hidden" value="3">

        <button type="submit" class="btn btn-primary">Registrarse</button>
        <a  href="index.php" type="button" class="btn btn-secondary">Cancelar</a>
    


    </form>




</div>





<?php

require_once 'vistas/footer.php';
?>