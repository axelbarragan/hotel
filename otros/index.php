<?php

  //Script para la asignación de precios dependiendo la fecha.
  /*Precios de las habitaciones*/
  $a_a = 100; //Sencilla - Baja
  $a_b = 150; //Sencilla - Alta

  $b_a = 200; //Doble    - Baja
  $b_b = 250; //Doble    - Alta
  
  $c_a = 300; //Triple   - Baja
  $c_b = 350; //Triple   - Alta

  /*Configuración para México*/
  date_default_timezone_set("America/Mexico_City");

  /*Obtención de datos de fecha*/
  $año = date("Y");
  $hoy = date("d-n-Y");

  $uno = 20;
  $dos = 10;
  $tre = 2016;
  $fecha = $uno."-".$dos."-".$tre;
  echo "Fecha de hoy: ".$fecha."<br>";
  
  /*Algoritmo para fecha exacta de semana santa*/
  $semanaSanta = date("d-m-Y", easter_date($año));
  echo "Semana santa sin formato: ".$semanaSanta."<br>";
  $nuevafecha = strtotime('-7 day',strtotime($semanaSanta));
  $nuevafecha = date('d-m-Y',$nuevafecha);
  echo "Semana santa con formato: ".$nuevafecha."<br>";
  /*---*/

  $fecha = "30-10-2016";
  $semanaSantaInicio = "20-10-2016";
  $semanaSantaTermino = "23-10-2016";
  $semanaVeranoInicio = "24-10-2016";
  $semanaVeranoTermino = "26-10-2016";
  $semanaNavidadInicio = "27-10-2016";
  $semanaNavidadTermino = "29-10-2016";

  if($fecha >= $semanaSantaInicio and $fecha <= $semanaSantaTermino) {
    echo "Es semana santa";
  } else if($fecha >= $semanaVeranoInicio and $fecha <= $semanaVeranoTermino) {
    echo "Es semana de verano";
  } else if($fecha >= $semanaNavidadInicio and $fecha <= $semanaNavidadTermino) {
    echo "Es semana de navidad";
  } else {
    echo "Temporada baja!";
  }


?>