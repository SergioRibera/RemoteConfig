<!DOCTYPE html>
<head>
	<title>Login Remote Settings</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div>
		<form class="Contenedor_Login" method="post" action="php/login.php">
			<input name="Login_Name" type="text" placeholder="Nombre De Usuario" required>
			<input name="Login_Pass" type="password" placeholder="Contraseña" required>
			<select name="proyect">
				<?php
					$conexion = new mysqli("localhost", "user", "pass", "database");
					if(mysqli_connect_error()){
						echo '404';
					}else{
						$sql = "SELECT DISTINCT proyect FROM `settings`";
						$result = mysqli_query($conexion, $sql);

						if(mysqli_num_rows($result) > 0){
							while($value = mysqli_fetch_array($result)){
								$input1 = '<option value="'.$value['proyect'].'">'.$value['proyect'].'</option>';
								echo $input1;
								}
						}else{
							echo "<option>-Sin Proyectos-</option>";
						}
					}
				?>
			</select>
			<input type="submit" value="Aceptar">
		</form>
	</div>
</body>
</html>
