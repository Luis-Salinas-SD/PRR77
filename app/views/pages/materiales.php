<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Materiales | P.R 77</title>

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
                        <h1 class="title">MATERIALES</h1>
                        <a href="../pages/addMateriales.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Main Card-->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-10 mx-3">
                                                <label class="form-label">BUSCAR</label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">CLIENTE 1</option>
                                                    <option value="1">CLIENTE 2</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="form-group">
                                                    <div class="mb-3">
                                                        <button type="button" class="btn btn-outline-warning mt-4 p-1">
                                                            <i data-feather="search" class="me-2"></i>
                                                            Buscar
                                                        </button>
                                                    </div>
                                                </div>
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
                                <th>NOMBRE</th>
                                <th>CLAVE</th>
                                <th>PRECIO</th>
                                <th>ESTATUS</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Luck</td>
                                <td>70</td>
                                <td>$ 20.00 </td>
                                <td>
                                    <span class="badge bg-success p-2">Activo</span>
                                </td>
                                <td>
                                    <a href="../pages/editMateriales.php" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Material">
                                        <i class="mdi mdi-lead-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Inactivar Material">
                                        <i class="mdi mdi-block-helper"></i>
                                    </a>
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