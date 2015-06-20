<?php
 #include './Alumno.php'; //CREO QUE HAY QUE BORRAR ESTO
class CiudadanoControlador extends Ciudadano {

  public function guardarDatos($con,$objPartido) {

    $variableSql = "INSERT INTO ciudadano"; //POSIBLE ERROR
    $variableSql .= "(id_Ciudadano,DUI,Apellido,Nombre,Genero,Expiracion_Dui,Codigo_Depto,Codigo_Municipio,Foto,Fecha_Nacimiento,Direccion)"; 
    $variableSql .= "VALUES (";
    $variableSql .= "'".$objPartido[0]."',";
    $variableSql .= "'".$objPartido[1]."',";
    $variableSql .= "'".$objPartido[2]."',";
    $variableSql .= "'".$objPartido[3]."',";
    $variableSql .= "'".$objPartido[4]."',";
    $variableSql .= "'".$objPartido[5]."',";
    $variableSql .= "'".$objPartido[6]."',";
    $variableSql .= "'".$objPartido[7]."',";
    $variableSql .= "'".$objPartido[8]."',";
    $variableSql .= "'".$objPartido[9]."',";
    $variableSql .= "'".$objPartido[10]."');";
    #$variableSql .= "'".$objPartido[5]."');";
    
var_dump($variableSql);
	return consultaA($con, $variableSql);
	

  }

  public function modificarDatos($con,$objAlumno){
  	$variableSql = "UPDATE inscripcion_candidato SET "; //ES PROBABLE Q DE ERROR POR EL NOMBRE DE ALUMNOS
  	$variableSql .= "Dui           = '".$objCandidato[1]."'";
  	$variableSql .= " ,Apellido    = '".$objCandidato[2]."'";
  	$variableSql .= " ,Nombre      = '".$objCandidato[3]."'";
  	$variableSql .= " ,Candidatura = '".$objCandidato[4]."'";
  	$variableSql .= " ,Cargo       = '".$objCandidato[5]."'";
  	
  	$variableSql .= " WHERE id     = ".$objCandidato[0].";";

  	return consultaA($con, $variableSql);
  	
  }

}

?>
