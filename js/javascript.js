
document.getElementById("PropName_Add").onInvalid = function(event) {
    event.target.setCustomValidity('Porfavor Rellene Este Campo');
}
document.getElementById("PropValue_Add").onInvalid = function(event) {
    event.target.setCustomValidity('Porfavor Rellene Este Campo');
}
Comenzar();
function Comenzar(){
	document.getElementById("PropiedadesContenedor").style.display = 'none';
	var div = document.getElementById("Contenedor_Prop");
	var childs = div.parentNode.childNodes;
	for (var o = 0; o < childs.length; o++) {
		var i = o + 1;
		if(document.getElementById("inputName_" + i) != null){
			document.getElementById("inputName_" + i).disabled = true;
			document.getElementById("inputTypeValue_" + i).disabled = true;
			document.getElementById("inputValue_" + i).disabled = true;
			document.getElementsByName("Btn_Edit_" + i)[0].style.display = 'block';
			document.getElementsByName("Btn_Acept_" + i)[0].style.display = 'none';
		}
	}
}
function EditarPropiedad(name){
	document.getElementById("inputName_" + name).disabled = false;
	document.getElementById("inputTypeValue_" + name).disabled = false;
	document.getElementById("inputValue_" + name).disabled = false;
	document.getElementsByName("Btn_Edit_" + name)[0].style.display = 'none';
	document.getElementsByName("Btn_Acept_" + name)[0].style.display = 'block';
}
function AceptarEdicion(name){
	var inputName = document.getElementById("inputName_" + name).value;
	var inputTypeValue = document.getElementById("inputTypeValue_" + name).value;
	var inputValue = document.getElementById("inputValue_" + name).value;
	document.getElementById("inputName_" + name).disabled = true;
	document.getElementById("inputTypeValue_" + name).disabled = true;
	document.getElementById("inputValue_" + name).disabled = true;
	document.getElementsByName("Btn_Edit_" + name)[0].style.display = 'block';
	document.getElementsByName("Btn_Acept_" + name)[0].style.display = 'none';
	$.ajax({
		type: "POST",
		data: {
			"uss":inputName,
			"typeV":inputTypeValue,
			"value":inputValue,
			"proyect":proyectName
		},
		url:"php/editprop.php",
		beforeSend:function(){

		},
		success:function(response){
		},
		error:function(jqXHR, textStatus, errorThrown){
			console.log("Error Al Editar");
		},
		timeout: 5000
	}).always(function(){

	});
	window.setInterval("reFresh()",600);
}
function AddPropiedad(){
	document.getElementById("PropiedadesContenedor").style.display = 'block';
}
function AddProyect(){
	document.getElementById("PropiedadesAddProyect").style.display = 'block';
}
function AceptarAndAddProyect(){
	var name_add = document.getElementById("PropName_Add_Proyect").value;
	var typeValue_add = document.getElementById("ValueC_Add_Proyect").value;
	var value_add = document.getElementById("PropValue_Add_Proyect").value;
	var namePro = document.getElementById("ProyName_Add_Proyect").value;
	if(name_add != null && name_add != '' && value_add != null && value_add != ''){
		document.getElementById("PropName_Add_Proyect").value = '';
		document.getElementById("PropValue_Add_Proyect").value = '';
		document.getElementById("ValueC_Add_Proyect").value = 'string';
		document.getElementById("PropiedadesAddProyect").style.display = 'none';
		$.ajax({
			type: "POST",
			data: {
				"uss":name_add,
				"typeV":typeValue_add,
				"value":value_add,
				"proyect":namePro
			},
			url:"php/addprop.php",
			beforeSend:function(){

			},
			success:function(response){
			},
			error:function(jqXHR, textStatus, errorThrown){
				console.log("Error al Subir");
			},
			timeout: 5000
		}).always(function(){

		});
		window.setInterval("reFresh()",600);
	}
}
function CancelAddProyect(){
	document.getElementById("PropName_Add_Proyect").value = '';
	document.getElementById("PropValue_Add_Proyect").value = '';
	document.getElementById("ValueC_Add_Proyect").value = 'string';
	document.getElementById("PropiedadesAddProyect").style.display = 'none';
}
function AceptarAndAdd(){
	var name_add = document.getElementById("PropName_Add").value;
	var typeValue_add = document.getElementById("ValueC_Add").value;
	var value_add = document.getElementById("PropValue_Add").value;
	if(name_add != null && name_add != '' && value_add != null && value_add != ''){
		document.getElementById("PropName_Add").value = '';
		document.getElementById("PropValue_Add").value = '';
		document.getElementById("ValueC_Add").value = 'string';
		document.getElementById("PropiedadesContenedor").style.display = 'none';
		$.ajax({
			type: "POST",
			data: {
				"uss":name_add,
				"typeV":typeValue_add,
				"value":value_add,
				"proyect":proyectName
			},
			url:"php/addprop.php",
			beforeSend:function(){

			},
			success:function(response){
			},
			error:function(jqXHR, textStatus, errorThrown){
				console.log("Error al Subir");
			},
			timeout: 5000
		}).always(function(){

		});
		window.setInterval("reFresh()",600);
	}
}
function CancelAdd(){
	document.getElementById("PropName_Add").value = '';
	document.getElementById("PropValue_Add").value = '';
	document.getElementById("ValueC_Add").value = 'string';
	document.getElementById("PropiedadesContenedor").style.display = 'none';
}
function reFresh() {

  location.reload(true)

}
