<?php
	$uss   = $_POST['Login_Name'];
    $pss   = $_POST['Login_Pass'];
    $pro   = $_POST['proyect'];

	if($uss == 'sergioribera' && $pss == 'sergio190402'){
		header('Location: ../RemoteSettings.php?proyect='.$pro);
	}
?>