<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Detalles de Compra | P.R 77</title>

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
                    <div class="d-flex justify-content-between mb-2">
                        <h1 class="title">Detalles de Compra</h1>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <!-- header -->
                            <div>
                                <p>
                                    <span class="badge bg-warning">Pendiente de Pago</span>
                                </p>
                                <p class="mt-2 icons-detalle">
                                    <a class="btn btn-primary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Imprimir">
                                        <i class="mdi mdi-printer"></i>
                                    </a>
                                    <a class=" btn btn-primary" href="#" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ver cambios de la orden de compra">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a class=" btn btn-primary" href="#" role="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Duplicar orden de compra">
                                        <i class=" mdi mdi-lead-pencil"></i> <strong>Duplicar</strong>
                                    </a>
                                </p>
                            </div>
                            <div class="px-3">
                                <br>
                                <!-- Datos -->
                                <div class="row mb-6">
                                    <div class="col-lg">
                                        <div class="text-muted"><strong>Usuario Realizó</strong></div>
                                        <p class="mb-4">
                                            <strong class="text-body">CRISTIAN MORENO DÍAZ</strong><br>
                                            <br>
                                            <br>
                                            <br>
                                        </p>
                                        <div class="text-muted"># Orden de compra</div>
                                        <p># 2</p>
                                    </div>
                                    <div class="col-lg text-end">
                                        <div class="text-muted">Proveedor</div>
                                        <p class="mb-6">
                                            <strong class="text-body">CRISTIAN COMPANYS</strong>
                                            <br>
                                            MODC920228MJ7 <i class="mdi mdi-account"></i>
                                            <br>
                                            amengels1@gmail.com <i class="mdi mdi-email"></i>
                                            <br>
                                            7291558093 <i class="mdi mdi-cellphone-iphone"></i>
                                            <br>
                                        </p>
                                        <div class="text-muted">Fecha de Entrega</div>
                                        <p>viernes, 30 de julio de 2021</p>
                                    </div>
                                </div>
                                <!-- Tabla 1 -->
                                <div class="table-responsive">
                                    <table class="table border-bottom mb-5">
                                        <thead>
                                            <tr class="bg-light">
                                                <th>Descripción</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>NUEVO PRODUCTO</td>
                                                <td>
                                                    10.33
                                                </td>
                                                <td>
                                                    $1,234.00 </td>
                                                <td class="text-right">$12,747.22</td>
                                            </tr>
                                            <tr>
                                                <td>OTRO PRODUCTO</td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    $15.23 </td>
                                                <td class="text-right">$152.30</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Subtotal</strong></td>
                                                <td colspan="3" class="text-right">
                                                    <strong>$12,899.52</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>IVA</strong></td>
                                                <td colspan="3" class="text-right">
                                                    <strong>$2,063.92</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total</strong></td>
                                                <td colspan="3" class="text-right">
                                                    <strong>$14,963.44</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <strong>Notas</strong><br>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla 2 -->
                                <div class="table-responsive">
                                    <table class="table border-bottom mb-5">
                                        <thead>
                                            <tr>
                                                <th colspan="5" class="text-center">
                                                    Pagos Realizados
                                                </th>
                                            </tr>
                                            <tr class="bg-light">
                                                <th>Cuenta</th>
                                                <th>Forma de Pago</th>
                                                <th>Pago</th>
                                                <th>Fecha de Pago</th>
                                                <th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BANCO AZTECA</td>
                                                <td>TRANSFERENCIA ELECTRÓNICA</td>
                                                <td>$963.44</td>
                                                <td>sábado, 04 de septiembre de 2021</td>
                                                <td>
                                                    <a target="_blank" href="#" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Imprimir">
                                                        <i class="mdi mdi-printer"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Total Pagado</strong></td>
                                                <td class="text-right">
                                                    <strong>$963.44</strong>
                                                </td>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr class="text-danger">
                                                <td colspan="2"><strong>Total Adeudo</strong></td>
                                                <td class="text-right">
                                                    <strong>$14,000.00</strong>
                                                </td>
                                                <td colspan="2"></td>
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

    </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>