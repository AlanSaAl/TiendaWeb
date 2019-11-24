<?php

include('db.php');

if (isset($_POST['Subir'])) {
  echo "llego";

  $Nombre = $_POST['Nombre'];
  $Precio= $_POST['Precio'];
  $Description=$_POST['Descripcion'];
  $Categoria=$_POST['Categoria'];
  $Cantidad =$_POST['Cantidad'];

 

  echo $_FILES["archivo"]["type"];
  


#El siguiente codigo es solo para guardar la ubicacion de la imagen (archivo)

#Definimos la carpeta donde se guardaran las imagenes 
$CarpetaDestino = "ImagenesProducto/";
  



  // $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  // $result = mysqli_query($conn, $query);
  // if(!$result) {
  //   die("Query Failed.");
  // }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  #header('Location: index.php');

}
