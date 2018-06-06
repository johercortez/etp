<?php
  $usuario = $_POST['usuario'];
  $contra = $_POST['contraseña'];
      $dp = mysqli_connect("localhost", "root", "" , "login");
      $sql = "select * from logear where usuario='$usuario' and clave='$contra'" ;
      $resultado = mysqli_query($dp,$sql);
       if($row = mysqli_fetch_assoc($resultado)){
           header('location:index2.html');
       }else{
           echo('error');
       }
      mysqli_close($dp);
?>
