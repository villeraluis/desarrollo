<?php require_once 'vistas/header.php' ?>

<form class="mt-4" action="index.php?accion=guardarPregunta" method="post">
    <div class="container-fluid">


        <div class="form-row align-items-center mt-4">
            <div class="col-sm-3 my-1">
                <label class=""> Ingresa El Id de La Lectura</label>
                <input type="number"  class="form-control" name="idLecturaVista" id="idLecturaVista" placeholder="Escriba el id de la Lectura" required>
                <a  onclick="vistaPreg()" class="" type="button">Ver  Lectura</a>
                
            </div>


        </div>

    </div>

    <div class="container-fluid  p-2 " id="vistaLectura">

    </div>


    <div class="container-fluid">


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
        <a href="index.php" type="button" class="btn btn-secondary">Salir</a>








    </div>

</form>





<?php


require_once 'vistas/footer.php'; ?>