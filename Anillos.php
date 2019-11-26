<?php
include("includes/header.php");
include("database.php");
?>
<?php 
$query = 'Select * from producto where categoria= "Anillos"';
$resultado = mysqli_query($conn,$query);
if (mysqli_num_rows($resultado)%2 == 0){
    $filas = mysqli_num_rows($resultado)/2;  
}else {
    $filas = (mysqli_num_rows($resultado)+1)/2;
}
?>
<div class="container">
<?php for($i=0; $i<$filas; $i++){
    $contador=0?>
    <div class="row">
        
        <?php while($contador<3 && $row = mysqli_fetch_assoc($resultado))
            {
            $carpeta = "Admin/";
            ?>
            <div class="col-md-4 pt-5">  
            <div class="card" style="width: 18rem;">
                <img src=<?php echo $carpeta.$row['imagen']; ?> class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['Nombre']; ?></h5>
                <p class="card-text"><?php echo "Precio $",$row['Precio']; ?></p>
                <a href="compra.php" class="btn btn-primary">Comprar</a>
                <?php    if(isset($usuario)){
                    $nombre = $row['Nombre'];
                    $_SESSION['Nombre'] = $nombre;
                    $_SESSION['Imagen'] = $carpeta.$row['imagen'];
                    $_SESSION['Precio'] = $row['Precio'];
                    $query = "Select id, Descripcion from producto where Nombre = '$nombre'";
                    $consulta = mysqli_query($conn, $query);
                    $x = mysqli_fetch_assoc($consulta);
                    $_SESSION['ID'] = $x["id"];
                    $_SESSION['Descripcion'] = $x["Descripcion"];
                    
                
                }?>
                
  </div>
</div>
            </div> <!--Fin de la columna -->
            
        <?php $contador++;
    } ##fin del wile ?>
    </div>
<?php }#fin del for?>
</div>
<?php include("includes/footer.php") ?>