<?php
//include('p_index.php');?>
<!---->
<!--<!DOCTYPE html>-->
<!---->
<!---->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Inicio de Sesi�n</title>-->
<!--    <link rel="stylesheet" href="css/styles.css">-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<section class="container">-->
<!--    <div class="login">-->
<!--        <h1>Iniciar Sesi�n</h1>-->
<!---->
<!--        <form action="p_index.php" method="POST">-->
<!--            <a  href="registro.php"><h2>Registrarse</h2></a>-->
<!---->
<!--            <p><input type="text" name="login" value="" placeholder="Nombre de Usuario o Email"></p>-->
<!---->
<!--            <p><input type="password" name="password" value="" placeholder="Contrase�a"></p>-->
<!---->
<!---->
<!--            <input type="submit" value="Crear sesi�n" />-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->
<!--</body>-->
<!--</html>-->

<?php
include('p_index.php');
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Crear una sesi�n en PHP</title>
</head>
<body>
<?php if($msg != '') : ?>
    <div><?php echo $msg; ?></div>
<?php endif; ?>
<h1>Creaci�n de una sesi�n</h1>
<form action="" method="POST">
    <p>
        <label>Email:</label>
        <input type="text" name="email" />
    </p>
    <p>
        <label>Contrase�a:</label>
        <input type="password" name="password" />
    </p>
    <p>
        <input type="submit" value="Crear sesi�n" />
    </p>
    <p><a href="registro.php">Registrarme</a></p>
</form>
</body>
</html>