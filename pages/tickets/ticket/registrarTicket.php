<?php 
	// require_once("../../../app/parking.php");
	// require_once('../../../clases/cargarEspacios.php');
	$timestamp = date("Y-m-d H:i:s");
	// if (isset($_POST['nespacio']) && !empty($_POST['nespacio']) && 
	// 	isset($_POST['placa']) && !empty($_POST['placa']) &&
	// 	isset($_POST['nusuario']) && !empty($_POST['nusuario'])) {
		
		$nespacio = $_POST['nespacio'];
		// var_dump($nespacio);
		$placa = $_POST['placa'];
		// var_dump($placa);
		$nusuario = $_POST['nusuario'];
		// var_dump($nusuario);

		// $id_espacio;
		// $espacios = consultarGeneral("espacio","nombre_espacio","=",$_POST['nespacio']);
		// while ($espacio = mysql_fetch_array($espacios)) {
		//  	$id_espacio = $espacio["id_espacio"];
		// }

		// $id_usuario;
		// $usuarios = consultarGeneral("usuario","alias_usuario","=",$_POST['nusuario']);
		// while ($usuario = mysql_fetch_array($usuarios)) {
		//  	$id_usuario = $usuario['id_usuario'];
		//  } 

		// $campos = "id_ticket,'".$_POST['placa']."','".$_POST['fechaRegistro']."','','','".$id_espacio."','".$id_usuario."'";
		// $insert = insertarRegistro("ticket",$campos);
		// $update = actualizarRegistro("espacio","estado_espacio='OCUPADO'","nombre_espacio","=",$_POST['nespacio']);
		
		$arrayJSON = array();	
		$arrayJSON[]=array('nespacio'=> $nespacio,
						   'placa'   => $placa,
						   'nusuario'=> $nusuario
			
		);
		var_dump($arrayJSON);
		// echo json_encode($arrayJSON);

		// echo "Ticket Guardado<br>";
		// echo "<a href='index.php'>Volver</a>";
		// echo "TICKET ".$_POST['nespacio']." PLACA ".$_POST['placa'];

	// }else {
	// 	echo "No se ha llenado todos los campos<br>";
	// 	echo "<a href='index.php'>Volver</a>";
	// }
 ?>