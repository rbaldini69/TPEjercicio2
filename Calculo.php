<?php
	
	
	if(isset($_GET["rectangulo"]))
	{
		if(!empty($_GET["largo"]) && !empty($_GET["ancho"]) ){
		$largo=$_GET["largo"];
		$ancho=$_GET["ancho"];
		$rectangulo=(($largo*2)+($ancho)*2)*3;
		$muestro="deberia llevar : ".$rectangulo." metros de alambre.";
		}
		else
		{
			echo "Ingrese largo y ancho del rectangulo";
		}
		include"index.php";
		unset($_GET["radio"]);
	}
	if(isset($_GET["circunsferencia"])){
		if(!empty($_GET["radio"])){
		$radio=$_GET["radio"];
		$pi=3.14;
		$circunsferencia= $pi * $radio * $radio*3;
		$muestro="deberia llevar : ".$circunsferencia." metros de alambre.";
		
		}
		else{
			echo "Ingrese el radio";
		}
		//unset($_GET[$largo]);
		//unset($_GET[$ancho]);
		include"index.php";
		//unset($_GET['largo']);
		//unset($_['ancho']);


	}
	if (isset($_GET["Contrapiso"])) {
			if (empty($_GET["radio"])&& !empty($_GET["largo"])&& !empty($_GET["ancho"])) {
				$largo=$_GET["largo"];
				$ancho=$_GET["ancho"];
				$rectangulo=(($largo*2)+($ancho*2))*3;
				$metrosCuadrados=$largo*$ancho*2;
				$cemento=round($metrosCuadrados,0,PHP_ROUND_HALF_UP)*2;
				$cal=round($metrosCuadrados,0,PHP_ROUND_HALF_UP)*3;
				$muestro="deberia llevar : ".$rectangulo." metros de alambre. ".$cemento." bolsas de cemento y ".$cal." bolsas de cal.";
				include "index.php";
				}
		else
		{
			$radio=$_GET["radio"];
			$pi=3.14;
			$circunsferencia= $pi * $radio * $radio*3;
			$cemento=round($circunsferencia,0,PHP_ROUND_HALF_UP)*2;
			$cal=round($circunsferencia,0,PHP_ROUND_HALF_UP)*3;
			
			
			$muestro="deberia llevar : ".$circunsferencia." metros de alambre. ".$cemento."	 bolsas de cemento y ".$cal." bolsas de cal.";
			include "index.php";
		}
//			$muestro=$muestro." ".$Cemento." bolsas de cemento y ".$cal." bolsas de cal";

			
		//unset($_GET['largo']);
		//unset($_['ancho']);
		//unset($_GET['radio']);
		}


	
	
?>
