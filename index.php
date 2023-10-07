<?php

function url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
  }
  
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="FacturaWeb">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturación Electrónica SUNAT - FacturaWeb.pe</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="canonical" href="https://facturaweb.pe">
    <meta name="description" content="Sistema de Facturación Electrónica en Perú, donde podrás emitir factura electrónica y todos los comprobantes electrónicos autorizados por SUNAT.">
    <meta property="og:title" content="FacturaWeb.pe - Facturación Electrónica"/>
    <meta property="og:description" content="Sistema de Facturación Electrónica en Perú, donde podrás emitir factura electrónica y todos los comprobantes electrónicos autorizados por SUNAT."/>
    <meta property="og:url" content="https://facturaweb.pe" />
    <meta property="og:image" content="https://facturaweb.pe/opengraph.png">
    <meta name="twitter:title" content="FacturaWeb.pe - Facturación Electrónica"">
    <meta name="twitter:description" content="Sistema de Facturación Electrónica en Perú, donde podrás emitir factura electrónica y todos los comprobantes electrónicos autorizados por SUNAT."/>
    <meta name="twitter:card" content="https://facturaweb.pe/opengraph.png">
    <meta name="twitter:image" content="https://facturaweb.pe/opengraph.png">
    <!-- favicon CSS -->
    <!--<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png" />
    <!-- fonts -->
    <link href="fonts/sfuidisplay.css" rel="stylesheet">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/app.css">
    <!-- Your CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CC13PL86WG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CC13PL86WG');
    </script>

</head>

