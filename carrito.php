
<?php include("includes/header.php")?>

<div class="container">
<h1 class="mt-4 pt-3 text-center">Carrito</h1>
<?php if (!isset($usuario)){?>
    <h1 class="mt-4 pt-3 text-center">Por Favor Iniciar Sesiòn para ver su carrito</h1>

<?php }else { 
    $query = "Select id from usuario where email = '$usuario' "; 
    $consulta = mysqli_query($conn, $query);
    $x = mysqli_fetch_assoc($consulta);
    $id = $x["id"];

    $query = "Select * from carrito where idUsuario = ".$id;
    $consulta = mysqli_query($conn, $query);
    $filas = mysqli_num_rows($consulta);
    
    if ($filas == 0){?>
        <h1 class="mt-4 pt-3 text-center">Tu carrito esta vacio :(</h1>
    <?php }else { ?>
    
    <h2 class="mt-4 pt-3 text-center">Lo que esta en su carrito hasta el momento es:</h2>
    <div class="row">
        <div class="col-md-3">
            <h3  class="mt-4 pt-1 text-center">Producto</h3>
        </div>
        <div class="col-md-3">
            <h3  class="mt-4 pt-1 text-center">Precio</h3>
        </div>
        <div class="col-md-3">
            <h3  class="mt-4 pt-1 text-center">Cantidad</h3>
        </div>
        <div class="col-md-3">
            <h3  class="mt-4 pt-1 text-center">Eliminar</h3>
        </div>
        
        <?php 
        #mostrar lo del carrito 
        while($row = mysqli_fetch_assoc($consulta)){?>
            
                <?php $q = "Select Nombre, Precio from producto where id=".$row["idProducto"] ;
                       $consulta2 = mysqli_query($conn, $q);
                       $x = mysqli_fetch_assoc($consulta2);   
                ?>
                <?php $q1 = "Select id from carrito where  idProducto = ".$row["idProducto"]." and cantidad =".$row["cantidad"] ;
                        $consulta3 = mysqli_query($conn, $q1);
                        $y = mysqli_fetch_assoc($consulta3);   
                   
                ?>
                <div class="col-md-3"> 
                <h5  class="mt-4 text-center"> <?php echo $x['Nombre']; ?></h5>
                </div>
                <div class="col-md-3"> 
                    <h5  class="mt-4 text-center"> <?php echo $x['Precio']; ?></h5>
                </div>
                <div class="col-md-3">  <h5  class="mt-4 text-center">  <?php echo $row['cantidad']; ?> </h5></div>

                <div class="col-md-3"> <a href="eliminarCarrito.php?id=<?php echo $y['id'] ?>"
                 class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a> </div>
            
        <?php } ?>
        
        
    <?php } #fin del segundo else para mostrar el producto ?>
    
    

<?php } ?>


</div>

<?php include("includes/footer.php")?>