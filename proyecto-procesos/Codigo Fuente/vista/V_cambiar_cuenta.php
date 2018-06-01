<!--Pagina Olvidaste tu contraseña-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cambiando Contraseña...</title>
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
      <div class="card-header">Cambiar Contraseña Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Olvidaste tu contraseña?</h4>
          <p>Ingrese su Número de DNI</p>
        </div>
        <form method="post" action="../controlador/index_persona.php">
          <div class="form-group">
            <input name="DNI" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="N° de DNI" required>
          </div>

          <input type="submit" class="btn btn-primary btn-block" name="v_codigo_usuario" value="Siguiente">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../vista/V_ingresar_persona.php">Registrarse</a>
          <a class="d-block small" href="../vista/V_login.php">Iniciar Sesión</a>
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
