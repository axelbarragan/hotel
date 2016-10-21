<?php

  /*
    ARCHIVO: modelo-precios.php
    CREACIÓN: 20/10/16
    MODIFICACIÓN: 20/10/16
    DESCRIPCIÓN: El Modelo representa la información con la que trabaja el sitio.
  */

  #Se hace vínculo con el archivo de conexión
  require_once("../config/config.php");

  class ModeloPrecios {
  	/*Atributos*/

    /*Métodos*/
    #Método constructor
    public function __construct() {

    }

    #Método para extraer datos
    public function mostrarPrecios() {
      /*Configuración para México*/
      date_default_timezone_set("America/Mexico_City");
      /*Obtención de datos de fecha*/
      $dia = date("d-m-Y");
      $año = date("Y");
      /*SEMANA SANTA*/
      $semanaSanta = date("d-M-Y", easter_date($año));
      $semanaSantaDom1 = strtotime('-7 day',strtotime($semanaSanta));
      $semanaSantaDom1 = date('d-m-Y',$semanaSantaDom1);
      $semanaSantaLun  = strtotime('-6 day',strtotime($semanaSanta));
      $semanaSantaLun  = date('d-m-Y',$semanaSantaLun);
      $semanaSantaMar  = strtotime('-5 day',strtotime($semanaSanta));
      $semanaSantaMar  = date('d-m-Y',$semanaSantaMar);
      $semanaSantaMie  = strtotime('-4 day',strtotime($semanaSanta));
      $semanaSantaMie  = date('d-m-Y',$semanaSantaMie);
      $semanaSantaJue  = strtotime('-3 day',strtotime($semanaSanta));
      $semanaSantaJue  = date('d-m-Y',$semanaSantaJue);
      $semanaSantaVie  = strtotime('-2 day',strtotime($semanaSanta));
      $semanaSantaVie  = date('d-m-Y',$semanaSantaVie);
      $semanaSantaSab  = strtotime('-1 day',strtotime($semanaSanta));
      $semanaSantaSab  = date('d-m-Y',$semanaSantaSab);
      $semanaSantaDom2 = strtotime('-0 day',strtotime($semanaSanta));
      $semanaSantaDom2 = date('d-m-Y',$semanaSantaDom2);
      /*---*/
      /*SEMANA DE VERANO*/
    
      /*---*/
      /*SEMANA DE INVIERNO*/
      $semanaInviernoDom1 = SEM_VER_DOM1."-".$año;
      $semanaInviernoLun  = SEM_VER_LUN."-".$año;
      $semanaInviernoMar  = SEM_VER_MAR."-".$año;
      $semanaInviernoMie  = SEM_VER_MIE."-".$año;
      $semanaInviernoJue  = SEM_VER_JUE."-".$año;
      $semanaInviernoVie  = SEM_VER_VIE."-".$año;
      $semanaInviernoSab  = SEM_VER_SAB."-".$año;
      $semanaInviernoDom2 = SEM_VER_DOM2."-".$año;
      /*---*/
      switch ($dia) {
        //Semana santa
        case $semanaSantaDom1:
          echo $a_b;
          break;
        case $semanaSantaLun:
          echo $mensajeSi.$semanaSantaLun;
          break;
        case $semanaSantaMar:
          echo $mensajeSi.$semanaSantaMar;
          break;
        case $semanaSantaMie:
          echo $mensajeSi.$semanaSantaMie;
          break;
        case $semanaSantaJue:
          echo $mensajeSi.$semanaSantaJue;
          break;
        case $semanaSantaVie:
          echo $mensajeSi.$semanaSantaVie;
          break;
        case $semanaSantaSab:
          echo $mensajeSi.$semanaSantaSab;
          break;
        case $semanaSantaDom2:
          echo $mensajeSi.$semanaSantaDom2;
          break;
        //Verano

        //Invierno
        case $semanaInviernoDom1:
          echo $mensajeSi.$semanaInviernoDom1;
          break;
        case $semanaInviernoLun:
          echo $mensajeSi.$semanaInviernoLun;
          break;
        case $semanaInviernoMar:
          echo $mensajeSi.$semanaInviernoMar;
          break;
        case $semanaInviernoMie:
          echo $mensajeSi.$semanaInviernoMie;
          break;
        case $semanaInviernoJue:
          echo $mensajeSi.$semanaInviernoJue;
          break;
        case $semanaInviernoVie:
          echo $mensajeSi.$semanaInviernoVie;
          break;
        case $semanaInviernoSab:
          echo $mensajeSi.$semanaInviernoSab;
          break;
        case $semanaInviernoDom2:
          echo $mensajeSi.$semanaInviernoDom2;
          break;
        
        //Temporada baja  
        default:
          echo "Temporada baja: ".$a_a;
          break;
      }
    }
  }

?>