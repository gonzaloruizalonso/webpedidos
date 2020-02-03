<?php
session_start();
if(isset($_SESSION['customerNumber'])){
  header("location:usuario.php");
}else {
?>
  <html><head><title>Login </title><link rel="stylesheet" href="bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script></head>
     <body>
    <section class="login-block">
    <div class="container">
	<div class="row ">
		<div class="col login-sec">
		    <h2 class="text-center">Login Web Pedidos</h2>
		    <form class="login-form" action="comprobacion.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="" name="usr">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="" name="pas">
  </div>
    <div class="form-check">
    <button type="submit" class="btn btn-login float-right">Submit</button>
  </div>

</form>
  </div>
    </div>
    </div>
</section>
      </body></html>

<?php
}
?>
