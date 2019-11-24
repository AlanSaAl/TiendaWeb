<?php
include("db.php");
$Nombre = "";
$Precio = "";
$Description = "";
$Categoria = "";
$Cantidad = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Precio = $row['Precio'];
    $Description = $row['Descripcion'];
    $Categoria = $row['Categoria'];
    $Cantidad = $row['Cantidad'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nombre = $_POST['Nombre'];
  $Precio = $_POST['Precio'];
  $Description = $_POST['Descripcion'];
  $Categoria = $_POST['Categoria'];
  $Cantidad = $_POST['Cantidad'];

  $query = "UPDATE producto set Nombre='$Nombre', Precio = '$Precio', Descripcion = '$Description', Categoria = '$Categoria', Cantidad = '$Cantidad' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Inventario Actualizado';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Update Nombre">
          </div>
          <div class="form-group">
            <input name="Precio" type="text" class="form-control" value="<?php echo $Precio; ?>" placeholder="Update Precio">
          </div>
          <div class="form-group">
            <textarea name="Descripcion" class="form-control" cols="30" rows="4"><?php echo $Description; ?></textarea>
          </div>
          <div class="form-group">
            <input name="Categoria" type="text" class="form-control" value="<?php echo $Categoria; ?>" placeholder="Update Categoria">
          </div>
          <div class="form-group">
            <input name="Cantidad" type="text" class="form-control" value="<?php echo $Cantidad; ?>" placeholder="Update Cantidad">
          </div>
          <button class="btn-success" name="update">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>