<?php
// Inicio session
   session_start();
   include_once("conexion.php");
   if(!isset($_SESSION['customerName'])){
      header("location:pe_login.php");
   } else {
?>
      <html>
      <head>
        <link rel=\"stylesheet\" href=\"bootstrap.min.css\">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script></head>
      <body class="bg-dark text-white">
        <section class="login-block">
        <div class="container"><br><br><br>
      <div class="font-weight-bold border border-dark rounded bg-light text-dark">
        <?php
          //$_SESSION['carrito']=array();
          echo "Bienvenid@ ";
          echo $_SESSION['customerName'];
          ?>
          <br><h5>MENU</h5><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>
          <a href="./pe_altaped.php" class="btn btn-primary">Realizar pedido</a><br><br>

          <br>Para cerrar la sesion, pulsa: <a href='pe_logout.php'>logout</a>
      </div>
      </div>
    </section>
  </body></html>
  <?php
   }
?>
