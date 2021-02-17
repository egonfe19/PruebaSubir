<?php
$servername = "localhost";
$username = "root";
$password = "";

//Borrar

// Constantes comunes

define("SQLITE_DATABASE", "/home/barto/mclibre/tmp/mclibre/mclibre-base-datos-1-1.sqlite");  // Ubicación de la base de datos
define("SQLITE_TABLE_AGENDA", "agenda");                                                     // Nombre de la tabla Agenda

// Nombres de las tablas

$tablaAgenda = SQLITE_TABLE_AGENDA;      // Nombre de la tabla Agenda

// Consultas de borrado y creación de base de datos y tablas, etc.

$consultaCreaTabla = "CREATE TABLE $tablaAgenda (
    id INTEGER PRIMARY KEY,
    nombre VARCHAR($tamAgendaNombre),
    apellidos VARCHAR($tamAgendaApellidos)
    )";

// Configuración general

define("MYSQL_HOST", "mysql:host=localhost");        // Nombre de host
define("MYSQL_USER", "");                            // Nombre de usuario
define("MYSQL_PASSWORD", "");                        // Contraseña de usuario
define("MYSQL_DATABASE", "mclibre_base_datos_1_1");  // Nombre de la base de datos
define("MYSQL_TABLE_AGENDA", "agenda");              // Nombre de la tabla Agenda

$tablaAgenda = MYSQL_DATABASE . "." . MYSQL_TABLE_AGENDA;  // Nombre de la tabla Agenda

// Consultas de borrado y creación de base de datos y tablas, etc.

define("CONSULTA_BORRA_DB", "DROP DATABASE " . MYSQL_DATABASE);

define(
    "CONSULTA_CREA_DB",
    "CREATE DATABASE " . MYSQL_DATABASE . "
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci"
);

$consultaCreaTabla = "CREATE TABLE $tablaAgenda (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR($tamAgendaNombre),
    apellidos VARCHAR($tamAgendaApellidos),
    PRIMARY KEY(id)
    )";
	
?>