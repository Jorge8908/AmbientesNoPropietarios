<?php

if ($_POST) {

    $email = $_POST['email'];
    $contrasena = md5($_POST['contrasena']);
    $verificar_contrasena = md5($_POST['verificar_contrasena']);
    if ($contrasena !== $verificar_contrasena) {
        echo htmlentities('Las contraseñas no coinciden');
    }
    if($error == '') {
    $conn = new mysqli('localhost', 'root', '', 'examen');
    if ($conn->connect_error) die($conn->connect_error);

        $query = "INSERT INTO usuarios
                  (
                    email,
                    contrasena

                   )
                VALUES (

                  '$email',
                  '$contrasena'

                  )
  ";
        $result = $conn->query($query);
        if (!$result) {
            $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
        }

        if ($error == '') {
            http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
        }
    }
}