<?php
  #include './venta.php';
class ventaControlador extends venta{

  public function guardarDatos($con,$objAlumno) {

    $variableSql = "INSERT INTO producto "; 
    $variableSql .= "(id_producto,nombre,categoria,precio,codigo)";
    $variableSql .= "VALUES (";
    $variableSql .= "'".$objAlumno[0]."',";
    $variableSql .= "'".$objAlumno[1]."',";
    $variableSql .= "'".$objAlumno[2]."',";
    $variableSql .= "'".$objAlumno[3]."',";
    $variableSql .= "'".$objAlumno[4]."');";
//var_dump($variableSql);

  return consultaA($con, $variableSql);

  }

  public function modificarDatos($con,$objAlumno){
    $variableSql = "UPDATE  SET "; //ES PROBABLE Q DE ERROR POR EL NOMBRE DE ALUMNOS
    $variableSql .= " ,nombre = '".$objAlumno[1]."'";
    $variableSql .= " ,categoria = '".$objAlumno[2]."'";
    $variableSql .= " ,precio = '".$objAlumno[3]."'";
    $variableSql .= " ,codigo= '".$objAlumno[4]."'";
    $variableSql .= " WHERE id_producto = ".$objAlumno[0].";";

    return consultaA($con, $variableSql);
    
  }

}

?>
