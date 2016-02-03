$(document).ready(function()
{
    /* OBTENEMOS TABLA */
    $.ajax({
        type: "GET",
        url: "rpc/datos_matricula.php"
    })
        .done(function(json) {
            json = $.parseJSON(json)
            for(var i=0;i<json.length;i++)
            {
                $('.editinplace').append(


                    "<tr><td class='editable' data-campo='id_estudiante'><span>"+json[i].id_estudiante+"</span></td>" +
                    "<td class='editable'data-campo='id_materia'><span>"+json[i].id_materia+"</span></td>");


            }

        });
})

