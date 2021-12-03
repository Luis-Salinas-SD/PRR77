<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Tickets de Salida | P.R 77</title>

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
                    <div class="d-flex justify-content-between my-3">
                        <h1 class="title">TICKETS DE SALIDA: #001</h1>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <form style="display: inline" action="" method="POST">
                                        <input type="hidden" name="_token">
                                        <input type="hidden" name="_method">
                                        <button class="btn btn-success btn-sm mx-2"><i data-feather="check"></i>Validar</button>
                                    </form>
                                    <a href="#" class="btn btn-primary btn-sm mx-2"><i data-feather="printer">print</i></a>
                                </div>
                            </div>
                            <div class="table-responsive my-3">
                                <table class="table table-bordered table-condensed table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Número de Ticket:</td>
                                            <td>
                                                #00002
                                            </td>
                                            <td>Proyecto:</td>
                                            <td>
                                                DIME ESTUDIO DE DISEÑO &nbsp; #23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Realizado Por:</td>
                                            <td colspan="3">CRISTIAN MORENO DÍAZ</td>
                                        </tr>
                                        <tr>
                                            <td>Cantidad</td>
                                            <td colspan="2">Producto</td>
                                            <td>Fase</td>
                                        </tr>
                                        <tr>
                                            <td>40</td>
                                            <td colspan="2">PRODUCTO UNO MASCULINO AZUL CIELO<br></td>
                                            <td>ACCESORIOS</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div style="height: 48px"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-print-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 text-center">
                                                        _______________________________<br>
                                                        Realizado Por:<br>
                                                        CRISTIAN MORENO DÍAZ
                                                    </div>
                                                    <div class="col-print-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 text-center">
                                                        _______________________________<br>
                                                        Encargado:<br>
                                                        CRISTIAN MORENO DÍAZ
                                                    </div>
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