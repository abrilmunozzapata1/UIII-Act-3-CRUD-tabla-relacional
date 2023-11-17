<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">

	<label for="nomProducto">Nombre del producto</label>
			<input class="form-control" name="nomProducto" required type="text" id="nomProducto" placeholder="Nombre del producto">

			<label for="categoria">Categoria:</label>
			<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

			<label for="precio">Precio:</label>
			<input class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="descrip">Descripción:</label>
			<input class="form-control" name="descrip" required type="text" id="descrip" placeholder="Escribe la descripción">

			<label for="material">Material:</label>
			<input class="form-control" name="material" required type="text" id="material" placeholder="Escribe el material">

			<label for="talla">Talla:</label>
			<input class="form-control" name="talla" required type="text" id="talla" placeholder="Escribe la talla">

			<label for="piedra">Piedra:</label>
			<input class="form-control" name="piedra" required type="text" id="piedra" placeholder="Escribe la piedra">

			<label for="disponible">Disponible:</label>
			<input class="form-control" name="disponible" required type="text" id="disponible" placeholder="Disponible">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>