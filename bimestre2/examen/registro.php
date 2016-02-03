

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Deber 9</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">

<body>
<div id="mensaje" class="alert"></div>

<div id ="form">
    <p id ='titulo1'><b>Registrate</b></p>
    <p id = 'titulo1'> Es gratis(y lo seguira siendo).</p>
    <form action="" method='POST' id="usuario" novalidate="novalidate">
        <table>
            <tr>
                <div id="fila1">
                    <td>
                        <label for="Nombre">Nombres</label>
                    </td>
                    <td>
                        <input type="text" id="txtnombre" value="" name="nombre">
                    </td>
                </div>
            </tr>
            <tr>
                <div id="fila1">
                    <td>
                        <label for="Nombre">Apellidos</label>
                    </td>
                    <td>
                        <input type="text" id="txtapellido" value="" name="apellido">
                    </td>
                </div>
            </tr>
            <tr>
                <div id="fila2">
                    <td>
                        <label for="Email">Email</label>
                    </td>
                    <td>
                        <input type="text" id="txtemail" value="" name="email">
                    </td>
                </div>
            </tr>

            <tr>
                <td>
                    <label for="contrasenia">Contraseña</label>
                </td>
                <td>
                    <input type="password" id="contrasenia" value="" name="contrasenia">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="contrasenia">Verificar Contraseña</label>
                </td>
                <td>
                    <input type="password" id="contrasenia2" value="" name="contrasenia2">
                </td>
            </tr>

        </table>
        <button  id="btnRegistrar" name="registrar" href="index.php "> Registrate</button>
    </form>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>