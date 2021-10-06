<!DOCTYPE html>
<html lang="en">
<?php

require 'template/header.php';
?>
<body id="page-top">
    <!-- Navigation-->
    <?php
    require 'template/navbar.php';
    ?>
    <!-- About-->
    <!-- Portfolio-->
    <main>
       
        <div class="container-fluid" style="margin-top: 100px;">
            <!--Grid row-->
            <div class="row" style="margin-top: -100px;">
                <!--Grid column-->
                <div class="col-md-12 px-lg-5">
                    <!--Card-->
                    <div class="card pb-5 mx-md-3">
                        <div class="card-body">
                            <div class="container">
                                <div class="row pt-lg-5 pt-3">
                                    <div class="col-md-12 col-xl-12">
                                        <form>
                                            <!-- About-->
                                            <?php
                                            require 'template/about.php';
                                            ?>
                                            <!-- Services-->
                                            <?php
                                            require 'template/services.php';
                                            ?>
                                            <!--Carousel Wrapper-->
                                            <div class=" page-section" id="experiencia">
                                                <h2 class="font-weight-bold mt-5 mb-5 text-center">
                                                    <strong> Experiencia </strong>
                                                    <hr class="divider my-4" />
                                                </h2>
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="assets/img/portfolio/thumbnails/1.jpg" alt="Los Angeles">
                                                            <div class="carousel-caption">
                                                                <h3>Laravel / Php</h3>
                                                                <p> <a href="laravel.php">Read more 👉</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="assets/img/portfolio/thumbnails/2.jpg" alt="Chicago">
                                                            <div class="carousel-caption">
                                                                <h3> .NET </h3>
                                                                <p> <a href="net.php">Read more 👉</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="assets/img/portfolio/thumbnails/4.jpg" alt="New York">
                                                            <div class="carousel-caption">
                                                                <h3> Java </h3>
                                                                <p> <a href="java.php">Read more 👉</a> </p>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <img src="assets/img/portfolio/thumbnails/5.jpg" alt="New York">
                                                            <div class="carousel-caption">
                                                                <h3> Gestión proyectos</h3>
                                                                <p> <a href="proyectos.php">Read more 👉</a> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Left and right controls -->
                                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Carousel Wrapper-->
                                            </section>
                                            <!--/.Posts-->
                                    </div>
                                    <!--/Grid column-->
                                </div>
                                <!--/Grid row-->
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </div>
                    <!--/Card-->
                </div>
                <!--/Grid column-->
            </div>
            <!--/Grid row-->
        </div>
    </main>
    <!-- Call to action-->
    <!-- Contact-->
    <br>
    <?php
    require 'template/contact.php';
    ?>
    <!-- Footer-->
    <br>
    <?php
    require 'template/footer.php';
    ?>
</body>
</html>