<?php 
	require_once("../../../app/parking.php");
	/**
	* 
	*/
	class Consultar 
	{
		
		function __construct()
		{
			# code...
		}
		function ids(){
			$espaciosVacios = consultarGeneral("espacio","estado_espacio","=","LIBRE");
			while ($espacio = mysql_fetch_array($espaciosVacios)) {
                echo "<th class='espacios' valor='".$espacio["nombre_espacio"]."'>". $espacio["nombre_espacio"]."</th>";
			}
		}
	}
 ?>