<?php

$conn = new mysqli('localhost', 'root', '', 's5e3');
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM datos";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j = 0; $j < $rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
    echo 'Nombre: ' . $row['provincia'] . '<br>';
    echo 'Apellidos: ' . $row['canton'] . '<br>';
    echo 'Email: ' . $row['parroquia'] . '<br>';

}
$result->close();
$conn->close();
