<?php include("includes/header.php") ?>

<div class="container-fluid">

    <!-- formulario de inicio de sesión -->
    <form action="login.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

<?php include("includes/footer.php") ?>