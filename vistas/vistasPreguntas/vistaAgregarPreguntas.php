<?php require_once 'vistas/header.php' ?>


<div class="container-fluid">


    <form class="mt-4" action="index.php?accion=guardarPregunta" method="post">
        <?php require 'vistas/vistasPreguntas/vistaPregunta.php'; ?>

        <div class="form-row pt-2">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Respuestas</label>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Marque la Correcta</label>
            </div>
        </div>
        
        <div class="" id="completa">
            <?php require 'vistas/vistasPreguntas/vistaRespuesta.php'; ?>
        </div>


         <a class="btn btn-primary ml-3" id="btnAgregarRespuesta">Agregar Respuesta</a>

        <button type="submit" class="btn btn-success">Guardar Preguta</button>
        <a  href="index.php" type="button" class="btn btn-secondary">Salir</a>
</div>

        




    </form>



</div>


<?php


require_once 'vistas/footer.php'; ?>