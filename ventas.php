<?php include'./Coneccion.php' ?>
<?php
$conexion = new mysqli('localhost', 'root', '', 'ventas');
?>
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
<!DOCTYPE html>
<html lang="es">    
 
     <head>
         

          <hr>
          <body align="center">
<body style="background:silver">

              
               <br>
<br>
<form action="ventamanejador.php?accion=save" method="post">  

REGISTRO DE PRODUCTOS
<meta charset = "utf-8"> 

</head>
<br>
<br>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>


          
<br>
nombre:  <input type="text" name="nombre" maxlength="25" onkeypress="return soloLetras(event)">
<br>
<br>

categoria: <select name="categoria"> 
<option value="bebida energizantes">bebida energizantes</option> 
<option value="bebida naturales">bebida naturales</option>
<option value="bebida alcohilicas">bebida alcoholicas</option>
<option value="bebida carbonatadas">bebida carbonatadas</option>

  
</select>
<script type="text/javascript">
    function valideKey(evt)
    {
        var code = (evt.which) ? evt.which : evt.keyCode;
        if(code==8)
        {
            //backspace
            return true;
        }
        else if(code>=48 && code<=57)
        {
            //is a number
            return true;
        }
        else
        {
            return false;
        }
    }
</script>
<br>
<br>
precio:  <input type="text" name="precio" maxlength="25" onkeypress="return valideKey(event);"/>
<br>
<br>

codigo:  <input type="text" name="codigo" maxlength="25" onkeypress="return valideKey(event);"/>
<br>
<br>

<input type="submit" name="hola" value="guardar producto"/>

 <br>
 <br>
 </html>
<hr/>
</form> 