$(document).ready(function(){

    $("form#usuario").validate({
        rules :{

            nombre: {
                required:true,
                minlength: 2

            },
            apellido: {
                required:true,
                minlength: 2

            },

            email: {
                required:true,
                email:true,
                remote: {

                    url: "rpc/validar_email.php",
                    type: "post",
                    data:{

                        email: function(){
                            return $('#txtemail').val();
                        }

                    }


                }


            },



            contrasenia: {

                required:true,
                minlength: 4
            },

            contrasenia2:{

                required:true,
                equalTo:"#contrasenia"
            },




        },

        messages:{

            nombre:{

                required:"Es necesario ingresar tu nombre",
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },

            apellido:{

                required:"Es necesario ingresar tu apellido",
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },

            email:{

                required:"Es necesario ingresar un email , para completar el registro",
                email: "Por favor , Ingrese un email valido"
            },


            contrasenia:{

                required:"Es necesario que escriba una contraseña para el registro",
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },

            contrasenia2:{

                required: "Por favor repita la contraseña , para su confirmacion.",
                equalTo: "La contraseña debe ser igual a la que ingreso antes"
            },




        }

    });

    $('#btnRegistrar').on('click',  function(event) {
        event.preventDefault();
        if($('form#usuario').valid())
        {

            $.ajax({
                url: 'rpc/procesar.php',
                type: 'post',
                data: {
                    nombres: $('form#usuario #txtnombre').val(),
                    apellidos: $('form#usuario #txtapellido').val(),
                    email: $('form#usuario #txtemail').val(),
                    contrasena:$('form#usuario #contrasenia').val()
                },

            })
                .done(function(msg) {
                    if(msg == "Mensaje enviado con éxito.")
                      $('#mensaje').addClass('alert-success');

                    else
                        $('#mensaje').addClass('alert-danger');

                    $('#mensaje').html(msg);
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    // $('#usuario').reset();
                    console.log("complete");
                });

            $('#usuario')[0].reset();
            $(location).attr('href','index.php');

        }

    });


    $('#btnMateria').on('click',  function(event) {
        event.preventDefault();
        if($('form#usuario').valid())
        {

            $.ajax({
                url: 'rpc/p_materia.php',
                type: 'post',
                data: {
                    id_estudiante: $('form#usuario #txtid').val(),
                    id_materia: $('form#usuario #txtmateria').val()

                },

            })
                .done(function(msg) {
                    if(msg == "Mensaje enviado con éxito.")
                        $('#mensaje').addClass('alert-success');

                    else
                        $('#mensaje').addClass('alert-danger');

                    $('#mensaje').html(msg);
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    // $('#usuario').reset();
                    console.log("complete");
                });


        }

    });


    $("#btn-sesion").on("click",function(e){
        e.preventDefault();
        if($("form#inicioSesion").valid()){
            $.ajax({
                url: 'rpc/p_index.php',
                type: 'post',

                data: {
                    email: $("form#inicioSesion #sesion_email").val(),
                    contrasenia:$("form#inicioSesion #sesion_contrasenia").val()
                }
            })
                .done(function(msg) {
                    if(msg == 'Usuario o Contraseña Incorrecto')
                        $('#mensaje').addClass('alert-danger');
                    else
                        location.href="matriculacion.php"

                    //$('#mensaje').addClass('alert-danger'); //llevarme al archivo matriculacion.php en lugar de esto*/

                    $('#mensaje').html(msg);
                    console.log("success");
                    $('#inicioSesion').trigger("reset");
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("fail: " + textStatus + " " + errorThrown);
                })
                .always(function() {
                    console.log("complete");
                });
        }
    });

    $('#txtnivel').on('change', function(event) {
        event.preventDefault();

        $.ajax({
            url: 'rpc/get_materia.php',
            type: 'POST',
            data: {

                nivel: $('#txtnivel').val()},
        })
            .done(function(msg) {
                $('#txtmateria').html(msg);

                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });

    });





})
