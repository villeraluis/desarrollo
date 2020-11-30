


$(document).ready(function () {



    x = 2;
    t = 2
    $('#btnAgregarRespuesta').click(function (e) {
        input = '<div class="form-row pt-3" id="respuesta">\
        <div class="form-group col-md-6">\
        <input type="text" class="form-control" id="inputCity" name="contenidoRespuesta'+ x + '" required></div>\
        <div class="form-group col-md-1"><div class="form-check">\
        <input class="form-check-input" type="radio" name="valorRespuetas" id="valorRespuetas" value="'+ x + '" required  checked>\
        </div></div><button type="button" class="btn btn-info  btn-sm form-check-label  " id="eliminar">Eliminar</button></div>';
        e.preventDefault();  //prevenir nuevos clicks
        if (t <= 6) {
            $('#listas').append(input);
            x++;
            t++;
        }
    });
    // Remover o div anterior
    $('#listas').on("click", "#eliminar", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
        t--;
    });



    $('#vistaLectura').on("click", "#cerrarVista", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
        t--;
    });







});



function mostrarLectura(id) {

    $.ajax({
        method: "GET",
        url: "http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=mostrarLectura&id=" + id,

    })
        .done(function (respuesta) {
            {
                res = JSON.parse(respuesta);
                datos = $('#vistaLectura');

                // creo los campos y muestro los datos

                contenidos = $(
                    '<div class="card " style="width: 100%" id="vistaLectu">\
                    <div class="card-body">\
                        <h5 class="card-title">'+ res.titulo + '</h5>\
                         <p class="card-text">'+ res.contenido + '</p>\
                         <button type="button" class="btn btn-info  btn-sm form-check-label  " id="cerrarVista">Cerrar Vista</button></div></div>'


                );


                // agrego la tabla al div 
                datos.append(contenidos);
                //se crea el grafico

            }



        });


}





function vistaPreg() {

    if (document.getElementById("idLecturaVista").value != "") {

        id = document.getElementById("idLecturaVista").value;

        $.ajax({
            method: "GET",
            url: "http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=mostrarLectura&id=" + id,

        })
            .done(function (respuesta) {
                {
                    res = JSON.parse(respuesta);


                    datos = $('#vistaLectura');

                    // creo los campos y muestro los datos

                    contenidos = $(
                        '<div class="card " style="width: 100%" id="vistaLectu">\
                    <div class="card-body">\
                        <h5 class="card-title">'+ res.titulo + '</h5>\
                         <p class="card-text">'+ res.contenido + '</p>\
                         <button type="button" class="btn btn-info  btn-sm form-check-label  " id="cerrarVista">Cerrar Vista</button>\
                        </div></div>'


                    );
                    // agrego la tabla al div 
                    datos.append(contenidos);
                    //se crea el grafico

                }

            });

    }
}



function vistaLecPregE() {
    
    id = document.getElementById("idLecturaVista").value;

    $.ajax({
        method: "GET",
        url: "http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=mostrarLectura&id=" + id,

    })
        .done(function (respuesta) {
            {
                res = JSON.parse(respuesta);


                datos = $('#vistaLectura');

                // creo los campos y muestro los datos

                contenidos = $(
                    '<div class="card " style="width: 100%" id="vistaLectu">\
                    <div class="card-body">\
                        <h5 class="card-title">'+ res.titulo + '</h5>\
                         <p class="card-text">'+ res.contenido + '</p>\
                         <button type="button" class="btn btn-info  btn-sm form-check-label  " id="cerrarVista">Cerrar Vista</button>\
                         <button type="button" onclick="vistaPregsE()" class="btn btn-info  btn-sm form-check-label  " id="Evaluar">Realizar Evaluacion de Esta Lectura</button></div></div>'


                );
                // agrego la tabla al div 
                datos.append(contenidos);
                //se crea el grafico

            }

        });
}



var i = 0;
var res = null;


function vistaPregsE() {




    id = document.getElementById("idLecturaVista").value;

    $.ajax({
        method: "GET",
        url: "http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=listarPreguntasE&id=" + id,

    })
        .done(function (respuesta) {
            {



                res = JSON.parse(respuesta);
                /////////////////////
                datos = $('#respuestas');

                console.log(res)
                for (i = 0; i < res.length; i++) {
                    idp = res[i].idpreguntas;



                    pregunta = $('<div class="container-fluid border mt-2 ml-3 col-10 "  >\
                                <div class="form-row">\
                                <label class="form" for="exampleRadios1">'+ res[i].contenidoPregunta + '</label>\
                                </div>\
                                <div class="form-row" id="res'+ i + '">\
                                </div>\
                                <div class="col-auto my-1">\
                                       <button type="submit" onclick="guardarResp()" class="btn btn-primary btn-sm">Guardar Respuesta</button>\
                                   </div>\
                                </div>'
                    );
                    datos.append(pregunta);
                    verRespuestas(idp, i);

                }

            }

        });

}

function verRespuestas(id, i) {



    $.ajax({

        method: "GET",
        url: "http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=listarRespuestasE&id=" + id,



    })
        .done(function (respuesta2) {
            res2 = JSON.parse(respuesta2);


            for (j = 0; j < res2.length; j++) {



                datos2 = $('#res' + i);

                respuesta = $('<div class="custom-control custom-radio m-2">\
                <input type="radio" id="radio'+ i + '-' + j + '" name="radio' + i + '" class="custom-control-input">\
                <label class="custom-control-label" for="radio'+ i + '-' + j + '">' + res2[j].contenidoRespuesta + '</label>\
                </div>');
                datos2.append(respuesta);


            }

        });

}



