<?php
    require "../Negocio/Paciente.php";
?>

<html>
<head></head>
<body>
    
<h1>INSERTAR PACIENTE</h1>

<form action="Paciente_Insertar.php" method="post">
    <table border='2'>
        <tr><td>Número Seg. Social: </td><td><input type="text" name="tbNumss"> </td></tr>
        <tr><td>Nombre: </td><td><input type="text" name="tbNombre"></td></tr>
        <tr><td>Edad: </td><td><input type="text" name="tbEdad"></td></tr>
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>

<?php

if (isset($_POST['btInsertar'])) {
   $error="";         
   $objPaciente = new Paciente($_POST['tbNumss'], $_POST['tbNombre'], $_POST['tbEdad']);
   
   $resultado = $objPaciente -> insertar($error);

   // Motrar el resultado de los registro de la base de datos
    if ($resultado)
        echo "Registro Insertado";
    else
        echo "Error en la Inserción: $error";   
}

?>
    
</body>
</html>
