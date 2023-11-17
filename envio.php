<?php include_once "encabezado.php" ;
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

echo $idVenta = $resultado->id;
?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="guardarenvio.php">
		<input type="hidden" name="id" value="<?php echo $idVenta; ?>">

	    	<label for="nombre">Nombre del cliente</label>
			<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre del cliente">

			<label for="ciudad">Ciudad:</label>
			<input class="form-control" name="ciudad" required type="text" id="ciudad" placeholder="ciudad">

			<label for="domicilio">Domicilio:</label>
			<input class="form-control" name="domicilio" required type="text" id="domicilio" placeholder="domicilio">

			<label for="cp">Código postal:</label>
			<input class="form-control" name="cp" required type="text" id="cp" placeholder="Escribe el código postal">

			<label for="fecha">Fecha:</label>
			<input class="form-control" name="fecha" required type="date" id="fecha" placeholder="Escribe la fecha">

			<label for="garantia">Garantía:</label>
			<input class="form-control" name="garantia" required type="text" id="garantia" placeholder="Escribe la garantía">

			<label for="tiempo_llegada">Tiempo de llegada:</label>
			<input class="form-control" name="tiempo_llegada" required type="text" id="tiempo_llegada" placeholder="Escribe el tiempo de llegada">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>