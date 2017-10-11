<?php
   include "../../inc/conexion.php";
   // Change character set to utf8
   mysqli_set_charset($con,"utf8");
   //query for insert data into tables
   $NOMBRE = $_POST['NOMBRE'];
   $CORREO =$_POST['CORREO'];
   $TELEFONO =$_POST['TELEFONO'];
   $USUARIO =$_POST['USUARIO'];
   $PASSWORD =$_POST['PASSWORD'];
   $DEPARTAMENTO=$_POST['DEPARTAMENTO'];


$query = "INSERT INTO `usuarios`
        (`id_usuario`, `usuario`, `password`, `departamento`, `Nombre`, `correo`, `telefono`)
         VALUES
         (null,'$USUARIO','$PASSWORD','$DEPARTAMENTO','$NOMBRE','$CORREO','$TELEFONO')";
         $query_run= mysqli_query($con, $query);
        // $retval=mysql_query($query,$conn);
          if ($query_run)
          { 
                echo '<div id="status_text" class="alert alert-success" role="alert">Usuario Guardado correctamente</div>';
          }

   mysqli_close($con);
?>