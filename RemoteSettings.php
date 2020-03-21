<!DOCTYPE html>
<html>
<head>
	<title>Remote Settings</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div></div>
	
	<div class="Contenedor">
		<h1>Remote Settings  <?php echo $_GET['proyect']; ?></h1>
		<div class="BtnAdd"><div></div><input type="button" value="Añadir Propiedad" onclick="AddPropiedad()"><div></div></div>
		<div class="BtnAdd"><div></div><input type="button" value="Añadir Proyecto" onclick="AddProyect()"><div></div></div>
		<form id="PropiedadesContenedor" class="PropiedadesContenedor">
			<div class="PropiedadesTittle">
				<h5>Nombre De La Propiedad: </h5><h5>Tipo De Valor:</h5> <h5>Valor:</h5>
			</div>
			<div class="PropiedadesValue">
				<td><input id="PropName_Add" type="text" placeholder="Nombre" pattern="[a-z]{1,15}" required></td> 
				<td>
					<select id="ValueC_Add">
					  <option value="string">String</option>
					  <option value="float">Float</option>
					  <option value="int">Int</option>
					  <option value="bool">Bool</option>
					</select>
				</td>
				<td><input id="PropValue_Add" type="text" placeholder="Valor" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required></td>
				<div>
					<input type="submit" value="Cancelar" onclick="CancelAdd()">
					<input type="submit" value="Aceptar" onclick="AceptarAndAdd()">
				</div>
			</div>
		</form>
		<form id="PropiedadesAddProyect" class="PropAddProyect">
			<div class="PropiedadesTittle">
				<h5>Nombre De La Propiedad: </h5><h5>Tipo De Valor:</h5> <h5>Valor:</h5> <h5>Nombre De Proyecto:</h5>
			</div>
			<div class="PropiedadesValue">
				<td><input id="PropName_Add_Proyect" type="text" placeholder="Nombre" pattern="[a-z]{1,15}" required></td> 
				<td>
					<select id="ValueC_Add_Proyect">
					  <option value="string">String</option>
					  <option value="float">Float</option>
					  <option value="int">Int</option>
					  <option value="bool">Bool</option>
					</select>
				</td>
				<td><input id="PropValue_Add_Proyect" type="text" placeholder="Valor" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required></td>
				<td><input id="ProyName_Add_Proyect" type="text" placeholder="Valor" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required></td>
				<div>
					<input type="submit" value="Cancelar" onclick="CancelAddProyect()">
					<input type="submit" value="Aceptar" onclick="AceptarAndAddProyect()">
				</div>
			</div>
		</form>
		<div id="Contenedor_Prop">
			<?php
				$nameProyect = $_GET['proyect'];
				include 'php/conexion.php';
			?>
		</div>
		<script type="text/javascript">
			var proyectName = "<?php echo $_GET['proyect']; ?>";
		</script>
		<script type="text/javascript" src="js/javascript.js"></script>
		
	</div>
</body>
</html>