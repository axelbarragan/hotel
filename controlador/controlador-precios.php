<?php

  /*
    ARCHIVO: controlador-registrar.php
    CREACIÓN: 17/10/2016
    MODIFICACIÓN: 17/10/2016
    DESCRIPCIÓN: Se encarga de procesar las peticiones y realizar cambios en
      el Modelo o en la Vista
  */

  #Se hace vínculo con el archivo del modelo
  require_once('../modelo/modelo-precios.php');

  #Se genera un objeto del modelo
  $objeto = new ModeloPrecios();
  $mensaje = $objeto->mostrarPrecios();
  echo $mensaje;

?>