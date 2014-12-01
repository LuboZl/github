<div id="jedalny_wrapper">
<?php


/*
  <table align="center">
                        
                        	<tr>
                            	<td><div id="jedalny_left"></div></td                                ><td><div id="jedalny_strany"> Strana 1 / 9</div></td>

                                <td><div id="jedalny_right"></div></td>
                            </tr>
                        k
                        </table>
*/

require_once("php/mysql.php");
include_once("php/safety.php");
safety($_GET);
safety($_POST);

function zobraz($kat){
	$oznac = mysql_query("SELECT * FROM jedalny WHERE kategoria='$kat' ORDER BY id ASC");


	include_once("php/kategorie.php");
	$kategoria = getKat($kat);
	
	echo"<div class=\"jedalny_head\">$kategoria</div>";
	
	while($vytah=mysql_fetch_array($oznac)){
		$cena=$vytah['cena'];
		$gramaz=$vytah['gramaz'];
		$nazov=$vytah['nazov'];
		$obsah=$vytah['obsah'];
	
	if($obsah!=""){
		$obsah="<br />
(".$obsah.")";
		}
		
		echo"
		<div class=\"jedlo_wrapper\">
                    	<table>
                        	<tr>
           <td  class=\"gramaz\" width=\"30\" align=\"center\" height=\"46\">".$gramaz."</td>

                            	<td  class=\"nazov_jedla\" width=\"402\" height=\"46\"><b>".$nazov."</b><font size=\"-2\">".$obsah."</font>

                                </td>
                                <td class=\"cena_jedla\" width=\"59\" height=\"46\">".$cena." €</td>
                            </tr>
                        </table>
                    </div>
		";
		}
	}
	
	$k=$_GET['k'];
	if($k==""){$k=1;}
	
	switch($k){
		case 1:
		zobraz("predjedla");
		zobraz("polievky");
		zobraz("salaty");
		zobraz("snack");
		break;
		
			case 2:
		zobraz("cestoviny");
		zobraz("gril");

		break;
		
			case 3:
		zobraz("hlavne");

		break;
		
			case 4:
		zobraz("prilohy");

		break;
		
		case 5:
		zobraz("kompoty");

		break;
				case 6:
		zobraz("dezerty");

		break;
				case 7:
		zobraz("pizza");

		break;
		
				case 8:
		zobraz("ranajky");
		zobraz("ranajky_priloha");
		zobraz("ranajky_napoj");

		break;
		
			case 9:
		zobraz("aperitivy");
		zobraz("vina");
		zobraz("destilaty");

		break;
		
		case 10:
		zobraz("whisky");
		zobraz("likery");

		break;
		
		case 11:
		zobraz("brandy");
		zobraz("nealko");

		break;
		
		case 12:
		zobraz("domace_napoje");
		zobraz("pivo");

		break;
		
		case 13:
		zobraz("teple_napoje");

		break;
		
		case 14:
		zobraz("koktaily");

		break;
		
		case 15:
		zobraz("vinna_karta");

		break;
		
		}
?>



                        </div>
