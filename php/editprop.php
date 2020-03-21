<?php
	$conexion = new mysqli("localhost", "db", "password", "id6080374_usuarios");
	$conexion->set_charset("UTF-8");

	$uss   = $_POST['uss'];
	$typeV   = $_POST['typeV'];
	$value   = $_POST['value'];
	$proyect = $_POST['proyect'];


	if(mysqli_connect_error()){
		echo '404';
	}else{
		$sql = "SELECT * FROM settings WHERE name='$uss' AND proyect='$proyect'";
		$result = mysqli_query($conexion, $sql);
		if(mysqli_num_rows($result) > 0){
			$sql = "UPDATE settings SET `name`='$uss',`tipoDeValue`='$typeV',`value`='$value',`proyect`='$proyect' WHERE `settings`.`name`='$uss' AND proyect='$proyect'";
			$result = mysqli_query($conexion, $sql);
			echo '302';
		}else{
			echo "405";
		}
	}

?>