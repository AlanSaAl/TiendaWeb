<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>


      <div class="card card-body">
        <form action="guardar.php" method="POST" enctype="multipart/form-data" name="inscripcion">
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre del articulo" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="Precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
            <textarea type="text" name="Descripcion" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="Categoria" class="form-control" placeholder="Categoria" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="Cantidad" class="form-control" placeholder="Cantidad" autofocus>
          </div>
          <div>
            <input type="file" name="archivo"   class="btn btn-success btn-block" value="Imagen">
          </div>
          <hr>
          <input type="submit" name="Subir" class="btn btn-success btn-block" value="Subir al inventario">
        </form>
      </div>


    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);
          if(isset($result_tasks)){
          while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['created_at']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } 
            } #fin del if
          ?>


        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>