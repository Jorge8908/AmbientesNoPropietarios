<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $fono = htmlentities($_POST['telefono']);
  $dir = htmlentities( $_POST['direccion'] );
  $user = htmlentities( $_POST['usuario'] );  
  $contrasena = htmlentities(md5( $_POST['contrasena'] ));
  $conf_contrasena = htmlentities(md5( $_POST['conf_contrasena'] ));

  $conn = new mysqli('localhost', 'root','','usuarios');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuarios(nombre,email,telefono,direccion, usuario, contrasena, conf_contrasena )
                  VALUES ('$name', '$email', '$fono', '$dir', '$user', '$contrasena', '$conf_contrasena')";

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
