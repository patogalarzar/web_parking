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
		echo "Espacio Reservado";
	}else {
		echo "Campos Vacios: <br>";
		echo "Espacio: ".$_GET['nespacio']." <br>";
		echo "Estado: ".$_GET['estadoespacio']." <br>";
		echo "Espacio Anterior: ".$_GET['nespacioant']." <br>";
		echo "Estado Anterior: ".$_GET['estadoespacioant']." <br>";
		echo "<a href='index.php'>Volver</a>";
	}
 ?>