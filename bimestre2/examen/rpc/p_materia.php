<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
$result="";
if ($_POST) {
    $id_estudiante = $_POST['id_estudiante'];
    $id_materia = $_POST['id_materia'];



    $conn = new mysqli('localhost', 'root',"", "examen2");
    if( $conn->connect_error )
        $result = "No se puede establece la conexión con la BDD";
    else{
        $q_insert = "INSERT INTO estudiante_x_materia(id_estudiante,id_materia)
                  VALUES ('$id_estudiante', '$id_materia')";

        $res = $conn->query($q_insert);

        if(!$res){
            $result = 'Existi&oacute; un error al insertar.' . $conn->error;
        } else {
            $result = 'Mensaje enviado con &eacute;xito.';
        }
    }
}

echo json_encode( $result );
?>