<?php require_once 'vistas/header.php' ?>


<div class="container-fluid">


    <form class="mt-4"  action="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Titulo de la Lectura</label>
            <input type="text" class="form-control" id="titulo" name="tiulo" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenido de Lectura</label>
            <input type="text" class="form-control" id="contenido" name="contenido">
        </div>
        <div class="form-group ">

            <label for="exampleInputPassword1"  >Fecha de Creacion</label>
            <p type="text" class="form-control  col-sm-4" id="reloj" name="contenido" disabled></p>

        </div>
        <a type="submit" class="btn btn-primary">Guardar Esta Lectura</a>
    </form>

</div>


<?php


require_once 'vistas/footer.php'; ?>


<script>
    $('#contenido').summernote({
        // set editor height
        minHeight: 200, // set minimum height of editor
        maxHeight: 500, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    })
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
document.getElementById('reloj').innerHTML=y+"-"+mo+"-"+d;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
