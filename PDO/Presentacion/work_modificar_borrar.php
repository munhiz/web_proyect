<?php
     require "../Negocio/Paciente.php";
?>

<html>
<head></head>
<body>
    
    <h1>BORRAR / MODIFICAR PACIENTE</h1>

<?php
    $error = "";
    $Paciente = new Paciente();
    $arrayPacientes = $Paciente -> Listar($error);
?>

<form action="Paciente_modificar_borrar.php" method="post">
    Pacientes:
    <select name="slPacientes">
        <option value=""></option>  
    <?php foreach ($arrayPacientes as $pac) { ?>
               <option value="<?php echo $pac->getNumss() ?>"><?php echo $pac->getNombre() ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
    if (isset($_POST['btMostrar'], $_POST['slPacientes']) and $_POST['slPacientes'] != "" ) {

        $Paciente2 = $Paciente -> buscarPorNum_ss($error, $_POST['slPacientes']);
?>
        <br><br>
        <table border='2'>
            <tr><td>Número Seg. Social: </td><td><input type="text" name="tbnum" value=<?php echo $Paciente2->getNumss() ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $Paciente2->getNombre() ?>></td></tr>
            <tr><td>Edad: </td><td><input type="text" name="tbEdad" value=<?php echo $Paciente2->getEdad() ?>></td></tr>
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

    if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $objPaciente2 = new Paciente ($_POST['tbnum'], $_POST['tbNombre'], $_POST['tbEdad']);

        if (isset($_POST['btModificar'])) {

            $resultado = $objPaciente2 -> modificar($error); 

            if ($resultado)
                echo "Registro Modificado";
            else
                echo "Error en la Modificación: ". $error;
        }

        else {

            $resultado = $objPaciente2 -> eliminar($error);
            if ($resultado)
                echo "Registro Elininado";
            else
                echo "Error en la Eliminacion: ". $error;
        }        
       
    }
  
?>




</form>

</body>
</html>
