<?php

include("includes/header.php");

if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['edad']) && !empty($_POST['telefono']) && !empty($_POST['contraseña'])) {

    $message = '';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuario (nombre, email, edad, telefono, contraseña) VALUES ('$nombre', '$email', '$edad', '$telefono', '$contraseña')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        $message = 'Sorry there must have been an issue creating your account';
    } else {
        $message = 'Usuario creado';
    }
} else {
    $message = 'Por favor no deje campos vacios';
}

?>

<div class="container-fluid">

    <div class="col-md-4 offset-md-4">

        <h1>Registrarse</h1>

        <!-- formulario de registro -->
        <form action="signup.php" method="post">

            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="edad" placeholder="Edad">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirmar contraseña">
            </div>

            <button type="submit" class="btn btn-primary" value="Register">Enviar</button>

        </form>

        <div class="col-md-8 offset-md-2">

            <?php if (!empty($message)) : ?>
                <p> <?= $message ?></p>
            <?php endif; ?>

        </div>

    </div>

</div>

<?php include("includes/footer.php") ?>