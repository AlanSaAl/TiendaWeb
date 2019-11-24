<?php

include("Admin/includes/header.php");

if (!empty($_POST['acontraseña'])) {

    $aContraseña = $_POST['acontraseña'];

    $message = '';

    if ($aContraseña == '123admin') {
        header("Location: Admin/index.php");
    } else {
        $message = 'Contraseña incorrecta';
        header("Location: admin.php");
    }
}

?>

<!-- Formulario para el admin -->
<div class="container">

    <div class="col-md-6 offset-md-3">

        <h1>Iniciar sesión de administrador</h1>
        <p>Para poder acceder a la pagina de administración por favor ingrese la constraseña de administrador</p>

        <!-- formulario de inicio de sesión -->
        <form action="admin.php" method="post">

            <div class="form-group">
                <input type="password" class="form-control" name="acontraseña" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>

        </form>

    </div>

    <!-- Mensaje de login -->
    <?php if (!empty($message)) : ?>
        <p><?= $message ?><p>
    <?php endif; ?>

</div>

<?php include("Admin/includes/footer.php") ?>