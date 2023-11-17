<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM  productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Producto</th>
					<th>Categoria</th>
					<th>Precio</th>
					<th>Descripción</th>
					<th>Material</th>
					<th>Talla</th>
					<th>Piedra</th>
					<th>Disponible</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->nomProducto ?></td>
					<td><?php echo $producto->categoria ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->descrip ?></td>
					<td><?php echo $producto->material ?></td>
					<td><?php echo $producto->talla ?></td>
					<td><?php echo $producto->piedra ?></td>
					<td><?php echo $producto->disponible ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>