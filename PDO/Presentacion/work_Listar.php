<?php
    require "../Negocio/Paciente.php";
?>

<html>
<head></head>
<body>
    
    <h1>PACIENTES</h1>

<?php  
    $error="";
    $Paciente = new Paciente();
    $arrayPacientes = $Paciente-> Listar($error); 

    if ($error=="") {
        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>NUM SEG. SOCIAL</th>";
        echo "<th>NOMBRE</th>";
        echo "<th>EDAD</th>";
        echo "</tr>";

        foreach ($arrayPacientes as $pac) {
            echo "<tr>";
            echo "<td>" . $pac->getNumss()."</td>";
            echo "<td>" . $pac->getNombre() . "</td>";
            echo "<td>" . $pac->getEdad(). "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    else
        echo "ERRO: $error";
  

?>
    
</body>
</html>
