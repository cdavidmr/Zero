
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conexion_BD</title>

	<link rel="stylesheet" href="style.css" type='text/css'>
</head>
<body>
	
<?php 

$host="sql102.rf.gd:3306";
$usuariobd="rfgd_20542955";
$passwordbd="ppFhhDQw";
$basededatos="rfgd_20542955_proyectord";

//lista de tablasa

$tabla1="administrador";
$tabla2="usuarios";


/////
//No muestre el error
error_reporting(0);

$conexion= new mysqli($host, $usuariobd, $passwordbd, $basededatos);

if ($conexion->connect_errno) {
	# code...E
	echo "<div class=\"alert alert-warning\"><strong>Error!</strong> El sitio presenta fallos con la BD.</div>";
	exit();
}

 ?>

</body>
</html>