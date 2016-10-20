/* Archivo SQL general */

 -- Creación de la base de datos --
CREATE DATABASE IF NOT EXISTS `ejemplo`;
USE `ejemplo`;

-- Creación de la tabla de reservaciones --
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `nom_res` varchar(30) NOT NULL,
  `app_res` varchar(40) NOT NULL,
  `email_res` varchar(40) NOT NULL,
  `checkin` varchar(30) NOT NULL,
  `checkout` varchar(30) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

