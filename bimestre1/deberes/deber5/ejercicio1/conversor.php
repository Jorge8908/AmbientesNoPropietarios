
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Conversor de Dinero</h1>
<form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="monto" size="10" value=1>
    <input type="submit" value="Convertir">

    Convertir a:
    <select name="moneda">
        <option value="1" name="moneda">Euros</option>
        <option value="2" name="moneda">Pesos Colombianos</option>
    </select>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr align="left" noshade="noshade" size="3" width="80%" />
    <br>
    <br>
    <br>

</form>
</body>
</html>

<?php


if (isset($_POST["monto"])) {
    $moneda=$_POST["moneda"];
    define("cantidad", $_POST["monto"]);

    echo "Son ";
    if($moneda==1){
        echo  cantidad*0.931567082;
        echo "  Euros";
    }else{
        echo  cantidad*2840.90909;
        echo "  Pesos Colombianos";

    }
}

?>