<body class="theme-gradient-7" data-spy="scroll" data-target="#navbar-nav" data-animation="false" data-appearance="light">

    <!-- =========== Start of Loader ============ -->
    <div class="preloader">
        <div class="wrapper">
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <div>
                <div class="loader-canvas canvas-left"></div>
                <div class="loader-canvas canvas-right"></div>
            </div>
        </div>
    </div>
    <!-- =========== End of Loader ============ -->

    <main class="main">
        <!-- =========== Start of Navigation (main menu) ============ -->
        <header class="navbar navbar-sticky sticky-bg-color--primary navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="<?php echo url(); ?>">
                    <img class="navbar-brand__regular" src="img/brand-logo-white.png" alt="brand-logo">
                    <img class="navbar-brand__sticky" src="img/brand-logo-white.png" alt="sticky brand-logo">
                </a>
                <!--  End of brand logo -->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- end of Nav toggler -->

                <div class="navbar-inner">
                    <!--  Nav close button inside off-canvas/ mobile menu -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- end of Nav Toggoler -->
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#beneficios">Beneficios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pasos">¿Cómo empiezo a facturar?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
                            </li>
                            <!--s<li class="nav-item">
                                <a class="nav-link" href="https://api.whatsapp.com/send?phone=51991615821&text=Hola,%20me%20interesa%20el%20servicio%20de%20facturación">WhatsApp</a>
                            </li>-->
                        </ul>
                        <!-- end of nav menu items -->
                    </nav>
                </div>
                <div class="d-flex align-items-center ml-lg-1 ml-xl-2 mr-5 mr-sm-6 m-lg-0 align-items-center">
                    <!--<div class="input-group d-flex">
                    <button class="btn btn-size--sm btn-hover--3d btn-bg--cta--5" type="submit"><span
                        class="btn__text">Solicita la demo</span></button>
                    </div>-->
                    <div class="pl-1 pl-md-0">
                        <a href="https://api.whatsapp.com/send?phone=51991615821&text=Hola,%20me%20interesa%20el%20servicio%20de%20facturación" class="btn btn-size--sm btn-border btn-bg--cta--5 btn-hover--3d d-md-inline-flex">
                            <span class="btn__text font-w--500">Solicita la demo por WhatsApp</span>
                        </a>
                    </div>
                </div>
                <!-- end of nav CTA button -->
            </div>
            <!-- end of container -->
        </header>
        <!-- =========== End of Navigation (main menu)  ============ -->

        <!-- =========== Start of Hero ============ -->
        <section class="hero hero--full hero--v12 d-flex align-items-center">
            <div class="background-holder background--cover z-index1">
                <img src="img/hero-12.png" alt="image" class="background-image-holder">
            </div>
            <!-- end of backgound image -->
            <div class="background-holder bg-color--primary"></div>
            <!-- end of overlay backgound color-->
            <div class="svg-shape w-100 z-index2">
                <img src="img/layout/wave-14.svg" alt="wave" class="svg">
            </div>
            <!-- end of bottom svg shape -->

            <div class="container mb-10">
                <div class="row flex-column-reverse flex-lg-row align-items-center mb-10 mb-lg-5 switchable switchable--reverse">
                    <div class="col-12 col-md-10 col-lg-7 mx-auto mx-lg-0 text-center text-lg-left z-index3">
                        <div class="hero-content reveal">
                            <h1 class="hero__title color--white h2-font font-w--700 mb-2">Faturación Electrónica <br> para tu negocio</h1>
                            <p class="hero__description color--white opacity--80 font-size--18 mb-4 mb-lg-5">Con FacturaWeb podrás emitir facturas y otros comprobantes de pago electrónicos de forma rápida, fácil y segura que te exige la SUNAT-Perú desde cualquier parte del mundo. Además podrás administrar los precios de tus productos.</p>
                            <!-- end of text content -->
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-12 col-lg-5 pt-6 pt-lg-1 hero__image z-index3 reveal text-sm-center">
                        <picture><img src="img/166.png" alt="hero-image" class="img-fluid"></picture>
                    </div>
                    <!--<div class="col-12 col-lg-4 smb-40 mb-lg-0 text-sm-center mb-1 reveal">
                    <span class="switchable__image">
                        <img class="imsg-fluid" src="img/166.png" alt="device">
                    </span>-->
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
        </section>
        <!-- =========== End of Hero ============ -->

        <!-- =========== Start of Core Feautes ============ -->
        <section class="pt-5 pt-xl-0 z-index3 jsElement" data-pull="-200" id="beneficios">
            <div class="container">
                <div class="bg-white box-shadow--5 rounded--10 text-center pt-6 pb-2 px-3 px-sm-5 px-md-3 pt-lg-7 pb-lg-3 px-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-lg-10 mb-4 mb-lg-4 mx-auto text-center reveal">
                            <h2 class="mb-2 h3-font font-w--700"><span class="text-color--cta--5">Beneficios</span> del sistema FacturaWeb</h2>
                            <!--<a href="#" class="btn btn-size--md btn-bg--cta--5 btn-hover--3d"><span class="btn__text">Create Account</span></a>-->
                        </div>
                    </div>
                    <div class="row justify-content-between border--bottom mb-3 pb-lg-1 text-lg-left">
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2">
                                <img src="img/exchange-01.svg" alt="exchange-icon">
                            </span>
                            <h3 class="h5-font font-w--500 mb-1">Protección de datos</h3>
                            <p>Tus comprobantes electrónicos emitidos se encontrarán garantizados y asegurados.
                            </p>
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2">
                                <img src="img/exchange-02.svg" alt="exchange-icon">
                            </span>
                            <h3 class="h5-font font-w--500 mb-1">Precios accesibles</h3>
                            <p>Elige los cómodos pagos mensuales o pago anual con descuentos.
                            </p>
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2">
                                <img src="img/exchange-03.svg" alt="exchange-icon">
                            </span>
                            <h3 class="h5-font font-w--500 mb-1">Personaliza tus comprobantes</h3>
                            <p>Emite tus comprobantes electrónicos con el logotipo y colores de tu empresa.
                            </p>
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2">
                                <img src="img/exchange-04.svg" alt="exchange-icon">
                            </span>
                            <h3 class="h5-font font-w--500 mb-1">Garantía y soporte técnico incluido</h3>
                            <p>Soporte técnico disponible y actualizaciones de versiones de nuestros productos.</p>
                        </div>
                        <!-- end of single item col -->
                    </div>
                    <!-- end of features row -->
                    <div class="row justify-content-between reveal">
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">500+</span>
                            <p>Clientes satisfechos</p>
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">10,000+</span>
                            <p>comprobantes emitidos</p>
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">2,500+ </span>
                            <p>Horas de soporte</p>
                        </div>
                        <!-- end of single item col -->
                    </div>
                    <!-- end of facts row -->
                </div>
            </div>
        </section>
        <!-- =========== End of Core Feautes ============ -->

        <!-- =========== Start of Steps ============ -->
        <section class="space steps--v1 pt-10 bg-color--primary jsElement" data-pull="-100" id="pasos">
            <div class="container">
                <div class="row space--top">
                    <div class="col-12 col-md-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0 reveal">
                        <div>
                            <h2 class="h3-font font-w--700 mb-2">Empieza a facturar con estos simples pasos</h2>
                            <p class="opacity--60">Emite comprobantes electrónicos con nuestro sistema en línea de forma inmediata. Deberás brindarnos tu clave SOL de la SUNAT para registrarte.</p>
                        </div>
                        <div class="ml-lg-10 d-none d-md-inline-block">
                            <img src="img/layout/steps-arrow.svg" alt="arrow" class="svg svg-shape--default opacity--10">
                        </div>
                    </div>
                    <!-- end of section title -->
                    <div class="col-12 col-md-7 col-xl-6 offset-xl-1 pr-sm-6 pr-md-0 remove-space--bottom steps-wrapper">
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="img/exchange-05.svg" alt="icon">
                                </span>
                            </div>
                            <!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">Crear una cuenta</h3>
                                <p class="opacity--80"><a href="#" class="text-color--cta--5">Registra el RUC</a> de tu negocio, sin instalar nada. Si ya te registraste ingresa aquí <a href="http://app.facturaweb.pe/" class="text-color--cta--5">Inicia sesión</a>.</p>
                            </div>
                            <!-- end of content -->
                        </div>
                        <!-- end of single step -->
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="img/exchange-06.svg" alt="icon">
                                </span>
                            </div>
                            <!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">Personaliza tu comprobante</h3>
                                <p class="opacity--80">Sube el logo de tu negocio para que aparezca en tus comprobantes.</p>
                            </div>
                            <!-- end of content -->
                        </div>
                        <!-- end of single step -->
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="img/exchange-07.svg" alt="icon">
                                </span>
                            </div>
                            <!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">¡Emite tu comprobante!</h3>
                                <p class="opacity--80">Ya puedes emitir tus comprobantes de pago a la SUNAT validando el envío de forma rápida y segura. Generando reportes para tu negocio.</p>
                            </div>
                            <!-- end of content -->
                        </div>
                        <!-- end of single step -->
                    </div>

                </div>
            </div>
        </section>
        <!-- =========== End of Steps ============ -->

        <!-- =========== Start of Benefits and CTA ============ -->
        <section class="space steps--v1 pt-10 bg-color--primary-light--1" id="funcionalidades">
            <!-- end of benefits area -->
            <div class="switchable pt-4 d-lg-flex align-items-md-center">
                <div class="col-12 col-lg-6 mb-40 mb-lg-0 text-center mb-3 reveal">
                    <picture class="switchable__image">
                        <img src="img/device-mockup.webp" alt="image" class="img-fluid">
                    </picture>
                </div>
                <!-- end of device image -->
                <div class="switchable__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ml-md-auto">
                                <div class="mb-4 text-center text-lg-left reveal">
                                    <h2 class="h3-font font-w--600 mb-1">Funcionalidades de nuestro sistema</h2>
                                    <!--<p class="h6-font">Login to the SpaceMax App and use ETH from your Eidoo wallet to buy INT tokens and get hardware rewards.</p>-->
                                </div>
                                <!-- end of title -->
                                <ul class="pl-2 mb-6 text-center text-lg-left reveal">
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Emite Factura, Boleta de Venta, Nota de crédito y Débito, Cotizaciones, Guía de Remisión, Detracciones</p>
                                    </li>
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Facturas electrónicas en formato XML y PDF</p>
                                    </li>
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Visualiza en tiempo real el estado de tus comprobantes en SUNAT</p>
                                    </li>
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Compatible con ticketeras y con impresoras en formato A4 y A5</p>
                                    </li>
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Envío de comprobantes por Email y Whatsapp</p>
                                    </li>
                                    <li class="text-color--300 mb-1 list-md-none">
                                        <p>Actualización permanente con los cambios normativos</p>
                                    </li>
                                </ul>
                                <!-- end of main content -->
                                <div class="button-group flex-column flex-sm-row align-items-center reveal">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <a href="https://api.whatsapp.com/send?phone=51991615821&text=Hola,%20me%20interesa%20el%20servicio%20de%20facturación" class="btn btn-border btn-border--color--primary btn-border--width--2 color--primary">
                                            <span class="btn__text">Solicita la demo</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- end of buttons -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end App of CTA content -->
            </div>
            <!-- end of App CTA area -->
        </section>
        <!-- =========== End of Benefits and CTA ============ -->

        <!-- =========== Start of FAQ ============ -->
        <section class="space d-flex align-items-center" id="preguntas-frecuentes">
            <div class="background-holder background--cover">
                <img src="img/image-1.jpg" alt="image" class="background-image-holder">
            </div>
            <!-- end of backgound image -->
            <div class="background-holder bg-color--primary opacity--80"></div>
            <!-- end of overlay backgound color-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto text-center">
                        <h1 class="h2-font color--white">Preguntas Frecuentes</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== End of FAQ ============ -->

        <!-- =========== Start of FAQ Body ============ -->
        <section class="space bg-color--primary-light--1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 sidebar">
                        <!--<div class="sticky-top mb-4 z-index1">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action font-size--18" data-scroll-nav="1"><span>Getting Started</span></a>
                                <a href="#" class="list-group-item list-group-item-action font-size--18" data-scroll-nav="2"><span>Pricing</span></a>
                                <a href="#" class="list-group-item list-group-item-action font-size--18" data-scroll-nav="3"><span>Customization</span></a>
                            </div>
                        </div>-->
                        <div class="article-entry accordion accordion--v2 remove-space--bottom" id="accordion1">

                            <div class="mb-6" data-scroll-index="3">
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Qué es la facturación electrónica?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse1" class="collapse" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>La factura electrónica es la versión digital de una factura física tradicional, la cual es emitida por medio de un sistema de facturación que cumple con ciertos requisitos estipulados por la SUNAT; y que además ayuda a automatizar el proceso de emisión de comprobantes, agilizando procesos internos y ahorrando muchísimo tiempo.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Para qué sirve la facturación electrónica?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse2" class="collapse" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>La facturación electrónica sirve para sustentar y validar las transacciones comerciales que se generan entre empresas y clientes. Además, gracias a la digitalización de comprobantes, con este tipo de facturación puedes simplificar procesos y reducir costos asociados a la emisión y almacenamiento de facturas en papel.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Es obligatorio emitir factura electrónica?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse3" class="collapse" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, según la Resolución de Superintendencia N° 128-2021/Sunat, la emisión de factura electrónica ya es obligatoria en todo el Perú.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                            </div>
                            <!-- end of Single group of accordions -->

                            <div class="mb-6" data-scroll-index="2">
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Qué es el sistema de Facturación?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse4" class="collapse" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>FacturaWeb es una solución que te permite simplificar la tarea de emitir facturas, boletas, proformas, etc. en tu negocio con tu propio logo.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link bg-white" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Qué beneficios tengo con FacturaWeb?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse5" class="collapse show" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>Con FacturaWeb tendrás:
                                                <ul class="text-color--400"><li>Ahorro de tiempo al emitir tus facturas, boletas, guías, entre otros de forma automática</li>
                                                <li>Mayor tranquilidad al cumplir fácil con la SUNAT</li>
                                                <li>Eficiencia en procesos al reducir errores humanos</li>
                                                <li>Ahorro de dinero al reducir costos de impresión y almacenamiento</li>
                                                <li>Puedes emitir GRATIS Notas de venta, tickets, proformas y orden de pagos.</li>
                                                </ul></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Cómo activo mi empresa para facturar con el sistema?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse6" class="collapse" data-parent="#accordion1">
                                        <div class="card-body bg-white pl-3">
                                            <p>Registrar tu empresa con un RUC 10 con negocio o RUC 20 activo, además tener acceso a su clave sol SUNAT. Luego enviarnos tu logo, en caso no lo tuvieras, te facilitamos uno. Finalmente te guiamos como configurar con tu usuario y clave SOL la conexión con nuestro sistema.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                            </div>
                            <!-- end of Single group of accordions -->
                        </div>
                    </div>
                    <!-- end of sidebar -->
                    <div class="col-12 col-md-6">
                        <div class="article-entry accordion accordion--v2 remove-space--bottom" id="accordion2">
                            <div class="mb-6" data-scroll-index="1">
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Puedo administrar multiples empresas en mi cuenta?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse7" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, con su correo electrónico puede registrar múltiples empresas (cada empresa con su propio plan) </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Puedo personalizar mis comprobantes?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse8" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, puede agregar su logo, información de su empresa, cuentas bancarias, teléfonos, etc. Así sus comprobantes proyectarán la identidad de su empresa.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Cuál es el precio del sistema?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse9" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Contamos con el plan mensual de S/ 20.00 y un plan anual de S/ 240.00, configurados de acuerdo a las necesidades de su empresa.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                            </div>
                            <!-- end of Single group of accordions -->

                            <div class="mb-6" data-scroll-index="2">
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Las boletas o facturas se envían a SUNAT?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse10" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, nuestra plataforma está automatizada para que todos sus comprobantes sean enviados y verificados dentro del plazo establecido por SUNAT.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Qué necesito para instalar el sistema?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse11" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>El sistema no necesita instalación, solo es necesario ingresar a www.facturaweb.pe mediante su navegador.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Puedo emitir solo boletas?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse12" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Usted elige que documentos electrónicos emitir (Boletas, Facturas, etc), teniendo presente el régimen en el que se encuentra.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                            </div>
                            <!-- end of Single group of accordions -->

                            <div class="mb-6" data-scroll-index="3">
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Puedo imprimir mis boletas?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse13" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, se pueden imprimir los comprobantes en diferentes formatos (A4, A5, ticket), enviar por correo y directamente por whatsApp.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                        <span class="font-size--18 text-color--700 font-w--500">¿Puedo agregar mi logo?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse14" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, puede personalizar su comprobante agregando su logo, además puede agregar número celular, redes sociales, cuentas bancarias, etc.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button class="btn btn-header btn-link collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                        <span class="font-size--18 text-color--700 font-w--500">Si ya emití facturas con SUNAT ¿Qué sucede con mi serie?</span>
                                        <i class="icon icon-up-arrow"></i>
                                    </button>
                                    <div id="collapse15" class="collapse" data-parent="#accordion2">
                                        <div class="card-body bg-white pl-3">
                                            <p>El sistema se configura con una serie distinta (F001), y la numeración inicia desde usted nos indique.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of single accordion-->
                            </div>
                            <!-- end of Single group of accordions -->
                        </div>
                        <!-- end of FAQ row -->
                    </div>
                    <!-- end of accordions area col -->
                </div>
                <!-- end of accordions area row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- =========== End of FAQ Body ============ -->

        <!-- =========== Start of footer height emulator============ -->
        <!-- this height emulator helps to calculate the fixed footer height  -->
        <div class="height-emulator d-none d-lg-block"></div>
        <!-- =========== End of footer height emulator============ -->

        <!-- =========== Start of Footer ============ -->
        <footer class="footer footer--fixed section--dark bg-color--dark--3">
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-6 col-xl-5 mx-auto mb-4 mb-lg-0 text-center text-lg-left">
                            <span class="mb-2">
                                <a href="<?php echo url(); ?>"><img src="img/brand-logo-white.png" alt="brand-logo"></a>
                            </span>
                            <p class="mb-2 text-color--300">Hecho con amor por Creatividad Web</p>
                            <ul class="icon-group icon-rounded icon-rounded-color--gray justify-content-center justify-content-lg-start mb-2 mb-lg-2">
                                <li><a href="https://www.facebook.com/facturawebpe" class="color--white"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="color--white"><i class="fab fa-telegram-plane"></i></a></li>
                                <li><a href="#" class="color--white"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="color--white"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- end of widget col -->

                        <div class="col-12 col-lg-6 ml-lg-auto text-center text-lg-right">
                            <p>¡Solicite una demo!</p>
                            <h3 class="font-size--30 font-w--700 mb-2"><a href="tel:+51991615821" class="color--white" tabindex="0">+51 991615821</a></h3>
                            <!-- end of social icon -->
                            <ul class="list-unstyled d-flex flex-wrap justify-content-center justify-content-lg-end remove-space--x">
                                <li class="mx-2 ml-lg-2"><a href="#" class="body-font color--white">Términos y condiciones</a></li>
                            </ul>
                            <!-- end of nav item -->
                            <p class="color--white font-size--14">FacturaWeb© <?php echo date("Y"); ?>. Todos los derechos reservados.</p>

                        </div>
                        <!-- end of col -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of main footer container -->
            </div>
            <!-- end of main footer area -->
        </footer>
        <!-- =========== End of Footer ============ -->
    </main>
    <script src="js/plugins.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>