<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];


    $contrasena = md5($_POST['contrasena']);
    $verificar_contrasena = md5($_POST['verificar_contrasena']);
    if ($contrasena !== $verificar_contrasena) {
        echo htmlentities('Las contraseñas no coinciden');
    }
    $conn = new mysqli('localhost', 'root', '', 'sistema');
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO usuario
                  (nombre,
                    apellidos,
                    email,
                    contrasena,
                    sexo,
                    fecha
                   )
                VALUES (
                  '$nombre',
                  '$apellidos',
                  '$email',
                  '$contrasena',
                  '$sexo',
                  '$fecha'
                  )
  ";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
}