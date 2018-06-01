<!--
Pagina de registro de usuario
Enlace:
*v_login

Controlador:
*index_persona

Librerias:
*
*

-->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrar Cliente</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/LogIn/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/LogIn/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/LogIn/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrando Persona</div>
      <div class="card-body">
        <form action="../controlador/index_persona.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputLastName">Apellido Paterno
                </label>
                <input required name="ap_paterno" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Apellido Paterno">
                </div>

                <div class="col-md-6">
                <label for="exampleInputLastName">Apellido Materno
                </label>
                <input required name="ap_materno" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Apellido Materno">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                <label for="exampleInputName">Nombres</label>
                <input required name="nombre" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nombres">
                </div>
                <div class="col-md-6">
                <label for="exampleInputName">DNI</label>
                <input name="DNI" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="N° DNI">
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
                <label for="exampleInputLastName">Dirección
                </label>
                <input name="direccion" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Direccion">
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Contraseña</label>
                <input required name="contrasenia" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Teléfono</label>
                <input name="telefono" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Telefono">
                </div>
            </div>
          </div>
        <a href="../vista/V_login.php"> <input type="submit" name='generar' class="btn btn-primary btn-block" ></a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../vista/V_login.php">Iniciar Sesión</a>
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
