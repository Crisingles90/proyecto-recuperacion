<?php
  #include './producto1.php';
class productoControlador extends producto1 {

  public function guardarDatos($con,$objAlumno) {

    $variableSql = "INSERT INTO venta "; 
    $variableSql .= "(id_ventas,nombreproducto,cantidadproducto,precio,codigo)";
    $variableSql .= "VALUES (";
    $variableSql .= "'".$objAlumno[0]."',";
    $variableSql .= "'".$objAlumno[1]."',";
    $variableSql .= "'".$objAlumno[2]."',";
    $variableSql .= "'".$objAlumno[3]."',";
    $variableSql .= "'".$objAlumno[4]."');";

    var_dump($variableSql);

  return consultaA($con, $variableSql);

  }

  public function modificarDatos($con,$objAlumno){
    $variableSql = "UPDATE  SET "; 
    $variableSql .= " ,nombreproducto = '".$objAlumno[1]."'";
    $variableSql .= " ,cantidadproducto = '".$objAlumno[2]."'";
    $variableSql .= " ,precio = '".$objAlumno[3]."'";
    $variableSql .= " ,codigo= '".$objAlumno[4]."'";
    $variableSql .= " WHERE id_ventas = ".$objAlumno[0].";";

    return consultaA($con, $variableSql);
    
  }

}

?>
