<?php

$conn = new mysqli('localhost', 'root', '', 'examen2');
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM nivel";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;
$nivel = array();
for ($j = 0; $j < $rows; ++$j) {
    $result->data_seek($j);
    $nivel[] = $result->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login Form using jQuery Ajax and PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">


</head>

<body>

<div id="form1">

    <form action="" method='POST' id="usuario" novalidate="novalidate">
        <?php
        include('welcome_nombre.php');
        {
            echo "<h1>Bienvenid@ <strong>$nom $apellp </strong>, accediste con exito</h1>";
        }

        ?>

        <input type="hidden" id="txtid" name="id_estudiante" value="<?php echo $id ?>"/>


        <select id="txtnivel" name="nivel">
            <option value="">Seleccione...</option>
            <?php
            foreach ($nivel as $pr) {
                echo '<option value="' . $pr['id_nivel'] . '">' . $pr['nombre'] . '</option>';
            }

            ?>

        </select>

        <select id="txtmateria" name="materia">
            <option value="">Seleccione...</option>
        </select>
    </form>
</div>

<button id="btnMateria" name="registrar"> Registrate</button>
<a href="./rpc/cerrar_sesion.php">cerrar sesión</a>

<div class="contenedor">
    <h1>Registro de Materias</h1>
    <div class="mensaje"></div>

    <table class="editinplace">
        <thead>

        <tr>
            <th>Materia</th>
            <th>Nivel</th>
            <th>Profesor</th>

        </tr>
        </thead>
        <tbody>


        </tbody>

    </table>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/mostrar.js"></script>


</body>
</html>