<?php

require_once 'ConexionHospital.php';

class DA_Paciente {

	const TABLA = 'pacientes';

	public function Insertar(&$error, $num_ss, $nombre, $edad) {
    	$conexion = new ConexionHospital();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (num_ss, nombre, edad) VALUES(:num_ss, :nombre, :edad)');
		
		$consulta->bindParam(':num_ss', $num_ss);
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':edad', $edad);
        
        $resultado = $consulta->execute();
        $conexion = null;

        if (!$resultado)
            $error=($consulta->errorInfo())[2];

	    return $resultado;
    }

    public function Modificar(&$error, $num_ss, $nombre, $edad) {
        $conexion = new ConexionHospital();

        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, edad = :edad WHERE num_ss = :num_ss');

        $consulta->bindParam(':num_ss', $num_ss);
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':edad', $edad);

        $resultado= $consulta->execute();

        //echo $consulta->queryString . "</br>";
        //echo $num_ss .$nombre . $edad;
        $conexion = null;

		if (!$resultado)
            $error=($consulta->errorInfo())[2];

        return $resultado;
        
    }

    public function Eliminar(&$error, $num_ss){
        $conexion = new ConexionHospital();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE num_ss = :num_ss');
        $consulta->bindParam(':num_ss', $num_ss);
        $resultado=$consulta->execute();
        $conexion = null;

        if (!$resultado)
            $error=($consulta->errorInfo())[2];

        return $resultado;
    }

    public function buscarPorNum_ss(&$error, $num_ss) {
        $conexion = new ConexionHospital();
        $consulta = $conexion->prepare('SELECT nombre, edad FROM ' . self::TABLA . ' WHERE num_ss = :num_ss');
        $consulta->bindParam(':num_ss', $num_ss);
        $resultado = $consulta->execute();
        
        if (!$resultado)
            $error=($consulta->errorInfo())[2];
        else
            $registro = $consulta->fetch();
        
        $conexion = null;

        return $registro;
    }

    public function Listar(&$error) {
        $conexion = new ConexionHospital();
        $consulta = $conexion->prepare('SELECT num_ss, nombre, edad FROM ' . self::TABLA);
        $resultado = $consulta->execute();

        if (!$resultado)
            $error=($consulta->errorInfo())[2];
        else
            $arrayRegistros = $consulta->fetchAll();
        
        $conexion = null;
        
        return $arrayRegistros;
    }

}

?>