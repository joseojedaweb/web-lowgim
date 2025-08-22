<?php get_header(); ?>
<style>
    .hero-section {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/img/zona_fuerza_renombrada/barra-disco-pesas-lowgym.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-position: center center;
        opacity: 1;
        background-color: #d3d3d3;
        height: 85vh;
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .hero-content {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding-left: 120px;
    }

    .energy-text {
        color: #7FFF00;
        font-size: 1.8rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .inscription-text {
        color: white;
        font-size: 5rem;
        font-weight: 900;
        line-height: 0.9;
        text-transform: uppercase;
        margin-top: 10px;
    }

    .btn-green {
        background-color: #37A819;
        color: white;
        font-weight: bold;
        padding: 10px 30px;
        border: none;
        margin-top: 20px;
        text-transform: uppercase;
    }

    .btn-green:hover {
        background-color: rgb(128, 255, 0);
    }

    .know-more {
        color: white;
        margin-top: 20px;
        display: inline-block;
        font-size: 1.2rem;
    }

    .know-more i {
        margin-left: 5px;
    }

    .right-buttons {
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .right-btn {
        background-color: #37A819;
        color: white;
        font-weight: bold;
        padding: 15px 30px;
        border: none;
        margin: 10px 0;
        display: block;
        text-align: center;
        text-decoration: none;
    }

    .right-btn:hover {
        background-color: rgb(128, 255, 0);
        text-decoration: none;
        color: white;
    }
    
    /******************************************** */
    /*tarifa index*/ 
    .card-header-index{
        font-weight: bold;
        font-size: 15px;
        margin-top: 10px;
    }

    .tarifas-section .current-price {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    /******************************************* */
    body {
        font-family: Arial, sans-serif;
    }

    .activities-section {
        background-color: #000;
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .activities-section h2 {
        font-size: 2.5rem;
        margin-bottom: 60px;
    }

    .activity-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        color: white;
    }

    .activity-title {
        font-weight: bold;
        margin-top: 15px;
    }

    .activity-item {
        margin-bottom: 30px;
    }

    .icon-container {
        margin-bottom: 10px;
    }

    .orange-accent {
        color: #E5A55D;
        font-size: 1rem;
        margin-bottom: 10px;
    }

    .discover-btn {
        background-color: #E5A55D;
        color: white;
        border: none;
        padding: 10px 30px;
        border-radius: 25px;
        font-weight: bold;
    }

    .custom-icon {
        width: 50px;
        height: 50px;
    }

    /******************************************************** */
    .class-card {
        position: relative;
        margin-bottom: 20px;
        overflow: hidden;
        height: 300px;
        display: block;
    }

    .class-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .class-card:hover img {
        transform: scale(1.1);
    }

    .class-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        z-index: 2;
        /* Asegura que esté por encima de la imagen */
        pointer-events: none;
        /* Evita interferencia al hacer clic */
    }

    .class-card img {
        z-index: 1;
        position: relative;
    }

    .card-img-top {
        width: 100%;
        height: 250px;
        /* o el alto que desees */
        object-fit: cover;
        object-position: center;
    }

    .swiper-button-prev,
    .swiper-button-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.8);
        color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        cursor: pointer;
    }

    /* Controla el tamaño de las tarjetas del carrusel */
    .swiper-instalaciones {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 15px;
        overflow: visible;
    }

    /* Posiciona los botones fuera del carrusel, centrados verticalmente */
    .instalacion-index {
        position: relative;
    }

    .instalaciones-button-prev,
    .instalaciones-button-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 45px;
        height: 45px;
        background-color: transparent;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .instalaciones-button-prev:hover,
    .instalaciones-button-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Botón izquierdo */
    .instalaciones-button-prev {
        left: -60px;
        /* Ajusta según el espacio deseado */
    }

    /* Botón derecho */
    .instalaciones-button-next {
        right: -60px;
        /* Ajusta según el espacio deseado */
    }

    .swiper-slide {
        width: 100% !important;
        transition: transform 0.4s ease;
        transform: scale(0.9);
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        opacity: 0.7;
    }

    .swiper-slide-active {
        transform: scale(1.1);
        opacity: 1;
        z-index: 2;
    }

    .card-instalacion {
        width: 100%;
        height: 100%;
    }

    .card-instalacion img {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .card-instalacion .card-img-top {
        width: 100%;
        height: 300px;
        /* o lo que necesites */
        object-fit: contain;
        /* 🔁 para que se vea entera */
        object-position: center;
        background-color: #000;
        /* opcional para evitar fondo blanco si sobra espacio */
    }



    /****************************** */

    #section-secciones-index {
        background-color: #2c8314;
        padding: 50px;
    }

    /***********BLOG********** */
    .article-card {
        border-radius: 10px;
        padding: 20px;
        background-color: #fff;
        transition: box-shadow 0.3s;
        height: 100%;
    }

    .article-card:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .article-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .article-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-top: auto;
        /* empuja el título hacia abajo */
    }

    .article-tag {
        font-size: 0.8rem;
        color: #999;
        margin-bottom: 10px;
    }

    /************************************* */
    #tarifas {
        background-color: #2c8314;
        box-sizing: border-box;
        padding-top: 0;
        padding-bottom: 0;
    }

    .tarifas-section h2 {
        color: white;
    }


    /************MOVIL********* */
    @media (max-width: 768px) {
        .hero-section {
            padding: 40px 15px;

        }

        .hero-content {
            padding-left: 0;
        }

        .inscription-text {
            font-size: 46px;
        }

        .energy-text {
            font-size: 18px;
        }

        .btn-green {
            width: 100%;
            max-width: 300px;
        }

        .right-buttons-mobile .right-btn {
            background-color: #37A819;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border: none;
            display: inline-block;
            text-align: center;
            text-decoration: none;
        }

        .right-buttons-mobile .right-btn:hover {
            background-color: rgb(128, 255, 0);
        }

        .swiper-slide {
            width: 100% !important;
            /* Hace que el slide ocupe todo el ancho visible */
        }
    }
