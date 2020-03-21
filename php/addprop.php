<?php
	$conexion = new mysqli("localhost", "db", "password", "id6080374_usuarios");
	$cantidadDeElementos = 0;
	$uss   = $_POST['uss'];
	$typeV   = $_POST['typeV'];
	$value   = $_POST['value'];
	$proyect = $_POST['proyect'];

	if(mysqli_connect_error()){
		echo '404';
	}else{
		$sql = "INSERT INTO settings (name, tipoDeValue, value, proyect) VALUES ('$uss', '$typeV', '$value', '$proyect')";
		$result = mysqli_query($conexion, $sql);
		echo "201";
	}
?>