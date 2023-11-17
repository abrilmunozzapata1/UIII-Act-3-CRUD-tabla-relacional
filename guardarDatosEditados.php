<?php
#Salir si alguno de los datos no está presente
if( !isset($_POST["id"]) ||
	!isset($_POST["nomProducto"]) || 
	!isset($_POST["categoria"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["descrip"]) || 
	!isset($_POST["material"]) || 
	!isset($_POST["talla"]) ||
	!isset($_POST["piedra"]) ||
	!isset($_POST["disponible"]))


#Si todo va bien, se ejecuta esta parte del código...

$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "bd_pandora";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
$id = $_POST["id"];
$nomProducto = $_POST["nomProducto"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$descrip = $_POST["descrip"];
$material = $_POST["material"];
$talla = $_POST["talla"];
$piedra = $_POST["piedra"];
$disponible = $_POST["disponible"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET nomProducto = ?, categoria = ?, precio = ?, descrip = ?, material = ?, talla = ?, piedra = ?, disponible = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nomProducto, $categoria, $precio, $descrip, $material, $talla, $piedra, $disponible, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del vuelo";
?>