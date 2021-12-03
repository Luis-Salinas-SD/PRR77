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
                        <h1 class="title">PALLET: PL 34</h1>
                        <a href="../pages/addAlmacen.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Abastecer</span>
                        </a>
                    </div>
                    <!-- Card 1 -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>ALMACÉN</th>
                                                <th>ZONA TOLUCA</th>
                                                <th>PALLET</th>
                                                <th>PL 34</th>
                                            </tr>
                                            <tr>
                                                <th>DIRECCIÓN</th>
                                                <th colspan="3">DIRECCION ZONA TOLUCA</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 - Oculto - -->
                    <div class="card my3">
                        <div class="card-body">
                            <form class="cmxform" id="signupForm" method="get" action="#">
                                <fieldset class="row">
                                    <!--! Tipo de Producto  -->
                                    <div class="mb-3 col-6 container">
                                        <label class="form-label">
                                            Tipo de Producto
                                        </label>
                                        <select class="js-example-basic-single form-select" name="medida">
                                            <option selected disabled>Elige una opción</option>
                                            <option value="0">option 1</option>
                                            <option value="1">opcion 2</option>
                                        </select>
                                    </div>
                                    <!--! Producto  -->
                                    <div class="mb-3 col-6 container">
                                        <label class="form-label">
                                            Producto
                                        </label>
                                        <select class="js-example-basic-single form-select" name="medida">
                                            <option selected disabled>Elige una opción</option>
                                            <option value="0">option 1</option>
                                            <option value="1">opcion 2</option>
                                        </select>
                                    </div>
                                    <!--! CANTIDAD A ABASTECER  -->
                                    <div class="mb-3 col-12 container">
                                        <label class="form-label">
                                            CANTIDAD A ABASTECER
                                        </label>
                                        <input type="number" name="cantidad" id="" class="form-control">
                                    </div>
                                </fieldset>
                                <div class="form-group text-center">
                                    <button class="btn btn-warning btn-send mx-2" type="submit" value="Submit">GUARDAR</button>
                                    <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card my3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Unidad de Medida</th>
                                            <th>Cantidad en Alamacen</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                PRODUCTO UNO
                                            </td>
                                            <td>
                                                PIEZAS
                                            </td>
                                            <td>28</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                AHORCADORES
                                            </td>
                                            <td>
                                                PIEZAS
                                            </td>
                                            <td>34</td>
                                            <td></td>
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