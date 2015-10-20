<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}

table, th, td{
  text-align: center;
  border: 1px solid #000000;
  border-collapse: collapse;
}

div.centraTabla{
text-align: center;
}
div.centraTabla table {
margin: 0 auto;
text-align: left;
}
table tr:nth-child(even){
  background-color: #15efe8; 
}
table tr:nth-child(odd){
  background-color: #dddddd; 
}

th{
  background-color:blue; 
  color:white;

}

body {background-color:lightgrey}

label{
  
  font-size:15px;}

div {
  margin: .4em 0;
}
div label {
  width: 25%;
  float: left;
}

input{
 padding-left:10px

}

';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es genera .... (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '</ol>';
echo '<div class="centraTabla">';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';

echo '<p>A continuacion tenemos un formulario HTML basico con las sguientes caracteristicas </p>';
echo '<ul>';
echo '<li>Las etiquetas están enlazadas con sus respectivos campos</li>';
echo '<li>Las etiquetas tienen un ancho de 100px y estan en negrita</li>';
echo '<li>Los input tienen un margen inferior de 10px</li>';
echo '</ul>';

echo '<form>';
echo '<div>';
echo '<label><b>Nombre:</b>    <input type="text" name="nombre"> </label><br>';
echo '</div>';
echo '<div>';
echo '<label><b>Apellido:</b>     <input type="text" name="apellido"></label><br>';
echo '</div>';
echo '</form>';

echo '<input type="submit" value="Enviar">';

echo '</body>';
echo '</html>';