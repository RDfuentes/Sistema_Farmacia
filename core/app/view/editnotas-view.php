<?php
$nota = NotasData::getById($_GET["id"]);

if($nota!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><small>Editar Nota </small><?php echo $nota->motivo ?> </h1>
  
  <?php if(isset($_COOKIE["prdupd"])):?>
    <p class="alert alert-info">La informacion de la nota se ha actualizado exitosamente.</p>
    <a href="index.php?view=notas" class="btn btn-danger btn-block"><i class="fa fa-arrow-right"></i> Regresar </a>
  <?php setcookie("prdupd","",time()-18600); endif; ?>
	<br><br>
		<form class="form-horizontal" method="post" id="addnotas" enctype="multipart/form-data" action="index.php?view=updatenotas" role="form">

  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Motivo</label>
    <div class="col-md-8">
    <input type="text" name="motivo" class="form-control" id="motivo" value="<?php echo $nota->motivo; ?>" placeholder="Motivo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Descripcion</label>
    <div class="col-md-8">
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $nota->descripcion; ?>" placeholder="Descripcion de la nota">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label" >Esta activo</label>
    <div class="col-md-8">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="is_active" <?php if($nota->is_active){ echo "checked";}?>> 
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
    <input type="hidden" name="nota_id" value="<?php echo $nota->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar nota</button>
    </div>
  </div>
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>