</style>

<div class="hero-section">
    <div class="hero-content">
        <p class="energy-text">ENERGÍA AL 100%</p>
        <div class="inscription-text">ENTRENA</div>
        <div class="inscription-text">CON NOSOTROS</div>
        <a href="<?php echo esc_url(home_url('/tarifas/')); ?>" class="btn btn-green">
            ME APUNTO
        </a>

        <div>
            <a href="<?php echo esc_url(home_url('/instalacion/')); ?>" class="know-more">Ver instalaciones <i
                    class="fas fa-chevron-right"></i></a>
        </div>

        <!--boton para movil-->
        <div class="right-buttons-mobile d-block d-md-none mt-3">
            <a href="<?php echo esc_url(home_url('/tarifas/')); ?>" class="right-btn">RENUEVA</a>
        </div>
    </div>

    <div class="right-buttons d-none d-md-block">
        <a href="<?php echo esc_url(home_url('/tarifas/')); ?>" class="right-btn">RENUEVA</a>
    </div>

    <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gimnasio_ejemplo.jpeg"
            alt="Black dumbbell with a glowing green battery icon showing full charge" class="dumbbell-image">-->

</div>

<!--LOGO LOWGIM-->
<div class="text-center mt-4 mb-4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLowgim_redimensionado.png"
        class="logo logo-index img-fluid" alt="lowgim">
</div>

