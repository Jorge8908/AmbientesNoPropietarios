<?php

$conexion = new mysqli('localhost','root','','examen2');
$usuario = $_SESSION["email"];

$sql = "SELECT * FROM  estudiante WHERE email='$usuario'";


$query = $conexion->query($sql);
$row = mysqli_fetch_assoc($query);
$nom = $row['nombres'];
$apellp = $row['apellidos'];
$id=$row['id_estudiante'];
mysqli_close($conexion);