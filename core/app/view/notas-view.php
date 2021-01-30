<div class="row">
	<div class="col-md-12">
<div class="btn-group  pull-right">
	<a href="index.php?view=newnotas" class="btn btn-danger"> <i class='fa fa-plus'> Añadir Notas</i></a>
<div class="btn-group pull-right">

<!--
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/products-word.php">Word 2007 (.docx)</a></li>
  </ul>
-->

</div>
</div>
		<h1>Notas</h1>
		<div class="clearfix"></div>


<?php
$page = 1;
if(isset($_GET["page"])){
	$page=$_GET["page"];
}
$limit=10;
if(isset($_GET["limit"]) && $_GET["limit"]!="" && $_GET["limit"]!=$limit){
	$limit=$_GET["limit"];
}

$notas = NotasData::getAll();
if(count($notas)>0){

if($page==1){
$curr_notas = NotasData::getAllByPage($notas[0]->id,$limit);
}else{
$curr_notas = NotasData::getAllByPage($notas[($page-1)*$limit]->id,$limit);

}
$npaginas = floor(count($notas)/$limit);
 $spaginas = count($notas)%$limit;

if($spaginas>0){ $npaginas++;}

	?>

	<h3>Pagina <?php echo $page." de ".$npaginas; ?></h3>
<div class="btn-group pull-right">
<?php
$px=$page-1;
if($px>0):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=notas&limit=$limit&page=".($px); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>
<?php endif; ?>

<?php 
$px=$page+1;
if($px<=$npaginas):
?>
<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=notas&limit=$limit&page=".($px); ?>">Adelante <i class="glyphicon glyphicon-chevron-right"></i></a>
<?php endif; ?>
</div>
<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>Id</th>
		<th>Motivo</th>
		<th>Descripcion</th>
		<th>Fecha</th>
		<th></th>
	</thead>
	<?php foreach($curr_notas as $nota):?>
	<tr>
		<td><?php echo $nota->id; ?></td>
		<td><?php echo $nota->motivo; ?></td>
		<td><?php echo $nota->descripcion; ?></td>
		<td><?php echo $nota->created_at; ?></td>

		<td style="width:70px;">
		<a href="index.php?view=editnotas&id=<?php echo $nota->id; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
		<a href="index.php?view=delnotas&id=<?php echo $nota->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
		</td>
	</tr>
	<?php endforeach;?>
</table>
<div class="btn-group pull-right">
<?php

for($i=0;$i<$npaginas;$i++){
	echo "<a href='index.php?view=notas&limit=$limit&page=".($i+1)."' class='btn btn-default btn-sm'>".($i+1)."</a> ";
}
?>
</div>
<form class="form-inline">
	<label for="limit">Limite</label>
	<input type="hidden" name="view" value="notas">
	<input type="number" value=<?php echo $limit?> name="limit" style="width:60px;" class="form-control">
</form>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay notas</h2>
		<p>No se han agregado notas a la base de datos, puedes agregar uno dando click en el boton <b>"Añadir Notas"</b>.</p>
	</div>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>