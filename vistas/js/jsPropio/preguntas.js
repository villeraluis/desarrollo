


$(document).ready(function () {

    //max de 10 campos

    x = 2;
    t=2
    $('#btnAgregarRespuesta').click(function (e) {
        input = '<div class="form-row pt-3" id="respuesta">\
        <div class="form-group col-md-6">\
        <input type="text" class="form-control" id="inputCity" name="contenidoRespuesta'+x+'" required></div>\
        <div class="form-group col-md-1"><div class="form-check">\
        <input class="form-check-input" type="radio" name="valorRespuetas" id="valorRespuetas" value="'+x+'" required  checked>\
        </div></div><button type="button" class="btn btn-info  btn-sm form-check-label  " id="eliminar">Eliminar</button></div>';
        e.preventDefault();  //prevenir novos clicks
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





});