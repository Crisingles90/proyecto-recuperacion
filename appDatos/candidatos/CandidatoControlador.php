<?php
 #include './Alumno.php'; //CREO QUE HAY QUE BORRAR ESTO
class CandidatoControlador extends Candidato {

  public function guardarDatos($con,$objCandidato) {

    $variableSql = "INSERT INTO candidato"; //POSIBLE ERROR
    $variableSql .= "(id_Candidato,Dui,Apellido,Nombre,Codigo_Depto,Codigo_Municipio,Tipo_Candidatura,id_Tendencia,id_Partido,Nombre_Coalision)"; //tendencia se refiere  a (diputado,presidente o alcalde)
    $variableSql .= "VALUES (";
    $variableSql .= "'".$objCandidato[0]."',";
    $variableSql .= "'".$objCandidato[1]."',";
    $variableSql .= "'".$objCandidato[2]."',";
    $variableSql .= "'".$objCandidato[3]."',";
    $variableSql .= "'".$objCandidato[4]."',";
    $variableSql .= "'".$objCandidato[5]."',";
    $variableSql .= "'".$objCandidato[6]."',";
    $variableSql .= "'".$objCandidato[7]."',";
    $variableSql .= "'".$objCandidato[8]."',";
    $variableSql .= "'".$objCandidato[9]."');";
    
#var_dump($variableSql);
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
