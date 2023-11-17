<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

			<label for="nomProducto">Nombre del producto</label>
			<input value="<?php echo $producto->nomProducto ?>" class="form-control" name="nomProducto" required type="text" id="nomProducto" placeholder="Nombre del producto">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="descrip">Descripción:</label>
			<input value="<?php echo $producto->descrip ?>" class="form-control" name="descrip" required type="text" id="descrip" placeholder="Escribe la descripción">

			<label for="material">Material:</label>
			<input value="<?php echo $producto->material ?>" class="form-control" name="material" required type="text" id="material" placeholder="Escribe el material">

			<label for="talla">Talla:</label>
			<input value="<?php echo $producto->talla ?>" class="form-control" name="talla" required type="text" id="talla" placeholder="Escribe la talla">

			<label for="piedra">Piedra:</label>
			<input value="<?php echo $producto->piedra ?>" class="form-control" name="piedra" required type="text" id="piedra" placeholder="Escribe la piedra">

			<label for="disponible">Disponible:</label>
			<input value="<?php echo $producto->disponible ?>" class="form-control" name="disponible" required type="text" id="disponible" placeholder="Disponible">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
