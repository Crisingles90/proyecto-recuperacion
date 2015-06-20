<?php
 include './Coneccion.php';
 ?>
<?php
@$sql ="SELECT * FROM producto WHERE id_producto ='".$_REQUEST['id_producto']."';'";
   $datos= consultaD($con, $sql,4);
   ?>
<!DOCTYPE html>
<html lang="es">    
 
     <head>
         

          <hr>
          <body align="center">
<body style="background:silver">

              
               <br>
<br>
<form action="modificarventa.php?accion=save" method="post">  

REGISTRO DE PRODUCTOS
<meta charset = "utf-8"> 

</head>
<br>
<br>

          </tr>
<br>
<br>
<div class="jumbotron">
		<form action="modificarventa.php" method="post" id="alumno">
			<table class="table-bordered">
			<div class="row">
			<div class="col-xs-2">
			nombre:
			</div>
			<div class="col-xs-2">
				<input type="text" name="nombre">
			</div>
		</div>
		<br>
		<div class="row">
		<div class="col-xs-2">
		categoria: <select name="categoria"> 
<option value="bebida energizantes">bebida energizantes</option> 
<option value="bebida naturales">bebida naturales</option>
<option value="bebida alcohilicas">bebida alcoholicas</option>
<option value="bebida carbonatadas">bebida carbonatadas</option>
</div>
	</div>
  
</select>
<br>
	<div class="row">
		<div class="col-xs-2">
			precio:
		</div>
		<div class="col-xs-2">
			<input type="text" name="precio" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-2">
			codigo:
		</div>
		<div class="col-xs-2">
			<input type="text" name="codigo">
		</div>
	</div>

<br><br>
		</div>
	</div>
	<div class="row">
	<td colspan="2">
	<tr><input type="submit" name="hola" value="guardar producto"/></tr>
	</div>
	</body>
</html>