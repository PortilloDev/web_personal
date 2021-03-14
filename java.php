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

        <div class="container-fluid mb-5">

            <!--Grid row-->
            <div class="row" style="margin-top: -100px;">

                <!--Grid column-->
                <div class="col-md-12 px-lg-5">
                    <h1 class="font-weight-bold mt-5 mb-5 text-center" style="color: orange;">
                        <strong>Java</strong>
                    </h1>
                    <!--Card-->
                    <div class="card pb-5 mx-md-3">
                        <div class="card-body">

                            <div class="container">

                                <div class="row pt-lg-5 pt-3">

                                    <div class="col-md-12 col-xl-12">

                                        <div class=" page-section" id="experiencia">
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;"> ⌨️ Debido a temas académicos y porque me gustar conocer y aprender otro tipos de lenguajes, Java es una lenguaje que he ido aprendiendo con el tiempo y usando en momentos puntuales de mi día a día laboral. </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;"> 🚀 Uno de los proyectos más complejos que he podido desarrollar recientemente, ha sido para la facultad. La práctica era crear un programa que resolviera de forma automática la parte de Cifras del concurso “Cifras y Letras”. Concretamente el programa recibe una serie de letras y nos devuelve todas las palabras válidas que se puedan construir con ellas.
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;">
                                                🎓 La base de este proyecto, era trabajar en el manejo de estructura de datos mediante el uso en este caso de árboles generales para recorrer todas las palabras del diccionario, y listas para ir guardando los resultados obtenidos. Además de otro tipos estructuras. Pero también debíamos tener en cuenta la optimización y el coste del algoritmo que estábamos desarrollando, he intentar encontrar el menor coste posible.
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;">
                                                Para finalizar, al programa se le pasaba un batería de pruebas con las restricciones que habían programado los profesores, para así validar que el desarrollo cumplía las especificaciones dadas. En este caso la nota final del proyecto fue de un <strong> 8️⃣ </strong>.
                                                👉 <a href="https://github.com/PortilloDev/cifras-y-letras-en-java" target="_blank"> Projecto </a>
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;">
                                                También he realizado algún pequeño proyecto personal en web, para la creación de una API con Swagger. Del que llegue a crear una imagen en Docker.
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;">
                                                👉 <a href="https://github.com/PortilloDev/api-project-java" target="_blank"> Código </a>
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;">
                                                👉 <a href="https://hub.docker.com/r/iportillo/e-reservation" target="_blank"> Imagen</a>
                                            </p>
                                            <br>
                                            <br>
                                            <p class="text-black mb-4 font-weight-light mb-2 " style="text-align: center;" style="text-align: center;">
                                                💻 Tecnologías
                                            </p>
                                            <p class="text-black mb-4 font-weight-light mb-2" style="text-align: center;" style="text-align: center;">
                                                Eclipse, Estructuras de datos, Maven, Spring, hibernate, Swagger, Docker, OmniDB, Postgresql, Tomcat
                                            </p>
                                        </div>

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

                </div>

            </div>
        </div>
    </main>
    <!-- Call to action-->

    <!-- Contact-->
    <?php

    require 'template/contact.php';
    ?>
    <!-- Footer-->
    <?php

    require 'template/footer.php';
    ?>
</body>

</html>