<!--TARIFAS EN EL INDEX-->
<section id="tarifas" class="tarifas-section">
    <div class="container">
        <h2 class="text-center mb-3 pt-4">Nuestras Tarifas</h2>
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3, // O -1 si quieres mostrar todas
                'product_cat' => 'tarifas'
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    global $product;
                    $features = get_post_meta(get_the_ID(), '_tarifa_features', true);
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header-index text-center font-weight-bold">
                                <?php the_title(); ?>
                            </div>
                            <div class="card-body">
                                <?php if ($product->is_on_sale()): ?>
                                    <div class="original-price text-muted">
                                        <del><?php echo wc_price($product->get_regular_price()); ?></del>
                                    </div>
                                <?php endif; ?>
                                <div class="current-price h4"><?php echo wc_price($product->get_price()); ?></div>
                                <div class="period">/ 1 mes</div>

                                <div class="promo-box">
                                    <?php echo $product->get_short_description(); ?>
                                </div>

                                <?php if (!empty($features) && is_array($features)): ?>
                                    <ul class="feature-list text-left list-unstyled">
                                        <?php foreach ($features as $feature): ?>
                                            <li><i class="fas fa-check text-success mr-2"></i><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="<?php echo esc_url(add_query_arg('add-to-cart', $product->get_id(), wc_get_cart_url())); ?>"
                                    class="btn btn-primary">
                                    Elegir plan
                                </a>
                            </div>
                        </div>

                    </div>
                <?php endwhile; endif;
            wp_reset_postdata(); ?>

        </div>
        <div class="text-center mt-2 pb-4">
            <a href="<?php echo get_permalink(get_page_by_path('tarifas')); ?>" class="btn btn-success">Ver
                todas las tarifas</a>
        </div>

    </div>
</section>


<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <h2 class="font-weight-bold text-center">Actividades</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'actividades',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $actividades_query = new WP_Query($args);

            if ($actividades_query->have_posts()):
                while ($actividades_query->have_posts()):
                    $actividades_query->the_post();
                    ?>
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <div class="class-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else: ?>
                                    <img src="https://placehold.co/600x400/cccccc/FFFFFF?text=Sin+imagen"
                                        alt="Imagen no disponible">
                                <?php endif; ?>
                                <div class="class-overlay">
                                    <div class="plus-icon">+</div>
                                    <div class="class-title"><?php the_title(); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="col-12 text-center">No hay actividades disponibles en este momento.</p>';
            endif;
            ?>
        </div>
         <div class="text-center mt-2 pb-4">
            <a href="<?php echo get_permalink(get_page_by_path('actividades')); ?>" class="btn btn-success">Ir a actividades</a>
        </div>
    </div>

    <!--SECCION A INSTALACIONES-->

    <div class="container-fluid instalacion-index mt-5 mb-5" id="section-secciones-index">
        <h2 class="text-center mb-4">Nuestras Instalaciones</h2>

        <div class="swiper swiper-instalaciones">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'instalaciones',
                    'posts_per_page' => -1, // Mostrar más de 1 para que Swiper tenga contenido que deslizar
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $instalaciones = new WP_Query($args);

                if ($instalaciones->have_posts()):
                    while ($instalaciones->have_posts()):
                        $instalaciones->the_post();
                        $featured_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : 'https://placehold.co/800x500?text=Sin+imagen';
                        ?>
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none">
                                <div class="card card-instalacion">
                                    <img src="<?php echo esc_url($featured_image); ?>" class="card-img-top"
                                        alt="<?php the_title_attribute(); ?>">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p class="text-center">No hay instalaciones disponibles por el momento.</p>';
                endif;
                ?>
            </div>

            <!-- Botones de navegación -->
            <div class="swiper-button-prev instalaciones-button-prev"></div>
            <div class="swiper-button-next instalaciones-button-next"></div>
        </div>
    </div>


    <!--SECCION A BLOG-->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <h2 class="font-weight-bold text-center">Blog</h2>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()):
                    $blog_query->the_post();
                    ?>
                    <div class="col-md-4 d-flex">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                            <div class="article-card article-card h-100 d-flex flex-column">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>"
                                        class="article-image img-fluid">
                                <?php else: ?>
                                    <img src="https://placehold.co/600x400/333/fff?text=Sin+imagen" alt="Sin imagen destacada"
                                        class="article-image img-fluid">
                                <?php endif; ?>
                                <div class="article-tag">#BLOG</div>
                                <h2 class="article-title"><?php the_title(); ?></h2>
                            </div>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<div class="col-12"><p>No hay entradas del blog disponibles.</p></div>';
            endif;
            ?>
        </div>

        <div class="row">
            <div class="col text-center mt-4">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-success">
                    Ver todos los artículos
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>

</section>

<?php get_footer(); ?>