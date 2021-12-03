<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Compras | P.R 77</title>

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
                        <h1 class="title">Movimientos: BBVA</h1>
                        <a href="../pages/addCompra.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus">Nueva Compra</i>
                            <span>Nueva Compra</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card m-1">
                        <div class="card-body">
                            <h3>
                                Saldo actual de la cuenta:
                                <span class="text-danger">666.66</span>
                            </h3>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card m-1">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <!-- Tipo de Movimiento -->
                                    <div class="col-sm-auto form-group">
                                        <label class="form-label">Tipo de movimiento</label>
                                        <select class="js-example-basic-single form-select" data-width="100%">
                                            <option selected disabled>Elige una opcion</option>
                                            <option>opt1</option>
                                            <option>opt2</option>
                                            <option>opt3</option>
                                            <option>opt4</option>
                                        </select>
                                    </div>
                                    <!-- Cuenta Contable -->
                                    <div class="col-sm-auto form-group">
                                        <label class="form-label">Cuenta Contable</label>
                                        <select class="js-example-basic-single form-select" data-width="100%">
                                            <option selected disabled>Elige una opcion</option>
                                            <option>opt1</option>
                                            <option>opt2</option>
                                            <option>opt3</option>
                                            <option>opt4</option>
                                        </select>
                                    </div>
                                    <!-- Fecha -->
                                    <div class="col-sm-auto form-group">
                                        <label class="form-label">Fecha Movimiento</label>
                                        <div class="input-group date datepicker" id="datePickerExample">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-addon">
                                                <i data-feather="calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Buscar -->
                                    <div class="col-sm-auto form-group">
                                        <button type="button" class="btn btn-outline-warning mt-4">
                                            <i data-feather="search" class="me-2"></i>
                                            Buscar
                                        </button>
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
                                <th>Fecha</th>
                                <th>Concepto</th>
                                <th>Abonos</th>
                                <th>Cargos</th>
                                <th>Saldo</th>
                                <th>Acreditado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>23-11-2021</td>
                                <td>algo</td>
                                <td>$206,850</td>
                                <td>$206,850</td>
                                <td>$206,850</td>
                                <td>
                                    <a href="../pages/detallesCompra.php" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalles">
                                        <i data-feather="printer"></i>
                                    </a>
                                    <a href="#" style="cursor: default" class="btn btn-rounded btn-danger">&nbsp;</a>
                                    <a href="#" style="cursor: default" class="btn btn-rounded btn-success">&nbsp;</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>