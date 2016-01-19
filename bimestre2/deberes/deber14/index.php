<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// print_r($provincias);

$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

$usuarios;

$result ->close();
$conn ->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Deber 9</title>
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
    <style>
        .contenedor{margin:60px auto;width:960px;font-family:sans-serif;font-size:15px}
        table {width:100%;box-shadow:0 0 10px #ddd;text-align:left}
        th {padding:5px;background:#555;color:#fff}
        td {padding:5px;border:solid #ddd;border-width:0 0 1px;}
        .editable span{display:block;}
        .editable span:hover {background:url("images/edit.png") 90% 50% no-repeat;cursor:pointer}

        td input{height:24px;width:200px;border:1px solid #ddd;padding:0 5px;margin:0;border-radius:6px;vertical-align:middle}
        a.enlace{display:inline-block;width:24px;height:24px;margin:0 0 0 5px;overflow:hidden;text-indent:-999em;vertical-align:middle}
        .guardar{background:url("images/save.png") 0 0 no-repeat}
        .cancelar{background:url("images/cancel.png") 0 0 no-repeat}

        .mensaje{display:block;text-align:center;margin:0 0 20px 0}
        .ok{display:block;padding:10px;text-align:center;background:green;color:#fff}
        .ko{display:block;padding:10px;text-align:center;background:red;color:#fff}
    </style>
</head>
<body>
<div id="mensaje" class="alert"></div>

<div id ="form">
<p id ='titulo1'><b>Registrate</b></p>
<p id = 'titulo1'> Es gratis(y lo seguira siendo).</p>
<form action="" method='POST' id="usuario" novalidate="novalidate">
<table>
<tr>
<div id="fila1">
<td>
<label for="Nombre">Nombre</label>
</td>
<td>
<input type="text" id="txtnombre" value="" name="nombre">
</td>
</div>
</tr>
<tr>
<div id="fila2">
<td>
<label for="Email">Email</label>
</td>
<td>
<input type="text" id="txtemail" value="" name="email">
</td>
</div>
</tr>
<tr>
<td>
<label for="telefono">Telefono</label>
</td>
<td>
<input type="text" id="txtfono" value="" name="telefono">
</td>
</tr>
<tr>
<td>
<label for="direccion">Dirección</label>
</td>
<td>
<input type="text" id="txtdir" value="" name="direccion">
</td>
</tr>

<tr>
<td>
<label for="provincia">Provincia</label>
</td>
<td>
<select id="txtprovincia" name="provincia">
  <option value="">Seleccione...</option>
<?php
  foreach($provincias as $pr){
    echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
  }

?>
</select>
</td>
</tr>

<tr>
<td>
<label for="canton">Cantón</label>
</td>
<td>
<select id="txtcanton" name="canton">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="parroquia">Parroquia</label>
</td>
<td>
<select id="txtparroquia" name="parroquia">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="usuario">Usuario</label>
</td>
<td>
<input type="text" id="txtusuario" value="" name="usuario">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia" value="" name="contrasenia">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Verificar Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia2" value="" name="contrasenia2">
</td>
</tr>

</table>
<button  id="btnRegistrar" name="registrar"> Registrate</button>
</form>
</div>

<div class="contenedor">
    <h1>Edicion de usuarios</h1>
    <div class="mensaje"></div>
    <table class="editinplace">
        <tr>
            <th>Cod.</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Direccion</th>
            <th>Usuario</th>
        </tr>
    </table>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
    $(document).ready(function()
    {
        /* OBTENEMOS TABLA */
        $.ajax({
            type: "GET",
            url: "rpc/edit.php?tabla=1"
        })
            .done(function(json) {
                json = $.parseJSON(json)
                for(var i=0;i<json.length;i++)
                {
                    $('.editinplace').append(
                        "<tr><td class='id'>"+json[i].id+"</td><td class='editable' data-campo='nombre'><span>"+json[i].nombre+"</span></td><td class='editable' data-campo='email'><span>"+json[i].email+"</span></td><td class='editable' data-campo='direccion'><span>"+json[i].direccion+"</span></td><td class='editable' data-campo='usuario'><span>"+json[i].usuario+"</span></td></tr>");
                }
            });

        var td,campo,valor,id;
        $(document).on("click","td.editable span",function(e)
        {
            e.preventDefault();
            $("td:not(.id)").removeClass("editable");
            td=$(this).closest("td");
            campo=$(this).closest("td").data("campo");
            valor=$(this).text();
            id=$(this).closest("tr").find(".id").text();
            td.text("").html("<input type='text' name='"+campo+"' value='"+valor+"'><a class='enlace guardar' href='#'>Guardar</a><a class='enlace cancelar' href='#'>Cancelar</a>");
        });

        $(document).on("click",".cancelar",function(e)
        {
            e.preventDefault();
            td.html("<span>"+valor+"</span>");
            $("td:not(.id)").addClass("editable");
        });

        $(document).on("click",".guardar",function(e)
        {
            $(".mensaje").html("<img src='loading.gif'>");
            e.preventDefault();
            nuevovalor=$(this).closest("td").find("input").val();
            if(nuevovalor.trim()!="")
            {
                $.ajax({
                    type: "POST",
                    url: "editinplace.php",
                    data: { campo: campo, valor: nuevovalor, id:id }
                })
                    .done(function( msg ) {
                        $(".mensaje").html(msg);
                        td.html("<span>"+nuevovalor+"</span>");
                        $("td:not(.id)").addClass("editable");
                        setTimeout(function() {$('.ok,.ko').fadeOut('fast');}, 3000);
                    });
            }
            else $(".mensaje").html("<p class='ko'>Debes ingresar un valor</p>");
        });
    });

</script>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/edit.js"></script>

</body>
</html>