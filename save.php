<?php 
    include("database.php");

    if (isset($_POST['save'])) {
        if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {

            $email = $_POST['email'];
            $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    
            $query = "INSERT INTO usuario(email, contraseña) VALUES ('$email', '$contraseña')";
            $result = mysqli_query($conn, $query);

        }

        if (!$result) {
            die("Query failed");
        }
 
    }
