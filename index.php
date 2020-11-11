<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Alexander Minaya RV</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="author" content="Alexander Minaya RV">
    <meta name="description" content="Esta página web hace referente a mí, donde muestro mis conocimientos en las áreas de Sistemas, Informática y Marketing Digital, ofreciendo siempre mi mayor esfuerzo y atención para los requerimientos que pueda tener profesionales que necesiten que su negocio pueda tornarse al mundo digital.">
    <meta name="keywords" content="marketing digital,administrador de base de datos,base de datos, ingeniero de sistemas, ingeniero informático, redes sociales, sql">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- Favicons -->
    <link href="img/icono1.png" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto" style="font-family:Comic Sans MS">The programmer Dalex</a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Acerca de mí</a></li>
                    <li><a href="#portfolio">Certificaciones</a></li>
                    <li><a href="#testimonials">Testimonios</a></li>
                    <li><a href="#footer">Contáctame</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="img/foto1.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Hola! Mi nombre es Alexander</h2>
                                <p>La Ingeniería nos ayuda a ver la vida más simple en el mundo digital.</p>
                                <a href="#about" class="btn-get-started scrollto">Empezar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/foto2.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Certificaciones</h2>
                                <p>Es muy importante capacitarse en cursos de tu interés para así aplicarlos en el mundo
                                    laboral.</p>
                                <a href="#portfolio" class="btn-get-started scrollto">Empezar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/foto3.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Testimonios</h2>
                                <p>Los testimonios de personas que han estado a mi alrededor muestran su forma de
                                    expresarse.</p>
                                <a href="#testimonials" class="btn-get-started scrollto">Empezar</a>
                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container" style="color:#fff;background-color: #000000;">

                <header class="section-header">
                    <h3 style="color:#fff">Acerca de mí</h3>
                    <p style="color:#fff">Estudiante de Ingeniería de Sistemas e Informática de la UTP, con experiencia
                        en marketing digital y preparado para afrontar retos en las áreas de la ingeniería dando lo
                        mejor de mí en cualquier actividad que desarrolle, además soy alumno becado y destacado en estos
                        programas como: Php, Html, Sql Server, MySql, Visual Basic, C++ y Java.
                    </p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/intro-carousel/1.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 style="color:#fff;" class="title">Conocimiento y habilidades</h2>
                            <p style="color:#fff">
                                ✔ Informática: Lenguajes de Programación, Inglés, Ofimática y Seguridad <br>
                                ✔ Interpersonales: Capacidad de analizar y comprender la información que requieran <br>
                                ✔ Organizativas: Adaptación y Planificación <br>
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/intro-carousel/2.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title" style="color:#fff;">¿Qué hago?</h2>
                            <p style="color:#fff">
                                Me capacito constantemente para adquirir nuevos conocimientos en Marketing Digital en
                                las redes
                                sociales, Lenguajes de Programación y Gestores de base de datos para aplicarlos en el
                                mundo laboral.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/intro-carousel/3.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-alarm-outline"></i></div>
                            </div>
                            <h2 class="title" style="color:#fff;">¿Qué me hace diferente?</h2>
                            <p style="color:#fff">
                                ✔ Persistente <br>
                                ✔ Proactivo <br>
                                ✔ Puntual <br>
                                ✔ Responsable <br>
                                ✔ Trabajo en Equipo<br>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #about -->

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg" style="background-color: #212121;">
            <div class="container">

                <header class="section-header">
                    <h3 style="color:#fff" class="section-title">Certificaciones</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todo</li>
                            <li data-filter=".filter-sistemas">Sistemas</li>
                            <li data-filter=".filter-informatica">Informática</li>
                            <li data-filter=".filter-marketing">Marketing</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Administrador de base de datos.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Administrador de base de datos.jpg"
                                    data-lightbox="portfolio" data-title="sistemas" class="link-preview"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Administración en BD</h4>
                                <p>Sistemas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Analiza tus campañas en Facebook.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Analiza tus campañas en Facebook.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Analiza tus campañas en FB</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Branding y Estrategia de Marca.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Branding y Estrategia de Marca.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Branding de Marca</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Community Management.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Community Management.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Community Management</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Creatividad Digital.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Creatividad Digital.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Creatividad Digital</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Design Thinking Marketing Digital.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Design Thinking Marketing Digital.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Design Thinking</h4>
                                <p>Marketing Digital</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-informatica wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Workshop de Diseño de Sitios Web.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Workshop de Diseño de Sitios Web.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="informatica"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Diseño de Sitios Web</h4>
                                <p>Informática
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Experiencia del Cliente.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Experiencia del Cliente.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Experiencia del Cliente</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Facebook ADS.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Facebook ADS.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Facebook ADS</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Conoce cómo te ayuda la geolocalización y el celular en tus ventas.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Conoce cómo te ayuda la geolocalización y el celular en tus ventas.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Geolocalización</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Administración y Gestión en Base de Datos SQL.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Administración y Gestión en Base de Datos SQL.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="sistemas"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Gestión en BD</h4>
                                <p>Sistemas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en LinkedIn.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en LinkedIn.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">LinkedIn</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Modelamiento de Base de Datos y SQL.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Modelamiento de Base de Datos y SQL.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="sistemas"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Modelamiento de BD</h4>
                                <p>Sistemas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Potencia tu marca personal o empresarial en linkedIn.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Potencia tu marca personal o empresarial en linkedIn.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Marca personal en LinkedIn</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Método Harvard de Negociación.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Método Harvard de Negociación.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Método Harvad de Negocios</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Aprende a negociar con tu cliente.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Aprende a negociar con tu cliente.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Negocia con tu cliente</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Potencia tu negocio a través de Facebook Messenger.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Potencia tu negocio a través de Facebook Messenger.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Potencia tu negocio</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Tips para promocionar tu negocio.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Tips para promocionar tu negocio.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Promocionar tu negocio</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Social Media Marketing.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Social Media Marketing.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Social Media Marketing</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Social Paid Media.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Social Paid Media.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="marketing" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Social Paid Media</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Tablas Dinámicas.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Tablas Dinámicas.jpg" class="link-preview"
                                    data-lightbox="portfolio" data-title="sistemas" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Tablas Dinámicas</h4>
                                <p>Sistemas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Transmedia Storytelling.jpg" class="img-fluid"
                                    alt="">
                                <a href="img/portfolio/Certificación en Transmedia Storytelling.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Transmedia Storytelling</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Cómo ejecutar una Transformación Digital.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Cómo ejecutar una Transformación Digital.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Transformación Digital</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-marketing wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Certificación en Transformación Digital-Retos y Tendencias.jpg"
                                    class="img-fluid" alt="">
                                <a href="img/portfolio/Certificación en Transformación Digital-Retos y Tendencias.jpg"
                                    class="link-preview" data-lightbox="portfolio" data-title="marketing"
                                    title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info" style="background: #000000;">
                                <h4 style="color:#fff;">Digital-Retos y Tendencias</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================
      Testimonials Section
    ============================-->
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3 style="color:#fff">Testimonios</h3>
                </header>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="img/testimonial-1.png" class="testimonial-img" alt="">
                        <h3>Martin Cerro</h3>
                        <h4>Capacitador en estrategias de LinkedIn</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Recomiendo profesionalmente a Alexander Minaya, por sus logros alcanzados en el
                            posicionamiento de la
                            Marca más importante de habla hispana "Yo aprendo LinkedIn con Martin", ha llevado a
                            conseguir cerrar
                            negociaciones con gerentes y CEO en Latinoamérica para realizar los entrenamientos de
                            negocios, también ha
                            logrado ayudar a muchas personas en la recolocación laboral; a la vez quiero recalcar sus
                            habilidades
                            destacadas que son: el pensamiento estratégico y la humanización de la marca. Estoy seguro
                            que Alexander
                            será un lider en el ámbito de la RRSS en Latinoamérica.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <!--
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.png" class="testimonial-img" alt="">
                        <h3>Dr. Leïla Kossou</h3>
                        <h4>Manager Market Intelligence</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Alexander es una persona generosa que se posiciona muy bien como multicultural, ya que tiene
                            la capacidad
                            de acercarse proactivamente a personas de diferentes orígenes culturales con curiosidad. Es
                            importante
                            mencionar que Alexander muestra cualidades de liderazgo en sus actividades y se mueve muy
                            bien fuera de su
                            zona de confort. El rigor, la inspiración y la empatía necesarios para el liderazgo superior
                            están tan
                            equilibrados en la personalidad de Alexander que tiene un gran potencial de desarrollo en el
                            área de
                            "liderar a otros empleados" para su futura carrera.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div> -->

                    <div class="testimonial-item">
                        <img src="img/testimonial-2.png" class="testimonial-img" alt="">
                        <h3>Giulliana Baca</h3>
                        <h4>Ejecutivo de ventas</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Recomiendo el trabajo de Alexander, es un profesional competente en lo relacionado al
                            Community Manager;
                            preparado y creativo, posee las herramientas necesarias para un trabajo de calidad.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/testimonial-3.png" class="testimonial-img" alt="">
                        <h3>Diego Navarro</h3>
                        <h4>IT Sales Consultant</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Alexander, un gran profesional con capacidad de identificar problemas y dar soluciones. Nos
                            cruzamos en la
                            universidad y compartimos experiencias en estrategias digitales. Su aporte en la elaboración
                            de flyers y
                            creación de contenido de impacto es muy bueno. Sobre todo, en redes sociales. Lo recomiendo.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- #testimonials -->

    </main>
    <!--==========================
    Footer
  ============================-->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">
        <div class="footer-top" style="background-color:#212121">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="footer-info">
                                    <h3 style="color:#fff">The programmer Dalex</h3>
                                    <p>Estudiante de Ingeniería de Sistemas e Informática en la Universidad Tecnológica
                                        del Perú. Tengo valores como: perseverancia, ya que cuando un problema ocurre en
                                        la empresa soy capaz de ver todas las soluciones posibles para resolver ese
                                        problema. Seguidamente, soy estratégico en el uso de las estrategias digitales
                                        para explotar la marca comercial de la empresa donde laboro.</p>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4><strong>Enlaces Útiles</strong></h4>
                                    <ul>
                                        <li><i class="ion-ios-arrow-right"
                                                style="padding:0px 8px 0px 0px;color:#fff;"></i><a href="#">Inicio</a>
                                        </li>
                                        <li><i class="ion-ios-arrow-right"
                                                style="padding:0px 8px 0px 0px;color:#fff;"></i><a href="#about">Acerca
                                                de mí</a></li>
                                        <li><i class="ion-ios-arrow-right"
                                                style="padding:0px 8px 0px 0px;color:#fff;"></i><a
                                                href="#portfolio">Certificaciones</a></li>
                                        <li><i class="ion-ios-arrow-right"
                                                style="padding:0px 8px 0px 0px;color:#fff;"></i><a
                                                href="#testimonials">Testimonios</a></li>
                                    </ul>
                                </div>

                                <div class="footer-links" style="color:#fff;">
                                    <h4><strong>Contáctame</strong></h4>
                                    <p>
                                        <strong>Ubicación:</strong> Lima, Perú <br><br>
                                        <strong>Celular:</strong> +51 955237638<br><br>
                                        <strong>Email:</strong> minaya0209@hotmail.com<br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <!--<a href="" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>-->
                                    <a href="https://www.facebook.com/alexander.minaya.75/" class="facebook"
                                        target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/dalexminaya/" class="instagram"
                                        target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/alexanderminayarosasdelavega/"
                                        class="linkedin"><i class="fa fa-linkedin" target="_blank"></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form">

                            <h4><strong>Envíame un mensaje</strong></h4>

                            <form action="insert_mensaje.php" method="post" role="form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="nombre" pattern="[A-Za-z]+" class="form-control"
                                            id="nombre" placeholder="Escribe tu nombre"
                                            title="Solo se ingresan letras, por favor" required />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Escribe tu Email" title="Ingrese bien su email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="5"
                                        data-rule="required" data-msg="Ingrese un mensaje"
                                        placeholder="Escribe un mensaje" required></textarea>
                                </div>
                                <div class="text-center"> <button class="btn" type="submit" name="guardar_mensaje">
                                        Enviar Mensaje
                                    </button>
                                </div>
                                <style>
                                .btn {
                                    color: #fff !important;
                                    font-size: 15px;
                                    font-weight: 500;
                                    padding: 0.5em 1.2em;
                                    background: #E99002;
                                    border: 2px solid;
                                    border-color: #E99002;
                                    transition: all 1s ease;
                                    position: relative;
                                    border-radius: 5px;
                                    width: 150px;
                                    height: 50px;
                                }

                                .btn:hover {
                                    background: #000;
                                    color: #fff !important;
                                }
                                </style>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>The programmer Dalex</strong>
            </div>
            <div class="credits">
                Diseñador por <a href="#intro">Alexander Minaya</a>
            </div>
        </div>
    </footer><!-- End  Footer -->


    <a href="#intro" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader 
     <div id="preloader"></div> -->
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>