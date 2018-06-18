<?php

require_once "../Datos/DA_Paciente.php";

class Paciente {

	private $num_ss;
    private $nombre;
    private $edad;

    public function __construct ($num_ss=null, $nombre=null, $edad=null) {
        $this->num_ss = $num_ss;
        $this->nombre = $nombre;
        $this->edad = $edad; 
    }

    public function getNumss() {
        return $this->num_ss;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNumss($num_ss) {
        $this->num_ss = $num_ss;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function Insertar(&$error) {
    	$objDataPaciente = new DA_Paciente();
        $resultado = $objDataPaciente->Insertar($error,$this->num_ss, $this->nombre, $this->edad);
	    return $resultado;
    }

    public function Modificar(&$error) {
        $objDataPaciente = new DA_Paciente();
        $resultado = $objDataPaciente->Modificar($error,$this->num_ss, $this->nombre, $this->edad);
	    return $resultado;
    }

    public function Eliminar(&$error){
        $objDataPaciente = new DA_Paciente();
        $resultado = $objDataPaciente->Eliminar($error,$this->num_ss);
	    return $resultado;
    }


    public function buscarPorNum_ss(&$error, $num_ss) {

    	$objDataPaciente = new DA_Paciente();
        $registro = $objDataPaciente->buscarPorNum_ss($error, $num_ss);
        if ($registro)
        	return new self($num_ss, $registro['nombre'], $registro['edad']);
        else 
        	return false;
    }

    public function Listar(&$error) {
        $objDataPaciente = new DA_Paciente();
        $arrayRegistros = $objDataPaciente->Listar($error);
        
        if (!$arrayRegistros)
        	return false;
        else {
        	$arrayPacientes = array();
        	foreach ($arrayRegistros as $registro) {
        		$objgPaciente = new Paciente($registro['num_ss'] ,$registro['nombre'] ,$registro['edad'] );
        		$arrayPacientes[]=$objgPaciente;
        	}

        	return $arrayPacientes;

        } 
        	
    }

}

?>