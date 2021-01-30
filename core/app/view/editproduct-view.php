<?php
$product = ProductData::getById($_GET["id"]);
$categories = CategoryData::getAll();

if($product!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><small>Editar Producto </small><?php echo $product->description ?> </h1>
  
  <?php if(isset($_COOKIE["prdupd"])):?>
    <p class="alert alert-info">La informacion del producto se ha actualizado exitosamente.</p>
    <a href="index.php?view=products" class="btn btn-danger btn-block"><i class="fa fa-arrow-right"></i> Regresar </a>
  <?php setcookie("prdupd","",time()-18600); endif; ?>
	<br><br>
		<form class="form-horizontal" method="post" id="addproduct" enctype="multipart/form-data" action="index.php?view=updateproduct" role="form">

  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Producto</label>
    <div class="col-md-8">
    <input type="text" name="description" class="form-control" required id="description" value="<?php echo $product->description; ?>" placeholder="Nombre del producto">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Categoría</label>
    <div class="col-md-8">
    <select name="category_id" class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($categories as $category):?>
      <option value="<?php echo $category->id;?>" <?php if($product->category_id!=null&& $product->category_id==$category->id){ echo "selected";}?>><?php echo $category->name;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Descripción*</label>
    <div class="col-md-8">
      <input type="text" name="name" class="form-control" id="name"  required value="<?php echo $product->name; ?>" placeholder="Descripción del producto">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Imagen*</label>
    <div class="col-md-8">
      <input type="file" name="image" id="name" placeholder="">
    <?php if($product->image!=""):?>
      <br>
            <img src="storage/products/<?php echo $product->image;?>" class="img-responsive" style='width:4cm; height:4cm' >

    <?php endif;?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Código*</label>
    <div class="col-md-8">
      <input type="text" name="barcode" class="form-control" required id="barcode" value="<?php echo $product->barcode; ?>" placeholder="Codigo unico del producto">
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Precio Costo*</label>
    <div class="col-md-8">
      <input type="number" name="price_in" class="form-control" required value="<?php echo $product->price_in; ?>" id="price_in" placeholder="Precio costo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Precio 1*</label>
    <div class="col-md-8">
      <input type="number" name="price_out" class="form-control"  required id="price_out" value="<?php echo $product->price_out; ?>" placeholder="Precio 1">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Precio 2*</label>
    <div class="col-md-8">
      <input type="number" name="unit" class="form-control" id="unit"  required value="<?php echo $product->unit; ?>" placeholder="Precio 2">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Precio 3*</label>
    <div class="col-md-8">
      <input type="number" name="descuento" class="form-control" id="descuento"  required value="<?php echo $product->descuento; ?>" placeholder="Precio 3">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Vencimiento</label>
    <div class="col-md-8">
      <input type="date" name="presentation" class="form-control" required id="inputEmail1" value="<?php echo $product->presentation; ?>" placeholder="Fecha de vencimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Minima en inventario:</label>
    <div class="col-md-8">
      <input type="number" name="inventary_min" class="form-control"  required value="<?php echo $product->inventary_min;?>" id="inputEmail1" placeholder="Minima en Inventario (Default 10)">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label" >Esta activo</label>
    <div class="col-md-8">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_active" <?php if($product->is_active){ echo "checked";}?>> 
    </label>
  </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
    <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar Producto</button>
    </div>
  </div>
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>