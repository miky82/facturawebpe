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
<html lang="es-pe">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"><!-- Google Tag Manager -->

    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
       new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
       j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
       'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
       })(window,document,'script','dataLayer','GTM-MW3DFRBF');
    </script><!-- End Google Tag Manager -->
    <meta charset="UTF-8"><!-- Font Awesome CDN -->
    <link rel="dns-prefetch" href="//use.fontawesome.com"><!-- Google Tag Manager -->
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,shrink-to-fit=no">
    <meta name="author" content="FacturaWeb">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Facturación Electrónica SUNAT - FacturaWeb.pe</title>
    <meta name="robots" content="max-image-preview:large,index,follow">
    <meta name="copyright" content="2008-2023 CREATIVIDAD WEB">
    <link href="https://facturaweb.pe" rel="canonical">
    <meta content="Sistema de Facturación Electrónica en Perú, donde podrás emitir facturas, boletas autorizados por SUNAT." name="description">
    <meta content="FacturaWeb.pe - Facturación Electrónica" property="og:title">
    <meta content="Sistema de Facturación Electrónica en Perú, donde podrás emitir facturas, boletas autorizados por SUNAT." property="og:description">
    <meta content="https://facturaweb.pe" property="og:url">
    <meta content="https://facturaweb.pe/opengraph.png" property="og:image">
    <meta content="FacturaWeb.pe - Facturación Electrónica" name="twitter:title">
    <meta content="Sistema de Facturación Electrónica en Perú, donde podrás emitir facturas, boletas autorizados por SUNAT." name="twitter:description">
    <meta content="https://facturaweb.pe/opengraph.png" name="twitter:card">
    <meta content="https://facturaweb.pe/opengraph.png" name="twitter:image">
    <link href="js/plugins.min.js" rel="preload">
    <link href="js/app.js" rel="preload"><!-- favicon CSS -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180"><!-- fonts -->
    <link href="fonts/sfuidisplay.css" rel="stylesheet"><!-- Icon fonts -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"><!-- Plugins CSS -->
    <link href="css/plugins.min.css" rel="stylesheet"><!-- Style CSS -->
    <link href="css/app.css" rel="stylesheet"><!-- Your CSS -->
    <link href="css/custom.css" rel="stylesheet"><!-- Google tag (gtag.js) -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CC13PL86WG"></script>
    <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       gtag('config', 'G-CC13PL86WG');
    </script>
