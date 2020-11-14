<?php require_once 'vistas/header.php' ?>


<div class="container-fluid">


    <form class="mt-4" action="index.php?accion=guardarLectura" method="post">
        <?php require 'vistas/vistasPreguntas/vistaPregunta.php';



        ?>
        <div class=""  id="completa">

        
        <?php

        require 'vistas/vistasPreguntas/vistaRespuesta.php';
        echo $codigo 

        ?>
       </div>
        <a class="btn btn-primary " onclick= "agregarRespuesta()"  >Agregar Respuesta</a>

        <button type="submit" class="btn btn-primary">Guardar Preguta</button>
    </form>

</div>


<?php


require_once 'vistas/footer.php'; ?>