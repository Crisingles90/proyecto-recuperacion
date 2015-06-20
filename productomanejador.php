<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="./appDatos/libs/bootstrap/css/bootstrap.css">
		<script src="./appDatos/libs/jquery-2.1.0.js"></script>
		<link rel="stylesheet"  href="./appDatos/libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="./appDatos/libs/validacion/jquery.validate.min.js"></script>
		<script src="./appDatos/libs/validacion/messages.js"></script>
		<script src="./appDatos/libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
	include './Coneccion.php';
	include './producto1.php';
	include './productoControlador.php';
	

	

$alumnoA = new productoControlador();
echo $accion = $_REQUEST['accion'];

switch ($accion) {

	case 'save':

		if(isset($_REQUEST['hola']))
		{


			$alumnoA->setid_ventas('NULL');		
			$alumnoA->setnombreproducto($_REQUEST['nombre']);
		    $alumnoA->setcantidadproducto($_REQUEST['producto']);
			$alumnoA->setprecio($_REQUEST['precio']);
            $alumnoA->setcodigo($_REQUEST['codigo']);
            $datosObj= array($alumnoA->getid_ventas(),
							$alumnoA->getnombreproducto(),
						    $alumnoA->getcantidadproducto(),
							$alumnoA->getprecio(),
							$alumnoA->getcodigo());
							#var_dump($datosObj);										
			print $alumnoA->guardarDatos($con,$datosObj);
			print '<a href=\'productomanejador.php?accion=con\'>Ver datos</a>';
		}else {
			print 'No se ha enviado datos ';
		}
		break;

		case 'con':
			$sql = 'SELECT * FROM venta';
			//$datos = consultaD($con,$sql);
			$datoss = consultaD($con,$sql);
			print imprimetablaventa($datoss,"venta","table table-bordered",1);

			break;

			default:
			print 'No hay Accion que realizar';
			break;
		}

?>

</body>
</html>
	