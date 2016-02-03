<?php

if($_POST){

	$email=$_POST['email'];

	
	$enlace = mysql_connect("localhost", "root", "");
      mysql_select_db("examen2", $enlace);
  
  	 $q_select= "SELECT * from estudiante where email='$email'";
  	 $resultado = mysql_query($q_select, $enlace);
     
     $filas_email = mysql_num_rows($resultado);
     if($filas_email>0){
    echo "false";
     }
     else{
    echo "true";
}
}
    else{

      echo "No se han recibido datos";
    }  

?>