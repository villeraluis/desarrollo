<?php require_once 'vistas/header.php' ?>


<div class="container-fluid">


    <form class="mt-4"  action="index.php?accion=guardarLectura" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Titulo de la Lectura</label>
            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" required>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenido de Lectura</label>

            <textarea name="contenido" class="form-control" id="contenido"  required ></textarea>
           

            
        </div>
        <div class="form-group ">

            <label for="exampleInputPassword1"  >Fecha de Creacion</label>
            <input type="text" class="form-control  col-sm-4" id="fecha" name="fecha">

        </div>
        <button type="submit" class="btn btn-primary">Guardar esta Lectura</button>
    </form>

</div>


<?php


require_once 'vistas/footer.php'; ?>


<script>
    /*$('#contenido').summernote({
        // set editor height
        minHeight: 200, // set minimum height of editor
        maxHeight: 500, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
        
    })

    */

    CKEDITOR.replace( 'contenido' );

    

</script>

<script >
function startTime(){


today=new Date();
y=today.getFullYear();
d=today.getDate();
mo=today.getMonth();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('fecha').value=y+"-"+mo+"-"+d;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}

</script>
