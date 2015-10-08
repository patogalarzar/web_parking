<?php 
	require_once("../../../app/parking.php");

	if (isset($_GET['nespacio']) && !empty($_GET['nespacio']) && 
		isset($_GET['placa']) && !empty($_GET['placa']) &&
		isset($_GET['nombreUsuario']) && !empty($_GET['nombreUsuario']) &&
		isset($_GET['fechaRegistro']) && !empty($_GET['fechaRegistro'])) {
		
		$id_espacio;
		$espacios = consultarGeneral("espacio","nombre_espacio","=",$_GET['nespacio']);
		while ($espacio = mysql_fetch_array($espacios)) {
		 	$id_espacio = $espacio["id_espacio"];
		}

		$id_usuario;
		$usuarios = consultarGeneral("usuario","alias_usuario","=",$_GET['nombreUsuario']);
		while ($usuario = mysql_fetch_array($usuarios)) {
		 	$id_usuario = $usuario['id_usuario'];
		 } 

		$campos = "id_ticket,'".$_GET['placa']."','".$_GET['fechaRegistro']."','','','".$id_espacio."','".$id_usuario."'";
		$insert = insertarRegistro("ticket",$campos);
		$update = actualizarRegistro("espacio","estado_espacio='OCUPADO'","nombre_espacio","=",$_GET['nespacio']);
		echo "Ticket Guardado<br>";
		echo "<a href='index.php'>Volver</a>";
		//echo "TICKET ".$_GET['nespacio']." PLACA ".$_GET['placa'];

	}else {
		echo "No se ha llenado todos los campos";
	}
 ?>
<?php 
// 	if (isset($_GET['ticket']) && !empty($_GET['ticket']) && 
// 		isset($_GET['placa']) && !empty($_GET['placa'])) {
// 		// $db=
// 		// $host=
// 		// $pass=
// 		// $user=
// 	}
// 	else {
// 		echo "No se ha llenado todos los campos";
// 	}
//localhost/web_parking/pages/tickets/ticket/registrarTicket.php?nespacio=B344&placa=WSE345&nombreUsuario=TATTY&fechaTicket=6%2F10%2F2015&horaTicket=22%3A47
//  ?>