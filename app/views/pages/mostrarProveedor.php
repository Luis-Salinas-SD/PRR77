<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Proveedores | P.R 77</title>

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
                        <h1 class="title">Proveedor: Nombre del Proveedor</h1>
                        <a href="../pages/addProveedor.php" class="btn btn-warning m-lg-3">
                            <i data-feather="edit"></i>
                        </a>
                    </div>
                    <!--! Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Razón Social</td>
                                            <td>CRISTIAN COMPANYS</td>
                                            <td>RFC</td>
                                            <td>MODC920228MJ7</td>
                                        </tr>
                                        <tr>
                                            <td>Observaciones</td>
                                            <td colspan="3">NOTAS DEL PROVEEDOR</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" colspan="4">Contactos</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Teléfonos</th>
                                            <th>
                                                <a class="btn btn-primary mb-3" id="btnSwitch"><i data-feather="plus"></i></a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CRISTIAN MORENO DIAZ</td>
                                            <td>amengels1@gmail.com</td>
                                            <td>7291558093, 1234567890</td>
                                            <td>
                                                <a class="btn btn-danger"><i data-feather="x-circle"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>OMAR MORENO</td>
                                            <td>hola@omar.com</td>
                                            <td>12345667891, 1234567890</td>
                                            <td>
                                                <a class="btn btn-danger"><i data-feather="x-circle"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 switch">
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="">
                                <div class="was-validated">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg">
                                                <label for="contact" class="form-label">
                                                    Contacto
                                                    <strong class="text-danger">*</strong>
                                                    <a href="#" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="El campo debe tener al menos de 2 letras">
                                                        <i class="mdi mdi-help-circle-outline"></i>
                                                    </a>
                                                </label>
                                                <input type="text" id="contact" name="contact" class="form-control" required placeholder="Nombre del contacto">
                                            </div>
                                            <div class="col-lg">
                                                <label for="email" class="form-label">Correo electrónico <strong class="text-danger">*</strong></label>
                                                <input type="email" id="email" required="" name="email" class="form-control" placeholder="Correo electrónico" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg">
                                                <label for="phone" class="form-label">
                                                    Teléfono primario
                                                    <strong class="text-danger">*</strong>
                                                    <a href="#" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="El campo debe tener al menos de 7 números">
                                                        <i class="mdi mdi-help-circle-outline"></i>
                                                    </a>
                                                </label>
                                                <input required pattern="[0-9].{6,}" type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono primario">
                                            </div>
                                            <div class="col-lg">
                                                <label for="phone" class="form-label">
                                                    Teléfono secundario
                                                    <strong class="text-danger">*</strong>
                                                    <a href="#" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="El campo debe tener al menos de 7 números">
                                                        <i class="mdi mdi-help-circle-outline"></i>
                                                    </a>
                                                </label>
                                                <input pattern=".{7,}" title="El campo debe tener al menos 7 números" type="text" id="second_phone" name="phone_second" class="form-control" placeholder="Teléfono secundario" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="row">
                                            <div class="col-lg text-center">
                                                <button class="btn btn-primary btn-send">Guardar</button>
                                                <a href="#" class="btn btn-outline-danger">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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