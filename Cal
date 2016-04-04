<?php
	
	
	if(isset($_GET['rectangulo']))
	{
		$largo=$_GET['largo'];
		$ancho=$_GET['ancho'];
		$rectangulo=(($largo*2)+($ancho)*2)*3;
		$muestro="deberia llevar : ".$rectangulo." metros de alambre.";
		$metrosCuadrados=$largo*$ancho*2;
		$Cemento=round($metrosCuadrados,0,PHP_ROUND_HALF_UP);
		$cal=round($metrosCuadrados,0,PHP_ROUND_HALF_UP)*3;
		$materiales="";
		$ArrayMateriales = array(2,4,"D");
		


		include"index.html";
		unset($_GET['radio']);
	}
	if(isset($_GET['circunsferencia']))
	{
		$radio=$_GET['radio'];
		$pi=3.14;
		$cirunsferencia= $pi * $radio * $radio*3;
		$muestro="deberia llevar : ".$cirunsferencia." metros de alambre.";
		$cemento=round($rectangulo)*2;
		$cal=round($rectangulo)*3;
		$materiales="";
		include"index.html";
		//unset($_GET['largo']);
		//unset($_['ancho']);


	}
	if (isset($_GET['Contrapiso'])) {
			if (!isset($GET['radio'])) {
				$radio=$_GET['radio'];
		$pi=3.14;
		$cirunsferencia= $pi * $radio * $radio*3;
		$muestro="deberia llevar : ".$cirunsferencia." metros de alambre.";
		$cemento=round($rectangulo)*2;
		$cal=round($rectangulo)*3;
		
		}
		else
		{
			$Cemento;
			include"index.html";
		}
//			$muestro=$muestro." ".$Cemento." bolsas de cemento y ".$cal." bolsas de cal";

			
		//unset($_GET['largo']);
		//unset($_['ancho']);
		//unset($_GET['radio']);
		}s


	
	
?>
