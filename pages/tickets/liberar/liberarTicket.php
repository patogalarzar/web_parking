<?php 
	require_once("../../../app/parking.php");
	if (isset($_GET['nespacio']) && !empty($_GET['nespacio']) &&
		isset($_GET['nplaca']) && !empty($_GET['nplaca']) &&
		isset($_GET['nplacaC']) && !empty($_GET['nplacaC']) &&
		isset($_GET['fechaSalida']) && !empty($_GET['fechaSalida'])) {
		$espacioMAX = consultarMAX("espacio","id_espacio","nombre_espacio","=",$_GET["nespacio"]);
		while ($espacio = mysql_fetch_array($espacioMAX)) {
			$id_espacio = $espacio["id_espacio"];
		}
		$ticketMAX = consultarMAX("ticket","id_ticket","id_espacio","=",$id_espacio);
		while ($ticket = mysql_fetch_array($ticketMAX)) {
			$id_ticket = $ticket["id_ticket"];
		}
		$update = actualizarRegistro("ticket","fecha_salida_ticket='".$_GET['fechaSalida']."'","id_ticket","=",$id_ticket);
		$update = actualizarRegistro("espacio","estado_espacio='LIBRE'","nombre_espacio","=",$_GET['nespacio']);
		echo "Ticket Liberado<br>";
		echo "<a href='index.php'>Volver</a>";
	}else{
		echo "No se ha llenado todos los campos<br>";
		echo "<a href='index.php'>Volver</a>";
	}
 ?>