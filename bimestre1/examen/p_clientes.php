<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $genero = $_POST['genero'];
    $estado_civil = $_POST['estado_civil'];

    if($error == '') {
    $conn = new mysqli('localhost', 'root', '', 'examen');
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO clientes
                  (nombre,
                    apellido,
                    edad,
                    peso,
                    genero,
                    estado_civil

                   )
                VALUES (
                  '$nombre',
                  '$apellido',
                  '$peso',
                  '$edad',
                  '$genero',
                  '$estado_civil'

                  )
  ";



    $result = $conn->query($query);
    if (!$result) {
        $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
    }

    if ($error == '') {
        http_redirect('inicio.php?exito=' . urlencode('Datos guardados con exito'));
    }

        $sql = "SELECT * FROM clientes";
        $sql = mysql_query($sql, $conn);
}
}