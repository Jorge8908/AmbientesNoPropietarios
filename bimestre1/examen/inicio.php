<?php
require('p_clientes.php');


;?>

<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <title>Página 100% PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<form action="p_clientes.php" method="post">
    <div id="div-regForm">

        <div class="form-title">Registro de Clientes</div>



        <table>
            <tbody>
            <tr>
                <td><label >Nombre:</label></td>
                <td><div class="input-container">
                        <input type="text" id="nombre" name="nombre" value="">
                    </div></td>
            </tr>

            <tr>
                <td><label >Apellido:</label></td>
                <td><div class="input-container">
                        <input type="text"  name="apellido" value="">
                    </div></td>
            </tr>


            <tr>
                <td><label>Edad:</label></td>
                <td>
                    <div class="input-container">
                        <select name="edad" id="edad">
                            <option value="0">Selecciona.....</option>
                            <option value="1">Menos de 20 años</option>
                            <option value="2">Entre20 y 39 años</option>
                            <option value="3">Entre40 y 59 años</option>
                            <option value="4">Mas de 60</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td><label>Peso:</label></td>
                <td><div class="input-container">
                        <input type="text" id="peso" name="peso" value="">
                    </div></td>
            </tr>

            <tr>
                <td><label>Sexo:</label></td>
                <td>
                    <input type="radio" name="genero" value="masculino" checked>Masculino

                    <input type="radio" name="genero" value="femenino">Femenino

                </td>
            </tr>

            <tr>
                <td><label>Estado Civil:</label></td>
                <td>
                    <input type="radio" name="estado_civil" value="soltero" checked>Soltero

                    <input type="radio" name="estado_civil" value="casado">Casado
                    <input type="radio" name="estado_civil" value="otro">otro

                </td>
            </tr>




            <tr>
                <td> </td>
                <td><button id="registrar" name="registrar">Registrar</button>
                </td>
            </tr>
            </tbody>
        </table>


        <div id="error">

        </div>

    </div>


<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>

            <?php
            while($rs=mysql_fetch_array($sql))
            {
                echo "<tr>"
                    ."<td>".$rs['nombre']."</td>"
                    ."<td>".$rs['apellido']."</td>"
                    ."<td>".$rs['edad']."</td>"
                    ."<td>".$rs['peso']."</td>"
                    ."<td>".$rs['sexo']."</td>"
                    ."<td>".$rs['estado_civil']."</td>"
                    ."</tr>";
            }
            ?>
        </table>
</form>
</body>

</html>
