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
                    <div class="d-flex justify-content-between">
                        <h1 class="title">ORDENES DE PRODUCCIÓN</h1>
                        <a href="../pages/addOrden.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-5">
                                                <label for="Select1" class="form-label">TIPO DE MOVIMIENTO</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">CLIENTE</option>
                                                    <option value="1">PROVEEDOR</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-5 mx-2">
                                                <label for="Select1" class="form-label">TIPO DE MOVIMIENTO</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">CLIENTE</option>
                                                    <option value="1">PROVEEDOR</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <i data-feather="search"></i>
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Cliente</th>
                                <th># Prenda</th>
                                <th>Validó</th>
                                <th>Fecha de Entrega</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>NUEVO CLIENTE</td>
                                <td>3</td>
                                <td>CRISTIAN MORENO DÍAZ</td>
                                <td>martes, 13 de julio de 2021</td>
                                <td>
                                    <a href="../pages/ordenProduccion.php" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>