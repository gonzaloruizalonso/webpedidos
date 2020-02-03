<?php
  session_start();
  include_once("conexion.php");

  $usuario = $_POST['usr'];
  $clave  = $_POST['pas'];

  $sql="SELECT passcode FROM admin WHERE username='$usuario'";
  $result = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_assoc($result);
  $claveReal = $fila['passcode'];

  if($clave!=$claveReal){
     echo "Login incorrecto<br>";
     echo "<a href=\"./pe_login.php\">Volver al login</a>";
  } else {

     $sql2="SELECT customerName FROM customers WHERE customerNumber=(
       SELECT id from admin where username='$usuario')";
     $result = mysqli_query($conn, $sql2);
     $fila = mysqli_fetch_assoc($result);
     $nombre = $fila['customerName'];


     $_SESSION['customerName']=$nombre;
     header("location:pe_inicio.php");
  }
?>
