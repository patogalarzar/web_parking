<?php 
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','web_parking');

	function conexion(){
		mysql_connect(HOST, USER, PASS) or die("ERROR DE CONEXIÒN".mysql_error());
		mysql_select_db(DB);
	}
		
	function salir(){
		mysql_close();
	}

	function consultar($tabla){
		conexion();
		$query = "SELECT * FROM ".$tabla;
		// echo $query."<br>";
		$resultado = mysql_query($query);
		salir();
		return $resultado;		
	}
	function consultarGeneral($tabla,$campo,$condicion,$parametro){
		conexion();
		$query = "SELECT * FROM ".$tabla." WHERE ".$campo.$condicion."'".$parametro."'";
		// echo $query."<br>";
		$resultado = mysql_query($query);
		salir();
		return $resultado;		
	}
	function consultarMAX($tabla,$campoMAX,$campo,$condicion,$parametro){
		conexion();
		$query = "SELECT MAX(".$campoMAX.") FROM ".$tabla." WHERE ".$campo.$condicion."'".$parametro."'";
		// echo $query."<br>";
		$resultado = mysql_query($query);
		salir();
		return $resultado;		
	}
	function insertarRegistro($tabla,$campos){
		conexion();
		$query = "INSERT INTO ".$tabla." VALUES (".$campos.")";
		// echo $query."<br>";
		$resultado = mysql_query($query);
		salir();
		return $resultado;		
	}
	function actualizarRegistro($tabla,$valores,$campo,$condicion,$parametro){
		conexion();
		$query = "UPDATE ".$tabla." SET ".$valores." WHERE ".$campo.$condicion."'".$parametro."'";
		// echo $query."<br>";
		$resultado = mysql_query($query);
		salir();
		return $resultado;		
	}

 ?>