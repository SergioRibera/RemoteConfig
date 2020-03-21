<?php
	$conexion = new mysqli("localhost", "db", "password", "id6080374_usuarios");
	$cantidadDeElementos = 0;
	$nameProyect = $_GET['proyect'];

	if(mysqli_connect_error()){
		echo '404';
	}else{
		$sql = "SELECT * FROM settings";
		$result = mysqli_query($conexion, $sql);

		if(mysqli_num_rows($result) > 0){
			while($file = mysqli_fetch_array($result)){
				if($file['proyect'] == $nameProyect){
					$name = $file["name"];
					$valueType = $file["tipoDeValue"];
					$value = $file["value"];
					$cantidadDeElementos = $cantidadDeElementos + 1;
					$input1 = '<input id="inputName_'.$cantidadDeElementos.'" class="show_Values_edit" type="text" value="'.$name.'">';
					$input2 = '<input id="inputTypeValue_'.$cantidadDeElementos.'" class="show_Values_edit" type="text" value="'.$valueType.'">';
					$input3 = '<input id="inputValue_'.$cantidadDeElementos.'" class="show_Values_edit" type="text" value="'.$value.'">';
					$btn1 = '<input type="button" value="Editar" name="Btn_Edit_'.$cantidadDeElementos.'" onclick="EditarPropiedad('.$cantidadDeElementos.')">';
					$btn2 = '<input type="button" value="Aceptar" name="Btn_Acept_'.$cantidadDeElementos.'" onclick="AceptarEdicion('.$cantidadDeElementos.')" display=none>';
					
					echo '<div name="0_'.$cantidadDeElementos.'" class="Values_Show">'.$input1.$input2.$input3.$btn1.$btn2.'</div>';
					}
				}
		}else{
			echo "<h2>No Hay Datos Que Mostrar</h2>";
		}
	}
?>