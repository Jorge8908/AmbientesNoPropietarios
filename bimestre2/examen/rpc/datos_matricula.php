<?php
$db = new mysqli('localhost' , 'root' , '', 'examen2');
$sql=$db->query("select * from estudiante_x_materia" );
echo '{"get": [';
while($row=$sql->fetch_array())
{
    $id_estudiante=$row['id_estudiante'];
    $id_materia=$row['id_materia'];
    echo '
{
"id_estudiante":"'.$id_estudiante.'",
"id_materia":"'.$id_materia.'"
},';
}
echo ']}';
