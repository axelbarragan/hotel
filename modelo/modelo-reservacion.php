<?php

  /*
    ARCHIVO: modelo-reservacion.php
    CREACIÓN: 17/10/16
    MODIFICACIÓN: 17/10/16
    DESCRIPCIÓN: El Modelo representa la información con la que trabaja el sitio.
  */

  #Se hace vínculo con el archivo de conexión
  require_once("../config/conexion.php");

  class ModeloReservacion {
  	/*Atributos*/
  	private $dbs;
  	private $mysqli;
    private $personas;
    private $nombre;
    private $apellidos;

    /*Métodos*/
    #Método constructor
    public function __construct() {
    	$this->dbs = Conexion::getInstance();
    	$this->mysqli = $this->dbs->getConnection();
      $this->personas = array();
    }

    #Método para cerrar la conexión
    public function cerrar() {
    	$this->mysqli->close();
    }

    #Método para extraer datos
    public function mostrarDatos() {
      $sql = "SELECT * FROM ejemplo";
    	$consulta=$this->mysqli->query($sql);
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function insertar($nombre,$apellido) {
      $sql = "INSERT INTO ejemplo VALUES ('$nombre','$apellido')";
      $res = $this->mysqli->query($sql);
      return "Bien";
    }

  }

/*$objeto = new ModeloReservacion();
$mensaje = $objeto->insertar('Akzel','Barragan');
echo $mensaje;*/

?>