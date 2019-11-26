<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM carrito WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Articulo eliminado del carrito';
  $_SESSION['message_type'] = 'danger';
  header('Location: carrito.php');
}

?>