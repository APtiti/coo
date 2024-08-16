<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Biancaflor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">Bianca</span>Flor</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="nosotros.html" class="nav-item nav-link">Nosotros</a>
                    <a href="producto.html" class="nav-item nav-link">Productos</a>
                    <a href="contactato.html" class="nav-item nav-link">Contactenos</a>
                    <a href="{{ route('login.index') }}" class="nav-item nav-link">Iniciar Sesión</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/pt3.png" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">La Fabrica de BiancaFlor</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Postres</h3>
                            <p class="mx-md-5 px-5">"La Fábrica de BiancaFlor es el centro de producción donde podes vivir la experiencia de poder ver cómo elaboran todos los productos de la marca."</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/pt4.png" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">La Fabrica de BiancaFlor</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Postres</h3>
                            <p class="mx-md-5 px-5">"La Fábrica de BiancaFlor es el centro de producción donde podes vivir la experiencia de poder ver cómo elaboran todos los productos de la marca."</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/pt5.png" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">La Fabrica de BiancaFlor</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Postres</h3>
                            <p class="mx-md-5 px-5">"La Fábrica de BiancaFlor es el centro de producción donde podes vivir la experiencia de poder ver cómo elaboran todos los productos de la marca."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/pt6.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Sobre Nosotros</h6>
                    <h1 class="mb-4">¡No esperes más para disfrutar de lo mejor con Biancaflor!</h1>
                    <p class="pl-4 border-left border-primary">BiancaFlor es la empresa pionera de Brownies en Bolivia, apostando desde enero del 2019 cada mes con sabores innovadores nunca antes vistos en el mercado. Nos esforzamos día a día en traer dulzura, calidad y creatividad para todos ustedes. Gracias a todos los que creyeron en nosotros y en todo el esfuerzo entrega y dedicación qué hay detrás de todo esto. Tenemos más de 15 sabores y seguiremos sorprendiéndote SIEMPRE.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">1000</h3>
                                <h6 class="text-uppercase">Clientes felices</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h1>Nuestros Productos</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt1.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt2.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt1.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt2.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt1.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/pt2.png" alt="">
                <div class="service-text text-center">
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

<!--hola-->
<div class="row justify-content-center bg-appointment mx-0">
    <div class="col-lg-6 py-5">
        <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
            <h1 class="text-white text-center mb-4">Contactenos</h1>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="form-row">
                    <div class="col-sm-6 control-group">
                        <input type="text" class="form-control border-0 p-4" id="name" placeholder="Nombre"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-sm-6 control-group">
                        <input type="email" class="form-control border-0 p-4" id="email" placeholder="Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Mensaje"
                        required="required"
                        data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Enviar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<!--holap-->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-70" src="img/pt28.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Comentarios</h6>
                    <h1 class="mb-4">Lo que dicen nuestros clientes!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Cliente</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Son una delicia ya fui a aprobarlos😋.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Cliente</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Necesito sucursal en Tarija 🤧 son una deliciaa cada que voy a santa cruz no puedo dejar de visitar la Fábrica de BiancaFlor 🥰</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Cliente</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Ella tiene lo mejor me encanta BiancaFlor todo es muy delicioso 😋 ❤️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark py-6" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <img class="w-100" src="img/icon.png" alt="Image">
                    </a>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <p>La Fábrica de BiancaFlor es el centro de producción donde podes vivir la experiencia de poder ver cómo elaboran todos los productos de la marca</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Santa Cruz de la Sierra, Bolivia</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+591 69161061</p>
                    <p><i class="fa fa-envelope mr-2"></i>lafabricadebiancaflor@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy;BiancaFlor</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0 text-white">Designed by <a>Adriana Pitigas</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>