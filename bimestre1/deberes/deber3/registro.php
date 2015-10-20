<?php



echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<link rel="stylesheet" href="style.css">';
echo '</head>';

echo '<body>';
echo '<div id="div-regForm">';
echo '<div class="form-title">Regístrate</div>';
echo '<div class="form-sub-title">Es gratis (y lo seguirá siendo)</div>';

echo '<form id="regForm" action="submit.php" method="post">';
echo '<table>';
echo '<tbody>';
echo '<tr>';
echo '<td><label >Nombre:</label></td>';
echo '<td><div class="input-container">';
echo '<input name="nombre" id="nombre" type="text" />';
echo '</div></td>';
echo '</tr>';

echo '<tr>';
echo '<td><label >Apellido:</label></td>';
echo '<td><div class="input-container">';
echo '<input name="apellido" id="apellido" type="text" />';
echo '</div></td>';
echo '</tr>';

echo '<tr>';
echo '<td><label>Tu Email:</label></td>';
echo '<td><div class="input-container">';
echo '<input name="email" id="email" type="text" />';
echo '</div></td>';
echo '</tr>';

echo '<tr>';
echo '<td><label>Escribe de nuevo tu correo electrónico:</label></td>';
echo '<td><div class="input-container">';
echo '<input name="nemail" id="nemail" type="text" />';
echo '</div></td>';
echo '</tr>';

echo '<tr>';
echo '<td><label>Contraseña Nueva:</label></td>';
echo '<td><div class="input-container">';
echo '<input name="pass" id="pass" type="password" />';
echo '</div></td>';
echo '</tr>';

echo '<tr>';
echo '<td><label>Sexo:</label></td>';
echo '<td>';
echo '<div class="input-container">';
echo '<select name="sex-select" id="sex-select">';
echo '<option value="0">Selecciona el sexo:</option>';
echo '<option value="1">Femenino</option>';
echo '<option value="2">Masculino</option>';
echo '</select>';
echo '</div>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td><label>Fecha de nacimiento:</label></td>';
echo '<td>';
echo '<div class="input-container">';
echo '<select name="mes">';
echo '<option value="0">Mes:</option>';
echo '</select>';

echo '<select name="Dia:">';
echo '<option value="0">Dia:</option>';
echo '</select>';

echo '<select name="anio">';
echo '<option value="0">Año:</option>';
echo '</select>';
echo '</div>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td>';
echo '<a href="pagina_deber.php">¿Porque debo proporcionar esta información?</a>';
echo '</td>';
echo '</tr>';


echo '<tr>';
echo '<td> </td>';
echo '<td><input type="submit" class="greenButton" value="Registrarse" />';
echo '</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';


echo '</form>';

echo '<div id="error">';

echo '</div>';

echo '</div>';

echo '</body>';
echo '</html>';