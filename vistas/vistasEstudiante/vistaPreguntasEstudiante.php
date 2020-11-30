<?php require_once 'vistas/header.php' ?>


<div class="container-fluid">

    <div class="form-row align-items-center mt-4">
        <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="idLecturaVista" placeholder="Escriba el id de la Lectura">
        </div>

        <div class="col-auto my-1">
            <button type="submit" onclick="vistaLecPregE()" class="btn btn-primary">Ver Lectura</button>
        </div>
    </div>

</div>

<div class="container-fluid  p-2 " id="vistaLectura">

</div>

<div class="container-fluid" id="respuestas">

    
           
         
        </div id="res"></div>

    


</div>





<?php


require_once 'vistas/footer.php'; ?>