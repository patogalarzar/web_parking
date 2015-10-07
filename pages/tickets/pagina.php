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
		// echo $query;
		$resultado = mysql_query($query);
		salir();
		return $resultado;
	}
	
	

	$titulo = "MI titulo";
	$des = "<p>Mi parrafo php</p>";
 ?>
 <?php  ?>
<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>


		<table cellspacing="0" cellpadding="0">     
                  <tr>        
                    <?php 
		    $res = consultar("piso");
			while ( $piso = mysql_fetch_array($res)) { ?>


				<th class="ticket"><?php echo $piso["nombre_piso"]."-".$piso["tipo_piso"]?></th>

			<?php 
			}		
		?>
                  </tr>
                </table>

		

		<?php
			$miFecha = array( //Declara array
			array( //Dimensión [0][…][…]
			array("13 de enero de 2015", "11 de febrero de 2018"), //[0][0][…]
			array("13 de enero de 2020", "11 de febrero de 2015"), //[0][1][…]
			),
			array( //Dimensión [1][…][…]
			array("3 de agosto de 2017", "1 de octubre de 2016"), //[1][0][…]
			array("3 de agosto de 2013", "1 de octubre de 2019"), //[1][1][…]
			),
			array( //Dimensión [2][…][…]
			array("10 de junio de 2020", "11 de marzo de 2019"), //[2][0][…]
			),
			array(
			array("22 de marzo de 2020", "28 de mayo de 2019"), //[3][0][…]
			array("22 de marzo de 2019", "28 de mayo de 2018"), //[3][1][…]
			array("22 de marzo de 2018", "28 de mayo de 2017"), //[3][2][…]
			array("22 de marzo de 2017", "28 de mayo de 2016"), //[3][3][…]
			)
			);
			echo "<br/>&nbsp;&nbsp;&nbsp;" . $miFecha[3][2][0];
			?>
	</body>
</html>