</head>
<body class="theme-gradient-7" data-animation="false" data-appearance="light" data-spy="scroll" data-target="#navbar-nav">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe title="Tag Manager" height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-MW3DFRBF" style="display:none;visibility:hidden" width="0"></iframe>
    </noscript> <!-- End Google Tag Manager (noscript) -->
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
    </div><!-- =========== End of Loader ============ -->
    <main class="main">
        <!-- =========== Start of Navigation (main menu) ============ -->
        <header class="navbar navbar-sticky sticky-bg-color--primary navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="%3C?php%20echo%20url();%20?%3E"><img alt="brand-logo" class="navbar-brand__regular" src="img/brand-logo-white.png"> <img alt="sticky brand-logo" class="navbar-brand__sticky" src="img/brand-logo-white.png"></a> <!--  End of brand logo -->
                 <button aria-label="Toggle navigation" class="navbar-toggler d-lg-none" data-toggle="navbarToggler" type="button"><span class="navbar-toggler-icon"></span></button> <!-- end of Nav toggler -->
                <div class="navbar-inner">
                    <!--  Nav close button inside off-canvas/ mobile menu -->
                     <button aria-label="Toggle navigation" class="navbar-toggler d-lg-none" data-toggle="navbarToggler" type="button"><span class="navbar-toggler-icon"></span></button> <!-- end of Nav Toggoler -->
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
                        </ul><!-- end of nav menu items -->
                    </nav>
                </div>
                <div class="d-flex align-items-center ml-lg-1 ml-xl-2 mr-5 mr-sm-6 m-lg-0 align-items-center">
                    <div class="pl-1 pl-md-0 icon-fill--wide">
                        <a class="btn btn-size--sm btn-bg--cta--2 btn-hover--3d d-md-inline-flex" href="https://api.whatsapp.com/send?phone=51991615821&text=Hola,%20me%20interesa%20el%20servicio%20de%20facturaci%C3%B3n"><span class="t-icon__brand-icon h4-font"><i class="fab fa-whatsapp"></i></span> <span class="btn__text font-w--500">WhatsApp</span></a>
                    </div>
                </div><!-- end of nav CTA button -->
            </div><!-- end of container -->
        </header><!-- =========== End of Navigation (main menu)  ============ -->
        <!-- =========== Start of Hero ============ -->
        <section class="hero hero--full hero--v12 d-flex align-items-center">
            <div class="background-holder background--cover z-index1"><img alt="image" class="background-image-holder" src="img/hero-12.png"></div><!-- end of backgound image -->
            <div class="background-holder bg-color--primary"></div><!-- end of overlay backgound color-->
            <div class="svg-shape w-100 z-index2"><img alt="wave" class="svg" src="img/layout/wave-14.svg"></div><!-- end of bottom svg shape -->
            <div class="container mb-10">
                <div class="row flex-column-reverse flex-lg-row align-items-center mb-10 mb-lg-5 switchable switchable--reverse">
                    <div class="col-12 col-md-10 col-lg-7 mx-auto mx-lg-0 text-center text-lg-left z-index3">
                        <div class="hero-content reveal">
                            <h1 class="hero__title color--white h2-font font-w--700 mb-2">Faturación Electrónica<br>
                            para tu negocio</h1>
                            <p class="hero__description color--white opacity--80 font-size--18 mb-4 mb-lg-5">Con FacturaWeb podrás emitir facturas y otros comprobantes de pago electrónicos de forma rápida, fácil y segura que te exige la SUNAT-Perú desde cualquier parte del mundo. Además podrás administrar los precios de tus productos.</p><!-- end of text content -->
                        </div>
                    </div><!-- end of col -->
                    <div class="col-12 col-lg-5 pt-6 pt-lg-1 hero__image z-index3 reveal text-sm-center">
                        <a href="#demo"><picture><img alt="hero-image" class="img-fluid" src="img/166.svg"></picture></a>
                    </div>
                    <!-- end of col -->
                </div><!-- end of row -->
            </div>
        </section><!-- =========== End of Hero ============ -->
        <!-- =========== Start of Core Feautes ============ -->
        <section class="pt-5 pt-xl-0 z-index3 jsElement" data-pull="-200" id="beneficios">
            <div class="container">
                <div class="bg-white box-shadow--5 rounded--10 text-center pt-6 pb-2 px-3 px-sm-5 px-md-3 pt-lg-7 pb-lg-3 px-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-lg-10 mb-4 mb-lg-4 mx-auto text-center reveal">
                            <h2 class="mb-2 h3-font font-w--700">
                                <span class="text-color--cta--5">Beneficios</span> del sistema FacturaWeb
                            </h2>
                            <a class="btn btn-size--md btn-bg--cta--5 btn-hover--3d" href="https://app.facturaweb.pe/signup">
                                <span class="btn__text">Crea tu cuenta gratis</span>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-between border--bottom mb-3 pb-lg-1 text-lg-left">
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2"><img alt="exchange-icon" src="img/exchange-01.svg"></span>
                            <h3 class="h5-font font-w--500 mb-1">Protección de datos</h3>
                            <p>Tus comprobantes electrónicos emitidos se encontrarán garantizados y asegurados.</p>
                        </div><!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2"><img alt="exchange-icon" src="img/exchange-02.svg"></span>
                            <h3 class="h5-font font-w--500 mb-1">Precios accesibles</h3>
                            <p>¡Inicia GRATIS hasta fin de mes! Luego elige cómodos pagos mensuales o pago anual.</p>
                        </div><!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2"><img alt="exchange-icon" src="img/exchange-03.svg"></span>
                            <h3 class="h5-font font-w--500 mb-1">Personaliza tus comprobantes</h3>
                            <p>Emite los comprobantes con tu logo y configurados de acuerdo a tu negocio.</p>
                        </div><!-- end of single item col -->
                        <div class="col-12 col-md-6 col-xl-5 pb-4 reveal">
                            <span class="mb-2"><img alt="exchange-icon" src="img/exchange-04.svg"></span>
                            <h3 class="h5-font font-w--500 mb-1">Garantía y soporte técnico incluido</h3>
                            <p>Soporte técnico disponible y actualizaciones de versiones de nuestros productos.</p>
                        </div><!-- end of single item col -->
                    </div><!-- end of features row -->
                    <div class="row justify-content-between reveal">
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">500+</span>
                            <p>Clientes satisfechos</p>
                        </div><!-- end of single item col -->
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">10,000+</span>
                            <p>comprobantes emitidos</p>
                        </div><!-- end of single item col -->
                        <div class="col-12 col-md-4 text-center mb-2">
                            <span class="font-size--48 color--primary">2,500+</span>
                            <p>Horas de soporte</p>
                        </div><!-- end of single item col -->
                    </div><!-- end of facts row -->
                </div>
            </div>
        </section><!-- =========== End of Core Feautes ============ -->

        <!-- =========== Start of Video ============ -->
        <section class="space--top z-index1" id="demo">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-lg-6 mb-2 mb-lg-4 mx-auto text-center reveal">
                        <h2 class="mb-2 h3-font font-w--700">¿Cómo se usa?</h2>
                        <p class="mb-2">Entérate cómo FacturawebPe hace crecer a tu negocio.</p>
                        <h4 class="mb-1"><b>PRUEBE LA DEMO</b></h4>
                        <span class="mb-1">
                            <b>Ingrese aquí <a href="https://app.facturaweb.pe" target="_blank">https://app.facturaweb.pe</a></b>
                        </span><br>
                        <span><b>usuario:</b> mbritojaimes@gmail.com</span><br>
                        <span><b>clave:</b> 123demo123</span>
                    </div>
                </div>
                <!-- end of section title row -->
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="position-relative bg-color--white-opacity--05 p-2 p-md-4 rounded--10 box-shadow--1">
                            <picture><img src="img/media-thumb-4.webp" alt="media-thumb" class="img-fluid rounded--10">
                            </picture>
                            <!-- end of thumb -->
                            <a class="lightbox pos-abs-bottom-right m-6 m-md-7" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=aI7M0Lh5P1M">
                                <span class="pos-abs-center opacity--50">
                                    <img src="img/layout/play-btn-border.svg" alt="play-btn-border" class="svg">
                                </span>
                                <span class="btn btn-media btn-media-size--md btn-bg--cta--5 rounded--full"><i class="icon icon-triangle-right"></i></span>
                            </a>
                            <!-- end of play btn -->
                        </div>
                        <!-- end of video area -->
                    </div>
                    <!-- end of video area col -->
                </div>
                <!-- end of video area row -->
            </div>
        </section>
        <!-- =========== End of Video ============ -->
        
        <!-- =========== Start of Steps ============ -->
        <section class="space steps--v1 pt-10 bg-color--primary jsElement" data-pull="-100" id="pasos">
            <div class="container">
                <div class="row space--top">
                    <div class="col-12 col-md-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0 reveal">
                        <div>
                            <h2 class="h3-font font-w--700 mb-2">Empieza a facturar con estos simples pasos</h2>
                            <p class="opacity--60">Emite comprobantes electrónicos con nuestro sistema en línea de forma inmediata.</p>
                        </div>
                        <div class="ml-lg-10 d-none d-md-inline-block"><img alt="arrow" class="svg svg-shape--default opacity--10" src="img/layout/steps-arrow.svg"></div>
                    </div><!-- end of section title -->
                    <div class="col-12 col-md-7 col-xl-6 offset-xl-1 pr-sm-6 pr-md-0 remove-space--bottom steps-wrapper">
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle"><img alt="icon" src="img/exchange-05.svg"></span>
                            </div><!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">Crear una cuenta</h3>
                                <p class="opacity--80"><a class="text-color--cta--5" href="https://app.facturaweb.pe/signup">Regístrate con tu correo</a>, sin instalar nada. Si ya te registraste ingresa aquí <a class="text-color--cta--5" href="http://app.facturaweb.pe/">Inicia sesión</a>.</p>
                            </div><!-- end of content -->
                        </div><!-- end of single step -->
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle"><img alt="icon" src="img/exchange-06.svg"></span>
                            </div><!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">Personaliza tu negocio</h3>
                                <p class="opacity--80">Sube tu logo para que aparezca en tus comprobantes y configúralo de acuerdo al rubro de tu negocio.</p>
                            </div><!-- end of content -->
                        </div><!-- end of single step -->
                        <div class="step position-relative d-flex align-items-start pb-6 reveal">
                            <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle"><img alt="icon" src="img/exchange-07.svg"></span>
                            </div><!-- end of icon -->
                            <div class="position-relative">
                                <h3 class="h4-font font-w--600 mb-1 step__title">¡Emite tu comprobante!</h3>
                                <p class="opacity--80">Ya puedes emitir tus comprobantes de pago a la SUNAT validando el envío de forma rápida y segura. Generando reportes para tu negocio.</p>
                            </div><!-- end of content -->
                        </div><!-- end of single step -->
                    </div>
                </div>
            </div>
        </section><!-- =========== End of Steps ============ -->
        <!-- =========== Start of Benefits and CTA ============ -->
        <section class="space steps--v1 pt-10 bg-color--primary-light--1" id="funcionalidades">
            <!-- end of benefits area -->
            <div class="switchable pt-4 d-lg-flex align-items-md-center">
                <div class="col-12 col-lg-6 mb-40 mb-lg-0 text-center mb-3 reveal">
                    <picture class="switchable__image"><img alt="image" class="img-fluid" src="img/166_a.png"></picture>
                </div><!-- end of device image -->
                <div class="switchable__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ml-md-auto">
                                <div class="mb-4 text-center text-lg-left reveal">
                                    <h2 class="h3-font font-w--700 mb-2">Funcionalidades del sistema
                                        <span class="text-color--cta--5">FacturaWeb</span>
                                    </h2>
                                </div><!-- end of title -->
                                <ul class="pl-2 mb-6 text-center text-lg-left reveal">
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700">Emite <b>Factura, Boleta de Venta</b>, Nota de crédito y Débito, Guías, Detracciones</p>
                                    </li>
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700">Visualiza en tiempo real el <b>estado de tus comprobantes en SUNAT</b></p>
                                    </li>
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700">Compatible con <b>ticketeras</b> y con impresoras en formato <b>A4 y A5</b></p>
                                    </li>
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700">Envío de comprobantes por <b>Correo y Whatsapp</b></p>
                                    </li>
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700">Descarga tus Facturas electrónicas en formato <b>XML y PDF</b></p>
                                    </li>
                                    <li class="mb-1 list-md-none">
                                        <p class="text-color--700"><b>Actualización</b> permanente con los cambios normativos</p>
                                    </li>
                                </ul><!-- end of main content -->
                                <div class="button-group flex-column flex-sm-row align-items-center reveal">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                         <a class="btn btn-border btn-border--color--primary btn-border--width--2 color--primary" href="https://app.facturaweb.pe/signup"><span class="btn__text">PRUEBA GRATIS</span></a>
                                    </div>
                                </div><!-- end of buttons -->
                            </div>
                        </div>
                    </div>
                </div><!-- end App of CTA content -->
            </div><!-- end of App CTA area -->
        </section><!-- =========== End of Benefits and CTA ============ -->

        <!-- =========== Start of Chart ============ -->
        <section class="bg-color--primary">
            <div class="svg-shape--top">
                <img src="img/layout/wave-16.svg" alt="wave" class="svg">
            </div>
            <!-- end of top left wave -->
            <div class="space border--bottom position-relative">
                <div class="background-holder background--bottom--right d-none d-md-block">
                    <img src="img/layout/wave-15.svg" alt="wave" class="background-image-holder">
                </div>
                <!-- end of body wave -->

                <!-- end of top braces svg shape -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="rounded--10 box-shadow--5">
                                <picture>
                                    <img src="img/facturaweb_documentos.webp" alt="web" class="img-fluid rounded--10">
                                </picture>
                            </div>
                        </div>
                        <!-- end of chart col -->
                    </div>
                    <!-- end of chart row -->
                </div>
                <!-- end of chart container -->
            </div>
            <!-- end of chart area -->

            <div class="py-6 p-lg-8">
                <div class="container">
                    <div class="row text-center text-md-left align-items-center justify-content-lg-between">
                        <div class="col-12 col-xl-11 mx-auto d-md-flex flex-md-row align-items-md-center reveal">
                            <div class="mb-3 mb-md-0 mr-2 mr-md-4 mr-xl-10 flex-1">
                                <h2 class="font-size--30 font-w--700 mb-2">¡Create una cuenta gratis y comience a emitir!</h2>
                                <p class="opacity--60 pr-xl-10">Aumenta la velocidad de atención en tu negocio, ahorra tiempo y expande tus canales de venta con un sistema ágil capaz de conectar tus locales.</p>
                            </div>
                            <a href="https://app.facturaweb.pe/signup" class="btn btn-bg--cta--5 btn-hover--3d">
                                <span class="btn__text">Create una cuenta GRATIS</span>
                            </a>
                        </div>
                        <!-- end of cta col -->
                    </div>
                    <!-- end of cta row -->
                </div>
                <!-- end of cta container -->
            </div>
            <!-- end of cta area -->
        </section>
        <!-- =========== End of Chart ============ -->

        <!-- =========== Start of FAQ Body ============ -->
        <section class="space bg-color--primary-light--1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-lg-6 mb-4 mb-lg-6 mx-auto text-center reveal">
                        <h2 class="mb-2 h3-font font-w--700">Preguntas Frecuentes
                        </h2>
                        <p class="mb-4">¿Tiene consultas? Aquí respondemos algunas. No dude en contactarnos por WhatsApp.</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 sidebar">
                        <div class="article-entry accordion accordion--v2 remove-space--bottom" id="accordion1">
                            <div class="mb-6" data-scroll-index="3">
                                <div class="card mb-1">
                                    <button aria-controls="collapse1" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse1" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Qué es la facturación electrónica?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion1" id="collapse1">
                                        <div class="card-body bg-white pl-3">
                                            <p>La factura electrónica es la versión digital de una factura física tradicional, la cual es emitida por medio de un sistema de facturación que cumple con ciertos requisitos estipulados por la SUNAT; y que además ayuda a automatizar el proceso de emisión de comprobantes, agilizando procesos internos y ahorrando muchísimo tiempo.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse2" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse2" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Para qué sirve la facturación electrónica?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion1" id="collapse2">
                                        <div class="card-body bg-white pl-3">
                                            <p>La facturación electrónica sirve para sustentar y validar las transacciones comerciales que se generan entre empresas y clientes. Además, gracias a la digitalización de comprobantes, con este tipo de facturación puedes simplificar procesos y reducir costos asociados a la emisión y almacenamiento de facturas en papel.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse3" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse3" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Es obligatorio emitir factura electrónica?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion1" id="collapse3">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, según la Resolución de Superintendencia N° 128-2021/Sunat, la emisión de factura electrónica ya es obligatoria en todo el Perú.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                            </div><!-- end of Single group of accordions -->
                            <div class="mb-6" data-scroll-index="2">
                                <div class="card mb-1">
                                    <button aria-controls="collapse4" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse4" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Qué es el sistema de Facturación?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion1" id="collapse4">
                                        <div class="card-body bg-white pl-3">
                                            <p>FacturaWeb es una solución que te permite simplificar la tarea de emitir facturas, boletas, proformas, etc. en tu negocio con tu propio logo.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse5" aria-expanded="true" class="btn btn-header btn-link bg-white" data-target="#collapse5" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Qué beneficios tengo con FacturaWeb?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse show" data-parent="#accordion1" id="collapse5">
                                        <div class="card-body bg-white pl-3">
                                            <div>
                                                Con FacturaWeb tendrás:
                                                <ul class="text-color--400">
                                                    <li>Ahorro de tiempo al emitir tus facturas, boletas, guías, entre otros de forma automática</li>
                                                    <li>Mayor tranquilidad al cumplir fácil con la SUNAT</li>
                                                    <li>Eficiencia en procesos al reducir errores humanos</li>
                                                    <li>Ahorro de dinero al reducir costos de impresión y almacenamiento</li>
                                                    <li>Puedes emitir GRATIS Notas de venta, tickets, proformas y orden de pagos.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse6" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse6" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Cómo activo mi empresa para facturar con el sistema?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion1" id="collapse6">
                                        <div class="card-body bg-white pl-3">
                                            <p>Registrar tu empresa con un RUC 10 con negocio o RUC 20 activo, además tener acceso a su clave sol SUNAT. Luego enviarnos tu logo, en caso no lo tuvieras, te facilitamos uno. Finalmente te guiamos como configurar con tu usuario y clave SOL la conexión con nuestro sistema.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                            </div><!-- end of Single group of accordions -->
                        </div>
                    </div><!-- end of sidebar -->
                    <div class="col-12 col-md-6">
                        <div class="article-entry accordion accordion--v2 remove-space--bottom" id="accordion2">
                            <div class="mb-6" data-scroll-index="1">
                                <div class="card mb-1">
                                    <button aria-controls="collapse7" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse7" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Puedo administrar multiples empresas en mi cuenta?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse7">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, con su correo electrónico puede registrar múltiples empresas (cada empresa con su propio plan)</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse8" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse8" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Puedo personalizar mis comprobantes?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse8">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, puede agregar su logo, información de su empresa, cuentas bancarias, teléfonos, etc. Así sus comprobantes proyectarán la identidad de su empresa.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse9" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse9" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Cuál es el precio del sistema?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse9">
                                        <div class="card-body bg-white pl-3">
                                            <p>Contamos con el plan mensual de S/ 20.00 y un plan anual de S/ 240.00, configurados de acuerdo a las necesidades de su empresa.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                            </div><!-- end of Single group of accordions -->
                            <div class="mb-6" data-scroll-index="2">
                                <div class="card mb-1">
                                    <button aria-controls="collapse10" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse10" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Las boletas o facturas se envían a SUNAT?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse10">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, nuestra plataforma está automatizada para que todos sus comprobantes sean enviados y verificados dentro del plazo establecido por SUNAT.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse11" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse11" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Qué necesito para instalar el sistema?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse11">
                                        <div class="card-body bg-white pl-3">
                                            <p>El sistema no necesita instalación, solo es necesario ingresar a www.facturaweb.pe mediante su navegador.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse12" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse12" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Puedo emitir solo boletas?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse12">
                                        <div class="card-body bg-white pl-3">
                                            <p>Usted elige que documentos electrónicos emitir (Boletas, Facturas, etc), teniendo presente el régimen en el que se encuentra.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                            </div><!-- end of Single group of accordions -->
                            <div class="mb-6" data-scroll-index="3">
                                <div class="card mb-1">
                                    <button aria-controls="collapse13" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse13" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Puedo imprimir mis boletas?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse13">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, se pueden imprimir los comprobantes en diferentes formatos (A4, A5, ticket), enviar por correo y directamente por whatsApp.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse14" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse14" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">¿Puedo agregar mi logo?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse14">
                                        <div class="card-body bg-white pl-3">
                                            <p>Sí, puede personalizar su comprobante agregando su logo, además puede agregar número celular, redes sociales, cuentas bancarias, etc.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                                <div class="card mb-1">
                                    <button aria-controls="collapse15" aria-expanded="false" class="btn btn-header btn-link collapsed bg-white" data-target="#collapse15" data-toggle="collapse" type="button"><span class="font-size--18 text-color--700 font-w--500">Si ya emití facturas con SUNAT ¿Qué sucede con mi serie?</span> <i class="icon icon-up-arrow"></i></button>
                                    <div class="collapse" data-parent="#accordion2" id="collapse15">
                                        <div class="card-body bg-white pl-3">
                                            <p>El sistema se configura con una serie distinta (F001), y la numeración inicia desde usted nos indique.</p>
                                        </div>
                                    </div>
                                </div><!-- end of single accordion-->
                            </div><!-- end of Single group of accordions -->
                        </div><!-- end of FAQ row -->
                    </div><!-- end of accordions area col -->
                </div><!-- end of accordions area row -->
            </div><!-- end of container -->
        </section><!-- =========== End of FAQ Body ============ -->
        <!-- =========== Start of footer height emulator============ -->
        <!-- this height emulator helps to calculate the fixed footer height  -->
        <div class="height-emulator d-none d-lg-block"></div><!-- =========== End of footer height emulator============ -->
        <!-- =========== Start of Footer ============ -->
        <footer class="footer footer--fixed section--dark bg-color--dark--3">
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-6 col-xl-5 mx-auto mb-4 mb-lg-0 text-center text-lg-left">
                            <span class="mb-2"><a href="%3C?php%20echo%20url();%20?%3E"><img alt="brand-logo" src="img/brand-logo-white.png"></a></span>
                            <p class="mb-2 text-color--300">Hecho con amor por Creatividad Web</p>
                            <ul class="icon-group icon-rounded icon-rounded-color--gray justify-content-center justify-content-lg-start mb-2 mb-lg-2">
                                <li>
                                    <a class="color--white" href="https://www.facebook.com/facturawebpe"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="color--white" href="#"><i class="fab fa-telegram-plane"></i></a>
                                </li>
                                <li>
                                    <a class="color--white" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a class="color--white" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div><!-- end of widget col -->
                        <div class="col-12 col-lg-6 ml-lg-auto text-center text-lg-right">
                            <p>¡Solicite una demo!</p>
                            <h3 class="font-size--30 font-w--700 mb-2"><a class="color--white" href="https://api.whatsapp.com/send?phone=51991615821&text=Hola,%20me%20interesa%20el%20sistema%20de%20facturaci%C3%B3n" tabindex="0">+51 991615821</a></h3><!-- end of social icon -->
                            <ul class="list-unstyled d-flex flex-wrap justify-content-center justify-content-lg-end remove-space--x">
                                <li class="mx-2 ml-lg-2">
                                    <a class="body-font color--white" href="#">Términos y condiciones</a>
                                </li>
                            </ul><!-- end of nav item -->
                            <p class="color--white font-size--14">FacturaWeb© <?php echo date("Y"); ?>. Todos los derechos reservados.</p>
                        </div><!-- end of col -->
                    </div><!-- end of row -->
                </div><!-- end of main footer container -->
            </div><!-- end of main footer area -->
        </footer><!-- =========== End of Footer ============ -->
    </main>
    <script src="js/plugins.min.js">
    </script>
    <script src="js/app.js">
    </script>
</body>
</html>
