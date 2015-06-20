<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
		<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
		<script src="./libs/jquery-2.1.0.js"></script>
		<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="./libs/validacion/jquery.validate.min.js"></script>
		<script src="./libs/validacion/messages.js"></script>
		<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	</head>
	<body>
	<div class="jumbotron">
		<form action="modificarventa.php" method="post" id="alumno">
			<table class="table-bordered">
			<div class="row">
			<div class="col-xs-2">
			nombre:
			</div>
			<div class="col-xs-2">
				<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
				<input type="text" name="nombre" value='<?php print $datos[0][5] ?>' class="required digits form-control">
			</div>
		</div>
	<div class="row">
		<div class="col-xs-2">
			precio:
		</div>
		<div class="col-xs-2">
			<input type="text" name="precio" value='<?php print $datos[0][1]?>' class="required form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			codigo:
		</div>
		<div class="col-xs-2">
			<input type="text" name="codigo" value='<?php print $datos[0][2]?>' class="required form-control">
		</div>
	</div>
			<?php
			$sql2 ="select nombre from seccion where id='".$datos[0][6]."'";
			$da = consultaD($con,$sql,3);
			print $da[0][0];
			?>
			</option>
			<?php 
			$sql = "SELECT id_producto,nombre FROM codigo WHERE id_producto !='".$datos[0][6]."'";
			$datos = consultaD($con,$sql);
			foreach ($datos as $value) {
				print "<option value='";
				print $value['id'];
				print "'>";
				print "</option>";
				
			}
			 ?>
	</select>
		</div>
	</div>
	<div class="row">
	<td colspan="2">
	<input type="submit" name="bot" value="enviar" class="btn btn-prymary">
		</div>

	</table>
	</form>
	</div>
	<script type="text/javascript">
	$().ready(function(){
		$("#alumno").validate({});
	});
	$(document).ready(
		function(){
			$("#fechac").datepicker(
				{
					changeMonth:true,
					changeYear:true,
					dateFormat:'yy-mm-dd',
					showAnim:'slide'
				}
			);
		 }

	)
	</script>
</body>
</html>
