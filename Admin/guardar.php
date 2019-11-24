<?php

include('db.php');

if (isset($_POST['Subir'])) {
  echo "llego";

  $Nombre = $_POST['Nombre'];
  $Precio = $_POST['Precio'];
  $Description = $_POST['Descripcion'];
  $Categoria = $_POST['Categoria'];
  $Cantidad = $_POST['Cantidad'];

  #Esta es la carpteta donde se guardaran todas las imaganes de los productos y su ruta sera "TiendaWeb/ImagenesProductos/"

  $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/TiendaWeb/ImagenesProductos/";

  #Primer if verifica que el tipo de archivo sea una imagen de tipo jpeg, pjpeg, png
  if ($_FILES["archivo"]["type"] == "image/jpeg" || $_FILES["archivo"]["type"] == "image/pjpeg" || $_FILES["archivo"]["type"] == "image/png") {
    #Verifica que exista la carpeta 
    if (file_exists($carpeta) || @mkdir($carpeta)) {
      $origen = $_FILES["archivo"]["tmp_name"];
      $destino = $carpeta . $_FILES["archivo"]["name"];
      if (@move_uploaded_file($origen, $destino)) {
        echo "Archivo movido correctamente";
      }
    }
  }
  // $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  // $result = mysqli_query($conn, $query);
  // if(!$result) {
  //   die("Query Failed.");
  // }

  $query = "USE tiendaweb";
  $result = mysqli_query($conn, $query);
  
  $query1 = "INSERT INTO producto(Nombre, Precio, Descripcion, Categoria, Cantidad, imagen) values('$Nombre','$Precio', '$Description', '$Categoria', '$Cantidad', '$destino')";
  $resul = mysqli_query($conn, $query1);
  

  $_SESSION['message'] = 'Se subio nuevo articulo con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
