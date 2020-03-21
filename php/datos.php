<?php
	$conexion = new mysqli("localhost", "db", "password", "id6080374_usuarios");
	$proyect = $_GET['proyect'];

	if(mysqli_connect_error()){
		echo '404';
	}else{
		$sql = "SELECT * FROM settings WHERE proyect='$proyect'";
		$result = mysqli_query($conexion, $sql);

		if(mysqli_num_rows($result) > 0){
			$rawdata = array(); //creamos un array
			//guardamos en un array multidimensional todos los datos de la consulta
			while($row = mysqli_fetch_array($result))
			{
				array_push($rawdata, array(
					'name' => $row['name'],
					'tipoDeValue' => $row['tipoDeValue'],
					'value' => $row['value']
				));
			}
			echo json_encode($rawdata);
		}else{
			echo "302";
		}
	}
?>