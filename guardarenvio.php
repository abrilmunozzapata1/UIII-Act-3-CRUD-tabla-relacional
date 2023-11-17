<?php
#Salir si alguno de los datos no está presente
if
(!isset($_POST["id"]) || 
!isset($_POST["nombre"]) || 
!isset($_POST["ciudad"]) || 
!isset($_POST["domicilio"]) || 
!isset($_POST["cp"]) || 
!isset($_POST["fecha"]) ||
!isset($_POST["garantia"]) ||
!isset($_POST["tiemppo_llegada"]))

#Si todo va bien, se ejecuta esta parte del código...

$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "bd_pandora";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, "");
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}$id = $_POST["id"];
$nombre = $_POST["nombre"];
$ciudad = $_POST["ciudad"];
$domicilio = $_POST["domicilio"];
$cp = $_POST["cp"];
$fecha = $_POST["fecha"];
$garantia = $_POST["garantia"];
$tiempo_llegada = $_POST["tiempo_llegada"];

$sentencia = $base_de_datos->prepare("INSERT INTO `envio`(`id`, `idVenta`, `nombre`, `ciudad`, `domicilio`, `cp`, `fecha`, `garantia`, `tiempo_llegada`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$id, $id, $nombre, $ciudad, $domicilio, $cp, $fecha, $garantia, $tiempo_llegada]);

if($resultado === TRUE){
	header("Location: ./ventas.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>