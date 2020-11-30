<?php require_once 'vistas/header.php' ?>

<div class="container-fluid text-center mb-4 pt-4">
    <a href="index.php?accion=crearLectura" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear nueva</a>






</div>
<div class="container-fluid text-center">

    <h4 class="text-center">Estas son tus lecturas</h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id </th>
                <th scope="col">titulo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($datos as $dato) {

            ?>
                <tr>
                    <th scope="row"><?php echo $dato['idlecturas']; ?></th>
                    <td><?php echo $dato['titulo']; ?></td>
                    <td><?php echo $dato['fechaLectura']; ?></td>
                    <td><a onclick="mostrarLectura(<?php echo $dato['idlecturas'] ?>)" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Ver Contenido</a>
                     

                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

</div>



<div class="container-fluid  " id="vistaLectura">

   


</div>


<?php


require_once 'vistas/footer.php';
?>