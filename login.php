<?php

include("includes/header.php");

if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {    

    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT COUNT(*) as contar FROM usuario WHERE email = '$email' and contraseña = '$contraseña'";
    $consulta = mysqli_query($conn, $query);
    $array = mysqli_fetch_array($consulta); 
    
    $message = '';

    if ($array['contar'] > 0) {        
        $_SESSION['username'] = $email;
        header("Location: index.php");
    } else {
        $message = 'Información incorrecta';
    }
}

?>

<div class="container">    

        <div class="col-md-4 offset-md-4">

            <h1>Iniciar sesión</h1>            

            <!-- formulario de inicio de sesión -->
            <form action="login.php" method="post">

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>

            </form>

            <!-- Mensaje de login -->
            <?php if (!empty($message)) : ?>
                <p><?= $message ?><p>
            <?php endif; ?>

        </div>        

</div>

<?php include("includes/footer.php") ?>