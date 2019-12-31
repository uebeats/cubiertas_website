<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <?php include 'head.php'; ?>
    <style>
        .col-xs-5,

        .col-sm-5,

        .col-md-5,

        .col-lg-5 {

            min-height: 1px;

            position: relative;

        }

        .col-xs-5 {

            float: left;

            width: 20%;

        }


        @media (min-width: 768px) {

            .col-sm-5 {

                float: left;

                width: 20%;

            }

        }

        @media (min-width: 992px) {

            .col-md-5 {

                float: left;

                width: 20%;

            }

        }

        @media (min-width: 1200px) {

            .col-lg-5 {

                float: left;

                width: 20%;

            }

        }
    </style>
</head>

<body>
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Desactivar Precarga</div>
        </div>

        <!-- header -->
        <?php include 'cabecera.php'; ?>

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="imagenes/img_nosf.jpg">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Nosotros</h2>
                                <ol class="breadcrumb text-center text-black mt-10">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Empresa</a></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section: Blog -->
            <section>
                <div class="container mt-30 mb-30 pt-30 pb-30">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-posts single-post border-bottom-0">
                                <article class="post clearfix mb-0">
                                    <div class="entry-header">
                                        <div class="owl-carousel-1col" data-nav="true" style="height: 450px">
                                            <div class="item"><img src="imagenes/img_nos.jpg" alt=""></div>
                                            <div class="item"><img src="imagenes/img_nos2.jpg" alt=""></div>
                                        </div>
                                    </div>

                                </article>

                                <div class="section-title text-center mb-0">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h2 class="text-uppercase mt-0 line-height-1">
                                                Conoce más de <span class="text-theme-colored">Cubiertas Nacionales</span> </h2>
                                            <p>Empresa con nacimiento desde 1986, Fundada por Carlos Nuñez.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-content mt-4">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-6">
                                            <p class="mt-15">Desde 1986 que estamos trabajando e innovando para ser parte importante en el logro de sus proyectos. Con el paso del tiempo hemos seguido desarrollando nuevos productos e invirtiendo en tecnología la que nos ha permitido destacar y abrir nuevos mercados, siempre logrando los más exigentes estándares de calidad. Seguiremos en esta dirección porque tenemos la certeza que la innovación nos permitirá alcanzar nuevas y mejores alternativas.</p>
                                            <p>Contamos con 3 plantas productivas en Santiago en la Comuna de Lampa y una planta en Coronel Concepción.</p>

                                        </div>

                                        <div class="col-md-6 mt-20 mb-40 hidden-sm">
                                            <div class="box-hover-effect play-button">
                                                <div class="effect-wrapper">
                                                    <div class="thumb">
                                                        <img class="img-fullwidth" src="imagenes/video_cap.jpg" alt="project">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <div class="box-hover-effect effect-barlin mb-xs-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="imagenes/placeholder-img.png" alt="project">
                                        <div class="overlay-shade bg-theme-colored-transparent-8"></div>
                                    </div>
                                    <div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">
                                        <img src="images/flaticons/2.png">
                                        <h3>Planta 1 - Lampa</h3>
                                        <p>Esta dedicada a la fabricación de paneles con Aislación para cubiertas y revestimientos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <div class="box-hover-effect effect-barlin mb-xs-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="imagenes/placeholder-img.png" alt="project">
                                        <div class="overlay-shade bg-theme-colored-transparent-8"></div>
                                    </div>
                                    <div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">
                                        <img src="images/flaticons/2.png">
                                        <h3>Planta 2 - Lampa</h3>
                                        <p>Esta dedicada a la fabricación de paneles Simples para cubiertas y revestimientos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <div class="box-hover-effect effect-barlin mb-xs-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="imagenes/placeholder-img.png" alt="project">
                                        <div class="overlay-shade bg-theme-colored-transparent-8"></div>
                                    </div>
                                    <div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">
                                        <img src="images/flaticons/2.png">
                                        <h3>Planta 3 - Lampa</h3>
                                        <p>Esta dedicada a la fabricación de aislante de poliestireno expandido.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <div class="box-hover-effect effect-barlin mb-xs-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="imagenes/placeholder-img.png" alt="project">
                                        <div class="overlay-shade bg-theme-colored-transparent-8"></div>
                                    </div>
                                    <div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">
                                        <img src="images/flaticons/2.png">
                                        <h3>Planta en Coronel - Concepción</h3>
                                        <p>Planta inaugurada el año 2017, Con una superficie de 12.000 m2, siendo la primera planta de este segmento marcando un hito en la compañía.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <div class="box-hover-effect effect-barlin mb-xs-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="imagenes/placeholder-img.png" alt="project">
                                        <div class="overlay-shade bg-theme-colored-transparent-8"></div>
                                    </div>
                                    <div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">
                                        <img src="images/flaticons/2.png">
                                        <h3>Planta Egaña - Santiago</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium dolorem quis dignissimos et similique.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <!-- Footer -->
        <?php include 'pie.php'; ?>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>

</body>

</html>