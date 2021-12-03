<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if ($email == 'roberto@mail.com') {
        header('Location: http://localhost:8080/pr77/app/views/pages/elect-prot.php');
        //header('Location: https://pr77.suwebexpress.com.mx/app/views/pages/elect-prot.php');
        exit;
    } else {
        echo ('Datos incorrectos');
    }
}
