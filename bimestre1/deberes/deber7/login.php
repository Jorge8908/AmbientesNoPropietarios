<?php
include('php/p_login.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<?php if ($msg != '') : ?>
    <div><?php echo $msg; ?></div>
<?php endif; ?>
<section class="container">
    <div class="login">
        <h1>Iniciar Sesión</h1>

        <form>
            <a href="registro.php"><h2>Registrarse</h2></a>

            <p><input type="text" name="login" value="" placeholder="Nombre de Usuario o Email"></p>

            <p><input type="password" name="password" value="" placeholder="Contraseña"></p>

            <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
    </div>
</section>
</body>
</html>
