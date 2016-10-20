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
  $semanaInviernoDom1 = "18-12-".$año;
  $semanaInviernoLun  = "19-12-".$año;
  $semanaInviernoMar  = "20-12-".$año;
  $semanaInviernoMie  = "21-12-".$año;
  $semanaInviernoJue  = "22-12-".$año;
  $semanaInviernoVie  = "23-12-".$año;
  $semanaInviernoSab  = "24-12-".$año;
  $semanaInviernoDom2 = "25-12-".$año;
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

?>