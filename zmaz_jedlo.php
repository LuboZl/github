<?php
$id = $_GET['id'];
require_once("mysql.php");
$sql=mysql_query("DELETE FROM jedalny WHERE id='$id'");
	header("Location:admin_jedalny.php");


?>