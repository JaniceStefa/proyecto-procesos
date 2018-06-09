<!--
Pagina administrativa - Tablero de clientes

Enlace:
* v_validar_logout

Controladores:
* index_pesona
* index_cliente
* index_Presupuesto

* index_seguimiento
* index_calendario


Librerias:

-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SB Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/TableroAdmi/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="../assets/TableroAdmi/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/TableroAdmi/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../vista/Tablero_Admi.php">Administrador</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../vista/Tablero_Admi.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Tablero</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tablas</span>
          </a>
           <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="../controlador/index_cliente.php">Clientes</a>
            </li>
            <li>
              <a href="../controlador/index_pedido.php">Pedidos</a>
            </li>
            <li>
              <a href="../controlador/index_Presupuesto.php">Presupuestos</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Componentes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="../controlador/navbar.html">Seguimiento</a>
            </li>
            <li>
              <a href="../controlador/cards.html">Calendario</a>
            </li>
          </ul>
        </li>      
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!-- Contenido -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"> Tablero </li>
        <li class="breadcrumb-item active">Tablas </li>
      </ol>

      <!-- Tabla Pedidos-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabla de Clientes</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Ap. Paterno</th>
                  <th>Ap. Materno</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>DNI</th>
                  <th>Ap. Paterno</th>
                  <th>Ap. Materno</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach($this->modelo->Mostrar_Persona() as $registro){
                    echo "<tr class='contenidotable'><td>".$registro["DNI"]. "</td>";
                    echo "<td>".$registro["ap_paterno"]."</td>";
                    echo "<td>".$registro["ap_materno"]."</td>";
                    echo "<td>".$registro["nombre"]."</td>";
                    echo "<td>".$registro["direccion"]."</td>";
                    echo "<td>".$registro["email"]."</td>";
                    echo "<td>".$registro["telefono"]."</td>";
                    
                    //echo "<td><button type='submit' name='actualizar'><a href='V_actualizar_persona.php?d=".$registro['DNI']." &&ap=".$registro['ap_paterno']." &&am=".$registro['ap_materno']." &&nom=".$registro['nombre']." &&dir=".$registro['direccion']." &&em=".$registro['email']." &&tel=".$registro['telefono']." &&st=".$registro['estado']."'>Actualizar</a></button></td>";
                    }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- /.container-fluid--> 
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
      </div>
    </footer>
        <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para cerrar sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../controlador/c_validar_logout.php">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/TableroAdmi/jquery/jquery.min.js"></script>
    <script src="../assets/TableroAdmi/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assets/TableroAdmi/js/sb-admin.min.js"></script>
  </div>
</body>

</html>
