<?php


if(count($_POST)>0){
  $nota = new NotasData();
  $nota->motivo = $_POST["motivo"];
  $nota->descripcion = $_POST["descripcion"];
  $nota->add();

print "<script>window.location='index.php?view=notas';</script>";

}


?>