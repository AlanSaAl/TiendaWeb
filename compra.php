<?php
include("includes/header.php");
?>

<?php if  (!empty($_POST['Cantidad']) && isset($usuario)){
    $query = "Select id from usuario where email = '$usuario' "; 
    $consulta = mysqli_query($conn, $query);
    $x = mysqli_fetch_assoc($consulta);
    $id = $x["id"];
    $id_producto = $_SESSION['ID'];
    $canti= $_POST['Cantidad'];
    $query = "insert into carrito(idUsuario, idProducto, cantidad) values($id, $id_producto, $canti)";
    mysqli_query($conn, $query);
    echo $query;

}


?>

<?php if (!isset($usuario)) { ?>
    <h1 class="mt-4 pt-3 text-center">Por Favor Iniciar Sesiòn para agregar al carrito</h1>

<?php } else { ?>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-5 offset-3">
                <img src=<?php echo $_SESSION['Imagen']; ?> alt="" width="400" height="400">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 pt-3 offset-3">
                <h3> Producto: <?php echo $_SESSION['Nombre'] ?> </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 pt-3 offset-3">
                <h3> Descripcion: <?php echo $_SESSION['Descripcion'] ?> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 pt-3 offset-3">
                <h3> Precio: $<?php echo $_SESSION['Precio'] ?> </h3>
            </div>
        </div>
        <form action="compra.php" method="post">
        <div class="form-group col-md-3 offset-3" >
            <input type="number" name="Cantidad" class="form-control" placeholder="Cantidad" autofocus>
        </div>
        <input class = "col-md-3 offset-3" type="submit" name="Subir"  value="Agregar a Carrito">
             
        </form>
    </div>


<?php } ?>










<?php
include("includes/footer.php");
?>