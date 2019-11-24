<?php

session_start();

include("database.php");

if (isset($_SESSION['username'])) {

    $usuario = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SilverTaxco</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background:black;">

        <!--Logo y Silver Taxco-->
        <a class="navbar-brand" href="index.php" style="color:white;">
            <img src="assets/logo.JPG" width="30" height="30" class="d-inline-block align-top" alt="">
            SilverTaxco
        </a>

        <!--Botones barra-->
        <div class="collapse navbar-collapse" id="botonesBarra">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: blanchedalmond;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Charms & Necklaces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Earrins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Rings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Bracelets and Slaves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Chains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: blanchedalmond;">Art</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: blanchedalmond;">
                        Perfil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="login.php">Iniciar Sesión</a>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                        <a class="dropdown-item" href="signup.php">Registrarse</a>
                        <a class="dropdown-item" href="index.php">Informacion Personal</a>
                        <a class="dropdown-item" href="admin.php">Administrador</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Información de login -->
        <?php if (!empty($usuario)) : ?>
            <a class="nav-link" href="#" style="color: blanchedalmond;">Bienvenido: <?= $usuario; ?></a>
        <?php endif; ?>

        <!--Logo de carrito-->
        <a class="navbar-brand" href="#" style="color:white;">
            <img src="assets/carrito.png" id="carrito" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>        

    </nav>

    <!--fin de barra de nav-->
    </div>