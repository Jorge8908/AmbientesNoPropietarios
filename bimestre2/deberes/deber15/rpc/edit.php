<?php

$db = new mysqli('localhost' , 'root' , '', 'registro');


if (isset($_POST) && count($_POST)>0)
{
    if ($db->connect_errno)
    {
        die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
    }
    else
    {

        $query=$db->query("update usuario set ".$_POST["campo"]."='".$_POST["valor"]."' where idusuario='".intval($_POST["id"])."' limit 1");
        if ($query) echo "<span class='ok'>Valores modificados correctamente.</span>";
        else echo "<span class='ko'>".$db->error."</span>";
    }
}

?>