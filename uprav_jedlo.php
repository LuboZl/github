<?php

$id = $_GET['id'];

require_once("mysql.php");
$nazov = $_POST['nazov'];
$cena = $_POST['cena'];
$kategoria = $_POST['kategoria'];
$gramaz = $_POST['gramaz'];
$obsah = $_POST['obsah'];

$sql=mysql_query("UPDATE jedalny SET nazov='$nazov', cena='$cena', kategoria='$kategoria', gramaz='$gramaz', obsah='$obsah'  WHERE id='$id'");
	header("Location:admin_jedalny.php");


?>