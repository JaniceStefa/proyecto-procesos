<?php 
  session_start();
  include "../modelo/serv.php";
  if(isset($_SESSION["user"])){
    echo '<script> window.location="../controlador/index_persona.php"; </script>';
  }
?>
<!-- Pagina de Inicio de sesión  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Log in</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/LogIn/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/LogIn/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/LogIn/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Inicio de Sesión</div>
      <div class="card-body">
        <form method="post" action = "../modelo/validar_login.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Número DNI</label>
            <input name ="user" autocomplete="off" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Ingrese N° DNI" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name ="pw" autocomplete="off"class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar Contraseña</label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name=" login" value="Log In">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="V_ingresar_persona.php">Registrarse</a>
          <a class="d-block small" href="V_cambiar_cuenta.php">¿Olvidaste tu contraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../assets/LogIn/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/LogIn/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../assets/LogIn/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
