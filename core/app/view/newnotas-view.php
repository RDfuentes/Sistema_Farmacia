<div class="row">
	<div class="col-md-12">
	<h1>Nueva Nota</h1>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addnotas" action="index.php?view=addnotas" role="form">

  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Motivo*</label>
    <div class="col-md-6">
    <input type="text" name="motivo" required class="form-control" id="motivo" placeholder="Descripcion del producto">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion*</label>
    <div class="col-md-6">
    <input type="text" name="descripcion" required class="form-control" id="descripcion" placeholder="Descripcion">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Nota</button>
    </div>
  </div>
</form>

	</div>
</div>

<script>
  $(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74 ){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>