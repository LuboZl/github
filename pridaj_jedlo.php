<?php
function isInDB($nazov){
	$oznacTest=mysql_query("SELECT * FROM jedalny WHERE nazov='$nazov'");
if($mysql_num_rows($oznacTest)!=0){
	return 1;
	}else{return 0;}
}

require_once("mysql.php");
include_once("safety.php");
safety($_GET);
safety($_POST);
$nazov = $_POST['nazov'];
$obsah = $_POST['obsah'];
$cena = $_POST['cena'];
$kategoria = $_POST['kategoria'];
$gramaz = $_POST['gramaz'];
if($nazov==" " or $cena==" " or $gramaz==" "){
			header("Location:admin_jedalny.php?info='CHYBA: Nevyplnili ste vsetky povinne polia !'");
	}

if(isInDB==0){
	$insert = mysql_query("INSERT INTO jedalny(gramaz,cena,nazov,obsah,kategoria) VALUES('$gramaz','$cena','$nazov','$obsah','$kategoria')");
	
	if($insert){
					header("Location:admin_jedalny.php?info='Jedlo bolo pridane'");

		}else{
						header("Location:admin_jedalny.php?info='CHYBA'");

			}
	}else{
		header("Location:admin_jedalny.php?info='CHYBA: Jedlo sa uz raz nachadza v databaze !'");
		}
			

?>