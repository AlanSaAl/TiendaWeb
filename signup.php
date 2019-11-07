<?php include("database.php") ?>

<?php include("includes/header.php") ?>

<div class="container-fluid">
    <h1>Registrarse</h1>

    <!-- formulario de registro -->
    <form action="save.php" method="post">

        <div class="form-group">
            <label for="inputEmail">E-mail</label>
            <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="inputPassword">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword" name="contraseña" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirmar contraseña</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar contraseña">
        </div>

        <button type="submit" class="btn btn-primary" name="save" value="Register">Enviar</button>

    </form>
</div>

<?php include("includes/footer.php") ?>