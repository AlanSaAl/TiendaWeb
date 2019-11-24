<?php include("includes/header.php") ?>
<hr />

<body style="background: black;">

    <!--Slider-->
    <div class="Slider">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slider4.jpg" width="600" height="640" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Diseños originales</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slider2.jpg" width="600" height="640" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Taxco De Alarcón Guerrero</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slider3.jpg" width="600" height="640" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SilverTaxco is an online silver store, 100% Mexican. We have a wide range of high quality products, we provide a simple shopping experience, fast delivery times and the best customer service.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slider1.jpg" width="600" height="850" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SilverTaxco</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!--Fin Slider-->


    <!--Carrusel-->

    <!--Texto plata .95-->
    <section class="p-3 mb-2 bg-white text-dark">

        <p class="mt-4 pt-3 text-center">Plata .925</p>

        <p class="mt-2 pt-3 text-center"> La plata 925 es un símbolo que utilizan los artesanos para determinar el grado de pureza incluido en una pieza. Ofrecemos 100% de plata mexicana de Taxco de Alarcón con .925, 92.5% de plata pura y 7.5%
            de cobre, asegurando su pureza y durabilidad.</p>
    </section>

    <!--Slider dos --->
    <hr />
    <div class="carousel slide  dark" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/slider21.jpg" width="630" height="630" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slider22.jpg" width="900" height="630" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slider23.jpg" width="630" height="630" class="rounded mx-auto d-block" alt="...">
            </div>
        </div>
    </div>
    <hr />

    <!--Politica de envio-->
    <section class="p-4 mb-6  text-white">
        <img src="assets/corazon.jpg" width="400" height="400" class="rounded-circle mx-auto d-block" alt="">
        <p class="mt-4 pt-4 text-center">
            <font size=10> Politica de envios</font>
        </p>

        <p class="mt-4 pt-4 text-center">
            <font size=10>¡Envío gratis!</font>
        </p>

    </section>

    <!--Contacto -->
    <div class="container p-4 bg-dark">
        <div class="row ">
            <div class="col-md-4 dark">
                <p class="mt-4 pt-4 text-center text-white">
                    <font size=6>Contact With Us.</font>
                </p>
                <p class="text-center text-white">
                    silvertaxco925@gmail.com
                </p>
                <p class="text-center text-white">
                    <font size=2>7621000459</font>
                </p>

                <div class="card card-body dark">
                    <form action="guardar.php" class="dark" method="POST" name="formulario">
                        <div class="form-group dark">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <input type="text" name="correo" class="form-control" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <input type="text" name="asunto" class="form-control" placeholder="Issue">
                        </div>

                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <input style="WIDTH: 300px; HEIGHT: 98px" type="text" name="mensaje" class="form-control" placeholder="Message">
                            <input style="WIDTH: 245px; HEIGHT: 98px" type="text" name="mensaje" class="form-control" placeholder="Message">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Send">
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <img src="assets/iglesia.jpg" alt="Responsive image">
            </div>
        </div>
    </div>

    <!---Mapa google maps -->
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-md-12">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28693.712844570506!2d-99.62543818483933!3d18.55440426850361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cc4b377661ee51%3A0x2adc9f36ea4aeb99!2sDe%20Los%20Plateros%2027%2C%20Barrio%20de%20Pedro%20Martin%2C%2040290%20Taxco%2C%20Gro.!5e0!3m2!1ses!2smx!4v1573184194638!5m2!1ses!2smx" width="1100" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
    <hr />    
    <hr>

<?php include("includes/footer.php") ?>