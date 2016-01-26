<?php
$db = new mysqli('localhost' , 'root' , '', 'registro');
if (isset($_GET) && count($_GET)>0)
{
    if ($db->connect_errno)
    {
        die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
    }
    else
    {
        $query=$db->query("select * from usuario order by idusuario asc");
        $datos=array();
        while ($usuario=$query->fetch_array())
        {
            $datos[]=array(	"id"=>$usuario["idusuario"],
                "nombre"=>$usuario["nombre"],
                "email"=>$usuario["email"],
                "direccion"=>$usuario["direccion"],
                "provincia"=>$usuario["provincia"],
                "canton"=>$usuario["canton"],
                "parroquia"=>$usuario["parroquia"],
                "usuario"=>$usuario["usuario"]
            );
        }
        echo json_encode($datos);
    }
}