<?php
require('p_registro.php');?>
<!DOCTYPE html>

<html>
<head>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.6.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#enviar').click(function(){
                if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
                    alert('El correo electr�nico introducido no es correcto.');
                    return false;
                }

                alert('El email introducido es correcto.');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
//variables
            var contrasena = $('[name=contrasena]');
            var verificar_contrasena = $('[name=verificar_contrasena]');
            var confirmacion = "Las contrase�as si coinciden";
            var negacion = "No coinciden las contrase�as";
            var vacio = "La contrase�a no puede estar vac�a";
//oculto por defecto el elemento span
            var span = $('<span></span>').insertAfter(verificar_contrasena);
            span.hide();
//funci�n que comprueba las dos contrase�as
            function coincidePassword(){
                var valor1 = contrasena.val();
                var valor2 = verificar_contrasena.val();
                //muestro el span
                span.show().removeClass();
                //condiciones dentro de la funci�n
                if(valor1 != valor2){
                    span.text(negacion).addClass('negacion');
                }
                if(valor1.length==0 || valor1==""){
                    span.text(vacio).addClass('negacion');
                }
                if(valor1.length<6 || valor1.length>10){
                    span.text(longitud).addClass('negacion');
                }
                if(valor1.length!=0 && valor1==valor2){
                    span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
                }
            }
//ejecuto la funci�n al soltar la tecla
            verificar_contrasena.keyup(function(){
                coincidePassword();
            });
        });

    </script>



    <meta charset="utf-8">;
    <title>P�gina 100% PHP</title>
    <link rel="stylesheet" href="css/style.css">;


    <meta charset="utf-8">
    <title>P�gina 100% PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form action="p_registro.php" method="post">
    <div id="div-regForm">
        <div class="form-title">Reg�strate</div>
        <div class="form-sub-title">Es gratis (y lo seguir� siendo)</div>


        <table>
            <tbody>


            <tr>
                <td><label>Tu Email:</label></td>
                <td><div class="input-container">
                        <input type="email" id="email" name="email" value="">
                    </div></td>
            </tr>

            <tr>
                <td><label>Contrase�a:</label></td>
                <td><div class="input-container">
                        <input type="password" name="contrasena" value="">
                    </div></td>
            </tr>

            <tr>
                <td><label>Comprobar Contrase�a</label></td>
                <td><div class="input-container">
                        <input type="password" id="verificar_contrasena" name="verificar_contrasena" value="">
                    </div></td>
            </tr>




            <tr>
                <td> </td>
                <td><button id="enviar" name="enviar">Enviar</button>
                </td>
            </tr>
            </tbody>
        </table>


        <div id="error">

        </div>

    </div>
</form>
</body>
</html>

?>;

<html>
<head>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.6.min.js"></script>
    <meta charset="utf-8">;
    <title>P�gina 100% PHP</title>
    <link rel="stylesheet" href="css/style.css">;

    <script type="text/javascript">;
        $(document).ready(function() {
//variables
            var contrasena = $('[name=contrasena]');
            var verificar_contrasena = $('[name=verificar_contrasena]');
            var confirmacion = "Las contrase�as si coinciden";
            var negacion = "No coinciden las contrase�as";
            var vacio = "La contrase�a no puede estar vac�a";
//oculto por defecto el elemento span
            var span = $('<span></span>').insertAfter(verificar_contrasena);
            span.hide();
//funci�n que comprueba las dos contrase�as
            function coincidePassword(){
                var valor1 = contrasena.val();
                var valor2 = verificar_contrasena.val();
                //muestro el span
                span.show().removeClass();
                //condiciones dentro de la funci�n
                if(valor1 != valor2){
                    span.text(negacion).addClass('negacion');
                }
                if(valor1.length==0 || valor1==""){
                    span.text(vacio).addClass('negacion');
                }
                if(valor1.length<6 || valor1.length>10){
                    span.text(longitud).addClass('negacion');
                }
                if(valor1.length!=0 && valor1==valor2){
                    span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
                }
            }
//ejecuto la funci�n al soltar la tecla
            verificar_contrasena.keyup(function(){
                coincidePassword();
            });
        });;

    </script>
</head>