<?php

if ($_POST) {
    $provincia = $_POST['provincia'];
    $canton = $_POST['canton'];
    $parroquia = $_POST['parroquia'];


    $conn = new mysqli('localhost', 'root', '', 's5e3');
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO datos
                  (provincia,
                    canton,
                    email
                                       )
                VALUES (
                  '$provincia',
                  '$canton',
                  '$parroquia'
                  )
  ";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
}