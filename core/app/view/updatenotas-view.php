<?php

if(count($_POST)>0){
	$nota = NotasData::getById($_POST["nota_id"]);

	$nota->motivo = $_POST["motivo"];
	$nota->descripcion = $_POST["descripcion"];

  $is_active=0;
  if(isset($_POST["is_active"])){ $is_active=1;}

  $nota->is_active=$is_active;

	$nota->user_id = $_SESSION["user_id"];
	$nota->update();

	setcookie("prdupd","true");
	print "<script>window.location='index.php?view=editnotas&id=$_POST[nota_id]';</script>";


}


?>