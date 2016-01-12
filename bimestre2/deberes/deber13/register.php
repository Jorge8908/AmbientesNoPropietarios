<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>
<div id="success" class="has-success"></div>
<div id="error" class="has-error"></div>

<form id="usuarios">

    <div id="legend">
        <legend class="">Registro</legend>
    </div>


    <label for="nombre">Nombre</label>
    <div class="form-group">
        <input type="text" class="input-xlarge" name="nombre" id="nombre" value="" placeholder="Nombre">
    </div>


    <label for="email">Email</label>
    <div class="form-group">
        <input type="text" class="input-xlarge" name="email" id="email" value="" placeholder="Email" required title="Ingrese un E-mail valio">
    </div>


    <label for="telefono">Telefono</label>
    <div class="form-group">
        <input type="text" class="input-xlarge" name="telefono" id="telefono" value="" placeholder="Telefono">
    </div>

    <label for="direccion">Direccion</label>
    <div class="form-group">
        <input type="text" class="input-xlarge" name="direccion" id="direccion" value="" placeholder="Direccion">
    </div>


    <label for="usuario">Usuario</label>
    <div class="form-group">
        <input type="text" class="input-xlarge" name="usuario" id="usuario" value="" placeholder="Usuario">
    </div>

    <label for="contrasena">Contraseña</label>
    <div class="form-group">
        <input type="password" class="input-xlarge" name="contrasena" id="contrasena" value="" placeholder="Contraseña" >
    </div>

    <label for="conf-contrasena">Confirmar contraseña</label>
    <div class="form-group">
        <input type="password" class="form-group" name="conf_contrasena" id="conf_contrasena" value=""
               placeholder="Confirmar contraseña">
    </div>

</form>
    <button type="button" class="btn btn-primary" id="btn-enviar">Enviar</button>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>


</body>
</html>


