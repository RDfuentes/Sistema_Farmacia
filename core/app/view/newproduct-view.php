    <?php 
$categories = CategoryData::getAll();
    ?>
<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Producto</h1>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addproduct" action="index.php?view=addproduct" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Producto*</label>
    <div class="col-md-6">
    <input type="text" name="description" required class="form-control" id="description" placeholder="Nombre del producto">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoría*</label>
    <div class="col-md-6">
    <select name="category_id" class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($categories as $category):?>
      <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripción*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Descripción del producto">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
    <div class="col-md-6">
      <input type="file" name="image" id="image" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Código*</label>
    <div class="col-md-6">
      <input type="text" name="barcode" id="product_code" required class="form-control" id="barcode" placeholder="Codigo unico de producto">
    </div>
  </div>
   
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio Costo*</label>
    <div class="col-md-6">
      <input type="number" name="price_in" required class="form-control" id="price_in" placeholder="Precio costo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio 1*</label>
    <div class="col-md-6">
      <input type="number" name="price_out" required class="form-control" id="price_out" placeholder="Precio 1">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio 2*</label>
    <div class="col-md-6">
      <input type="number" name="unit" required class="form-control" id="unit" placeholder="Precio 2">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio 3*</label>
    <div class="col-md-6">
      <input type="number" name="descuento" required class="form-control" id="decuento" placeholder="Precio 3">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Vencimiento</label>
    <div class="col-md-6">
      <input type="date" name="presentation" required class="form-control" id="inputEmail1" placeholder="Fecha de vencimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Minima en inventario:</label>
    <div class="col-md-6">
      <input type="number" name="inventary_min" class="form-control" id="inputEmail1" required placeholder="Minima en Inventario">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Inventario inicial:</label>
    <div class="col-md-6">
      <input type="number" name="q" class="form-control" id="inputEmail1"  required placeholder="Inventario inicial">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Producto</button>
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