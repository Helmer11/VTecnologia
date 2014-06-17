<?php
require_once 'clase.php';
$not= new Noticia();
$titulo =$_POST['titulo'];
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];
$texto = $_POST['texto'];


$not->agregar_contenido($autor, $titulo, $categoria, $texto);






?>
