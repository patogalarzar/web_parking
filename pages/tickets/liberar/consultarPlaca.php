<?php 
	require_once("../../../app/parking.php");
	if (isset($_GET["numespacio"]) && !empty($_GET["numespacio"])) {
		$ticketMAX = consultarMAX("ticket","id_ticket","id_espacio","=",$_GET["numespacio"]);
		while ($ticket mysql_fetch_array($ticketMAX)) {
		$id_ticket = $ticket["id_ticket"];
		}
		echo $id_ticket;
	}else{
		echo "campo vacio";
	}

	
 ?>