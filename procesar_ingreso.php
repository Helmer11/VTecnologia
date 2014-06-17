<?php
session_start();
require_once "noticia.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$use = $_POST['usuario'];
$clave = $_POST['clave'];

$conec = new Conexion();

$conec->ingresar($nombre,$apellido,$correo,$use,$clave);


?>