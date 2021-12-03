<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Ordenes de Producción | P.R 77</title>

    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">
            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <!-- ==========================================  -->
            <!-- ================ Content =================  -->
            <!-- ==========================================  -->
            <div class="page-content">
                <div class="row">
                    <!-- Subtitle -->
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="title">ALMACÉN: ZONA TOLUCA</h1>
                        <a href="../pages/addAlmacen.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Card 2 -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-striped ">
                                        <tbody>
                                            <tr>
                                                <td>ALMACÉN</td>
                                                <td>ZONA TOLUCA</td>
                                            </tr>
                                            <tr>
                                                <td>DIRECCIÓN</td>
                                                <td>DIRECCION ZONA TOLUCA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card my3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">PALLETS</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PL 34</td>
                                            <td>
                                                <a href="../pages/showPallet.php" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver Productos">
                                                    <i class=" mdi mdi mdi-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Inactivar Pallet">
                                                    <i class="mdi mdi-close-circle-outline"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Activar Pallet">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>



</html>