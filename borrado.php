<?php
require_once("clase.php");

$c = new Noticia();

$c->borrar($_GET['id']);

header("Location:login.php");

?>