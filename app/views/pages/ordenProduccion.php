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
                        <h1 class="title">ORDEN DE PRODUCCIÓN #1</h1>
                        <a href="../pages/addOrden.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>

                    <div class="card my-3">
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>#Orden</td>
                                        <td>23</td>
                                        <td>Cliente</td>
                                        <td>CRISTIAN MORENO DÍAZ</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de Entrega</td>
                                        <td>jueves, 30 de septiembre de 2021</td>
                                        <td>Archivo</td>
                                        <td>
                                            Sin archivo
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=" text-center">
                                <a href="#" class="btn btn-outline-success m-2">
                                    <i data-feather="plus-circle"></i>
                                    Añadir producto</a>
                                <a class="btn btn-outline-flickr waves-effect" type="button" href="#">
                                    <i data-feather="check"></i>
                                    <span>Finalizar Proyecto</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Card -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_oproduction" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>ABASTO</th>
                                            <th>ACCESORIOS</th>
                                            <th>BORDADO</th>
                                            <th>CORTE</th>
                                            <th>CONFECCIÓN</th>
                                            <th>EMPAQUE</th>
                                            <th>ENTREGADO</th>
                                            <th>SERIGRAFIA</th>
                                            <th>SUBLIMADO</th>
                                            <th>TRAZOS</th>
                                            <th>AA</th>
                                            <th>AA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="item_7">
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"> <i data-feather="trash"></i>
                                                </a>
                                                <p>PRODUCTO UNO (MASCULINO)</p>
                                            </td>
                                            <td>
                                                <total_p_7>52</total_p_7>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>12</strong>
                                                    <span class="text-muted">/ 52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 23.08%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>52</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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