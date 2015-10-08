<?php 
	require_once("../../../app/parking.php");

	if (isset($_GET['nespacio']) && !empty($_GET['nespacio']) &&
		isset($_GET['estadoespacio']) && !empty($_GET['estadoespacio']) &&
		isset($_GET['nespacioant']) && !empty($_GET['nespacioant']) &&
		isset($_GET['estadoespacioant']) && !empty($_GET['estadoespacioant'])) {
		//reserva el espacio seleccionado
		$update = actualizarRegistro("espacio","estado_espacio='".$_GET['estadoespacio']."'","nombre_espacio","=",$_GET['nespacio']);
		//libera el espacio anterior seleccionado
		$updateant = actualizarRegistro("espacio","estado_espacio='".$_GET['estadoespacioant']."'","nombre_espacio","=",$_GET['nespacioant']);
	}else {
		echo "No se ha llenado todos los campos<br>";
		echo "<a href='index.php'>Volver</a>";
	}
 ?>