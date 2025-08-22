<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Lowgim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/now-ui-kit.css?v=1.3.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/demo/demo.css" rel="stylesheet" />

    <!--google icons-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--iconos fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-jLKHWMZRAe3U2J3+nNleWbR6OU7J6mrX2MZ0duHRjCdiGxUz6SSJcJ58IGz0G9Lk" crossorigin="anonymous">
    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-CwvGZ9r9h0eWgSnJZV2Gu6yIKJY+e+WQa4OQ+Ossxzlf+XPm2+MuGgkVE+YIJpZlCgHDqUu+yJVSGVptGOaK5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        /*.wrapper {
            margin: 0;
        }*/

        .wrapper.con-padding {
            padding-top: 80px;
        }

        .wrapper.sin-padding {
            padding-top: 0;
        }


        header.site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            height: 80px;
            /* importante: define una altura real */
            background: #000;
            /* o lo que necesites */
        }

        /* Navbar transparente al cargar (home sin scroll) */
        .transparent-navbar {
            background-color: transparent;
            transition: background-color 0.4s ease, box-shadow 0.4s ease;
            box-shadow: none;
        }

        .transparent-navbar .nav-link {
            color: white !important;
        }

        /* Navbar con scroll o en otras páginas */
        .navbar.scrolled {
            background-color: #000 !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .navbar.scrolled .nav-link {
            color: white !important;
        }

        .responsive-logo {
            max-height: 50px;
            height: auto;
            width: auto !important;
        }

        .btn-area-cliente {
            background-color: #37A819;
            border-radius: 200px;
        }

        .btn-area-cliente:hover {
            background-color: rgb(128, 255, 0);
        }

        .navbar .nav-link {
            font-size: 15px;
            font-weight: 600;
            /* color se define según el estado .transparent-navbar o .scrolled */
        }

        .nav-item {
            font-size: 18px;
        }

        .know-more:hover{
            color: #37A819;
        }

        /*************MOVIL********* */
        @media screen and (max-width: 991.98px) {
            .navbar-collapse .dropdown .dropdown-menu {
                position: static !important;
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
                float: none !important;
                width: 100%;
                margin-top: 30px;
                padding: 0;
                border: none;
                box-shadow: none;
                background-color: transparent;
                max-height: none !important;
                overflow: visible !important;
            }
        }
    </style>

    <?php wp_head(); ?>
</head>

<body class="index-page sidebar-collapse" <?php body_class(); ?>>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top <?php echo is_front_page() ? 'transparent-navbar' : 'scrolled'; ?>"
        color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="tooltip" 
                    data-placement="bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLowgim_redimensionado.png"
                        class="logo responsive-logo img-fluid" alt="lowgim">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" data-nav-image="./assets/img//blurred-image-1.jpg"
                data-color="orange">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if (is_page('instalacion'))
                        echo 'active'; ?>">
                        <a href="<?php echo esc_url(home_url('/instalacion/')); ?>" class="nav-link">
                            INSTALACIÓN
                        </a>
                    </li>
                     <li class="nav-item <?php if (is_page('tarifas'))
                        echo 'active'; ?>">
                        <a href="<?php echo esc_url(home_url('/tarifas/')); ?>" class="nav-link">
                            TARIFAS
                        </a>
                    </li>
                    <li class="nav-item <?php if (is_page('actividades'))
                        echo 'active'; ?>">
                        <a href="<?php echo esc_url(home_url('/actividades/')); ?>" class="nav-link">
                            ACTIVIDADES
                        </a>
                    </li>
                    <li class="nav-item <?php if (is_page('blog'))
                        echo 'active'; ?>">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="nav-link">
                            BLOG
                        </a>
                    </li>
                    <li class="nav-item <?php if (is_page('contacto'))
                        echo 'active'; ?>">
                        <a href="<?php echo esc_url(home_url('/contacto/')); ?>" class="nav-link">
                            CONTACTANOS
                        </a>
                    </li>

                    <li class="nav-item dropdown style-enlaces-nav mt-5 mt-lg-0 list-unstyled">
                        <?php if (is_user_logged_in()): ?>
                            <a class="nav-link btn btn-primary btn-area-cliente dropdown-toggle text-nowrap" href="#"
                                id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <p class="mb-0"><i class="fas fa-user me-2"></i></p>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item <?php if (is_account_page() && !is_wc_endpoint_url())
                                    echo 'active'; ?>" href="<?php echo esc_url(home_url('/mi-cuenta/')); ?>">Mi
                                    cuenta</a>
                                <a class="dropdown-item <?php if (is_wc_endpoint_url('orders'))
                                    echo 'active'; ?>"
                                    href="<?php echo esc_url(home_url('/mi-cuenta/orders/')); ?>">Pedidos</a>
                                <a class="dropdown-item <?php if (is_wc_endpoint_url('edit-address'))
                                    echo 'active'; ?>"
                                    href="<?php echo esc_url(home_url('/mi-cuenta/edit-address/')); ?>">Direcciones</a>
                                <a class="dropdown-item <?php if (is_wc_endpoint_url('edit-account'))
                                    echo 'active'; ?>"
                                    href="<?php echo esc_url(home_url('/mi-cuenta/edit-account/')); ?>">Detalles de
                                    cuenta</a>
                                <a class="dropdown-item" href="<?php echo esc_url(wc_logout_url()); ?>">Cerrar sesión</a>
                            </div>
                        <?php else: ?>
                            <a class="nav-link btn btn-primary btn-area-cliente"
                                href="<?php echo esc_url(home_url('/login/')); ?>">
                                <p class="mb-0">ÁREA CLIENTE</p>
                            </a>
                        <?php endif; ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <?php
    if (is_page('mi-cuenta') || is_account_page()) {
        // NO añadir wrapper o añadir uno sin padding
        echo '<div class="wrapper sin-padding">';
    } elseif (is_home()) {
        echo '<div class="wrapper sin-padding">';
    } else {
        echo '<div class="wrapper con-padding">';
    }
    ?>