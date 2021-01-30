<?php

$operations = OperationData::getAllByProductId($_GET["id"]);

foreach ($operations as $op) {
	$op->del();
}

$nota = NotasData::getById($_GET["id"]);
$nota->del();

Core::redir("./index.php?view=notas");
?>