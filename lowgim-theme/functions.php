<?php
// Activar soporte para imágenes destacadas
add_theme_support('post-thumbnails');

// Definir un tamaño personalizado para las imagenes destacadas
function personalizar_tamanos_imagen() {
     add_image_size('blog-thumb', 800, 400, true); // Imagen para cards
    add_image_size('blog-banner-mobile', 800, 333, true); // Optimizado para móviles
}
add_action('after_setup_theme', 'personalizar_tamanos_imagen');

/******************************************************************** */


// Cargar hojas de estilo del tema
function lowgim_enqueue_styles() {
    wp_enqueue_style('lowgim-style', get_stylesheet_uri());

    // Cargar el estilo de WooCommerce personalizado
    wp_enqueue_style(
        'lowgim-woocommerce-style',
        get_template_directory_uri() . '/assets/css/style-woocommerce.css',
        array('lowgim-style'), // Se carga después de style.css
        null
    );

    // Cargar el estilo general personalizado
    wp_enqueue_style(
        'lowgim-custom-style',
        get_template_directory_uri() . '/assets/css/custom-style.css',
        array('lowgim-style'), // También depende de style.css si quieres
        filemtime(get_template_directory() . '/assets/css/custom-style.css')
    );
}
add_action('wp_enqueue_scripts', 'lowgim_enqueue_styles');


/********************************************************** */
//CARGA DE MI SCRIPT CUSTOM-SCRIPT.JS
function lowgim_enqueue_scripts() {
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/assets/js/custom-script.js',
        array('jquery'),
        null,
        true
    );

    // Pasar el valor de is_front_page() a JavaScript
    wp_localize_script('custom-script', 'lowgimData', array(
        'isFrontPage' => is_front_page()
    ));
}
add_action('wp_enqueue_scripts', 'lowgim_enqueue_scripts');



/********************************************************* */



/********************************************************** */
// Soporte para WooCommerce 
function lowgim_theme_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'lowgim_theme_support');


/*************************************************** */
/** CPT BLOG **/
function lowgim_register_blog_cpt()
{
    $labels = array(
        'name' => 'Blog',
        'singular_name' => 'Entrada de blog',
        'add_new' => 'Añadir nueva',
        'add_new_item' => 'Añadir nueva entrada',
        'edit_item' => 'Editar entrada',
        'new_item' => 'Nueva entrada',
        'view_item' => 'Ver entrada',
        'search_items' => 'Buscar entradas',
        'not_found' => 'No se encontraron entradas',
        'not_found_in_trash' => 'No se encontraron entradas en la papelera',
        'menu_name' => 'Blog',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'entrada-blog'),
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // Activar para el editor de bloques (Gutenberg)
    );

    register_post_type('blog', $args);
}
add_action('init', 'lowgim_register_blog_cpt');

/******************************************************************** */

//CPT ACTIVIDADES
function lowgim_register_actividades_cpt() {
    $labels = array(
        'name' => 'Actividades',
        'singular_name' => 'Actividad',
        'add_new' => 'Añadir nueva',
        'add_new_item' => 'Añadir nueva actividad',
        'edit_item' => 'Editar actividad',
        'new_item' => 'Nueva actividad',
        'view_item' => 'Ver actividad',
        'search_items' => 'Buscar actividades',
        'not_found' => 'No se encontraron actividades',
        'not_found_in_trash' => 'No se encontraron actividades en la papelera',
        'menu_name' => 'Actividades',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'actividad'),
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // para editor de bloques (Gutenberg)
    );

    register_post_type('actividades', $args);
}
add_action('init', 'lowgim_register_actividades_cpt');

/*************************************************************** */
add_filter( 'body_class', 'lowgim_add_login_body_class' );
function lowgim_add_login_body_class( $classes ) {
    if ( function_exists('is_account_page') && is_account_page() && !is_user_logged_in() ) {
        $classes[] = 'lowgim-login-page';
    }
    return $classes;
}

/******************************************************************* */
//CPT INSTALACIONES
function lowgim_register_cpt_instalaciones() {
    $labels = array(
        'name'               => 'Instalaciones',
        'singular_name'      => 'Instalación',
        'menu_name'          => 'Instalaciones',
        'name_admin_bar'     => 'Instalación',
        'add_new'            => 'Añadir nueva',
        'add_new_item'       => 'Añadir nueva instalación',
        'new_item'           => 'Nueva instalación',
        'edit_item'          => 'Editar instalación',
        'view_item'          => 'Ver instalación',
        'all_items'          => 'Todas las instalaciones',
        'search_items'       => 'Buscar instalaciones',
        'not_found'          => 'No se han encontrado instalaciones.',
        'not_found_in_trash' => 'No hay instalaciones en la papelera.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array('title', 'thumbnail'),
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'instalaciones'),
        'show_in_rest'       => true,
    );

    register_post_type('instalaciones', $args);
}
add_action('init', 'lowgim_register_cpt_instalaciones');


/* ---- AÑADIR UNAGALERIA DE IMAGENES A CADA INSTALACION ---- */
//Paso 1: Añadir scripts del media uploader
function lowgim_admin_enqueue_media_uploader($hook) {
    if ('post.php' === $hook || 'post-new.php' === $hook) {
        wp_enqueue_media();
        wp_enqueue_script(
            'lowgim-galeria-meta-box',
            get_stylesheet_directory_uri() . '/assets/js/galeria-meta-box.js',
            array('jquery'),
            null,
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'lowgim_admin_enqueue_media_uploader');



//Paso 2: Crear el Meta Box

function lowgim_render_gallery_meta_box($post) {
    $gallery = get_post_meta($post->ID, '_instalaciones_gallery', true);
    ?>
    <div id="instalaciones-gallery-wrapper">
        <ul class="instalaciones-gallery-list">
            <?php if ($gallery): foreach ($gallery as $image_id): ?>
                <li>
                    <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
                    <input type="hidden" name="instalaciones_gallery[]" value="<?php echo esc_attr($image_id); ?>">
                    <button type="button" class="button remove-gallery-image">Eliminar</button>
                </li>
            <?php endforeach; endif; ?>
        </ul>
        <button type="button" class="button add-gallery-images">Añadir imágenes</button>
    </div>
    <?php
}

//FUNCION PARA REGISTRAR EL METABOX
function lowgim_add_gallery_meta_box() {
    add_meta_box(
        'instalaciones_gallery',
        'Galería de imágenes',
        'lowgim_render_gallery_meta_box',
        'instalaciones',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'lowgim_add_gallery_meta_box');


//FUNCION PARA GUARDAR LOS DATOS AL GUARDAR EL POST
function lowgim_save_gallery_meta_box($post_id) {
    if (isset($_POST['instalaciones_gallery'])) {
        update_post_meta($post_id, '_instalaciones_gallery', array_map('intval', $_POST['instalaciones_gallery']));
    } else {
        delete_post_meta($post_id, '_instalaciones_gallery');
    }
}
add_action('save_post', 'lowgim_save_gallery_meta_box');

//ESTILOS PARA EL BACKEND
function lowgim_admin_gallery_style() {
    echo '<style>
        .instalaciones-gallery-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .instalaciones-gallery-list li {
            border: 1px solid #ccc;
            padding: 10px;
            position: relative;
            max-width: 120px;
            text-align: center;
        }
        .instalaciones-gallery-list img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 5px;
        }
        .remove-gallery-image {
            background-color: #dc3232;
            color: white;
            border: none;
            width: 100%;
        }
    </style>';
}
add_action('admin_head-post.php', 'lowgim_admin_gallery_style');
add_action('admin_head-post-new.php', 'lowgim_admin_gallery_style');

/*********************************************************************** */
//CAMBIAR TEXTO "Establecer imagen destacada" CPT Instalaciones
function lowgim_renombrar_imagen_destacada_para_instalaciones() {
    remove_meta_box('postimagediv', 'instalaciones', 'side');

    add_meta_box(
        'postimagediv',
        'Imagen portada', // 🔁 Nuevo título del metabox
        'post_thumbnail_meta_box',
        'instalaciones',
        'side',
        'low'
    );
}
add_action('do_meta_boxes', 'lowgim_renombrar_imagen_destacada_para_instalaciones');

/************************************************************************************* */
//GLIGHTBOX
function lowgim_enqueue_glightbox_assets() {
    if (is_singular('instalaciones')) {
        wp_enqueue_style('glightbox-css', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css');
        wp_enqueue_script('glightbox-js', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);

        // Script de inicialización
        wp_add_inline_script('glightbox-js', 'const lightbox = GLightbox({ selector: ".glightbox" });');
    }
}
add_action('wp_enqueue_scripts', 'lowgim_enqueue_glightbox_assets');

/************************************************************************************ */

// Declaramos una función personalizada para cargar los recursos de Swiper
function lowgim_enqueue_swiper_assets() {

    // Verificamos si estamos en la portada o página de inicio del sitio
    if (is_front_page() || is_home()) {

        // Encolamos el archivo CSS de Swiper desde su CDN
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

        // Encolamos el archivo JS de Swiper desde su CDN. Se carga en el footer (true al final)
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

        // Insertamos un script inline (en línea) justo después del script de Swiper
        wp_add_inline_script('swiper-js', '

            // Creamos una nueva instancia de Swiper para el contenedor con clase .swiper-instalaciones
            const swiperInstalaciones = new Swiper(".swiper-instalaciones", {

                // Muestra 2 slides a la vez (tarjetas visibles simultáneamente)
                slidesPerView: 1,

                // Espacio entre las tarjetas (en píxeles)
                spaceBetween: 40,

                // Activa el carrusel infinito: vuelve al inicio al llegar al final
                loop: true,

                centeredSlides: true,
                watchSlidesProgress: true,

                // Configuración de los botones de navegación del carrusel
                navigation: {
                    // Botón "siguiente"
                    nextEl: ".instalaciones-button-next",

                    // Botón "anterior"
                    prevEl: ".instalaciones-button-prev"
                }
            });
        ');
    }
}

// Le decimos a WordPress que ejecute esta función al cargar scripts y estilos en el frontend
add_action('wp_enqueue_scripts', 'lowgim_enqueue_swiper_assets');

/************************************************************** */
// Añadir caja de características personalizadas para productos tipo "tarifa"
function tarifa_custom_fields() {
    add_meta_box(
        'tarifa_features',
        'Características de la tarifa',
        'tarifa_features_callback',
        'product',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'tarifa_custom_fields');

// HTML del campo personalizado en el admin con opción de eliminar
function tarifa_features_callback($post) {
    $features = get_post_meta($post->ID, '_tarifa_features', true) ?: [];

    echo '<div id="tarifa-features-list">';

    foreach ($features as $i => $feature) {
        echo '<div class="tarifa-feature-item" style="display:flex;gap:10px;margin-bottom:8px;">';
        echo '<input type="text" name="tarifa_features[]" value="' . esc_attr($feature) . '" style="flex:1;" />';
        echo '<button type="button" class="button remove-feature">Eliminar</button>';
        echo '</div>';
    }

    echo '</div>';
    echo '<button type="button" class="button" onclick="addFeatureField()">+ Añadir característica</button>';

    ?>
    <script>
        function addFeatureField() {
            const container = document.getElementById('tarifa-features-list');
            const wrapper = document.createElement('div');
            wrapper.className = 'tarifa-feature-item';
            wrapper.style = 'display:flex;gap:10px;margin-bottom:8px;';
            
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'tarifa_features[]';
            input.style = 'flex:1;';

            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'button remove-feature';
            button.textContent = 'Eliminar';
            button.onclick = function() {
                container.removeChild(wrapper);
            };

            wrapper.appendChild(input);
            wrapper.appendChild(button);
            container.appendChild(wrapper);
        }

        // Permitir eliminar características existentes
        document.addEventListener('DOMContentLoaded', function() {
            const removeButtons = document.querySelectorAll('.remove-feature');
            removeButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    this.parentElement.remove();
                });
            });
        });
    </script>
    <?php
}

// Guardar los datos al guardar el producto
function save_tarifa_features($post_id) {
    if (isset($_POST['tarifa_features']) && is_array($_POST['tarifa_features'])) {
        $features = array_filter(array_map('sanitize_text_field', $_POST['tarifa_features']));
        update_post_meta($post_id, '_tarifa_features', $features);
    } else {
        delete_post_meta($post_id, '_tarifa_features');
    }
}
add_action('save_post_product', 'save_tarifa_features');


// Vaciar el carrito automáticamente si se añade una tarifa (categoría "tarifas")
add_filter('woocommerce_add_to_cart_validation', 'solo_una_tarifa_en_carrito', 10, 3);
function solo_una_tarifa_en_carrito($passed, $product_id, $quantity) {
    if (has_term('tarifas', 'product_cat', $product_id)) {
        WC()->cart->empty_cart();
    }
    return $passed;
}


// Al crear un nuevo producto, marcar por defecto "Vender individualmente"
add_filter('default_post_metadata', 'set_vender_individualmente_por_defecto', 10, 5);
function set_vender_individualmente_por_defecto($value, $object_id, $meta_key, $single, $meta_type) {
    if ($meta_type === 'post' && $meta_key === '_sold_individually' && get_post_type($object_id) === 'product') {
        if ($value === null) {
            return 'yes'; // Activado por defecto
        }
    }
    return $value;
}

// 1. Si el usuario no ha iniciado sesión y quiere añadir una tarifa desde /tarifas, redirigir al login personalizado
add_action('template_redirect', 'redirigir_si_no_logueado_en_tarifas');
function redirigir_si_no_logueado_en_tarifas() {
    if (
        is_page('tarifas') &&
        isset($_GET['add-to-cart']) &&
        !is_user_logged_in()
    ) {
        // Guardar aviso en cookie
        setcookie('mensaje_login_tarifa', '1', time() + 300, '/');

        // Redirigir al login con retorno a /tarifas
        $redirect_url = home_url('/tarifas');
        $login_url = home_url('/login/?redirect_to=' . urlencode($redirect_url));
        wp_redirect($login_url);
        exit;
    }
}

// 2. Si el usuario ya está logueado y visita /login, redirigirlo a /mi-cuenta
add_action('template_redirect', 'redirect_logged_in_users_from_login_page');
function redirect_logged_in_users_from_login_page() {
    if ( is_page('login') && is_user_logged_in() ) {
        wp_redirect( home_url('/mi-cuenta/') );
        exit;
    }
}

// 3. Después de iniciar sesión, redirigir correctamente:
// - a redirect_to si se especificó en la URL (/login/?redirect_to=...)
// - al carrito si se usó cookie
// - por defecto a /mi-cuenta
add_filter('woocommerce_login_redirect', 'custom_login_redirect', 10, 2);
function custom_login_redirect($redirect, $user) {
    // Prioridad 1: ?redirect_to=...
    if (!empty($_REQUEST['redirect_to'])) {
        return esc_url_raw($_REQUEST['redirect_to']);
    }

    // Prioridad 2: cookie del carrito
    if ( isset($_COOKIE['redirect_to_cart']) ) {
        setcookie('redirect_to_cart', '', time() - 3600, '/');
        return wc_get_cart_url();
    }

    // Redirección por defecto
    return home_url('/mi-cuenta/');
}

// 4. Si el usuario no está logueado y accede al carrito, redirigir a /login
add_action('template_redirect', 'redirect_non_logged_users_from_cart');
function redirect_non_logged_users_from_cart() {
    if ( !is_user_logged_in() && is_cart() ) {
        setcookie('redirect_to_cart', '1', time() + 300, '/');
        wp_redirect( home_url('/login/') );
        exit;
    }
}

// 5. Impedir añadir cualquier producto al carrito si no se ha iniciado sesión
add_filter('woocommerce_add_to_cart_validation', 'bloquear_add_to_cart_si_no_logueado_global', 10, 3);
function bloquear_add_to_cart_si_no_logueado_global($passed, $product_id, $quantity) {
    if (!is_user_logged_in()) {
        // No se muestra porque redirigimos, por eso usamos cookie en su lugar
        return false;
    }
    return $passed;
}

// 6. Mostrar mensaje si venía redirigido desde /tarifas (usando cookie)
add_action('woocommerce_before_customer_login_form', 'mostrar_mensaje_tarifa_si_cookie');
function mostrar_mensaje_tarifa_si_cookie() {
    if (isset($_COOKIE['mensaje_login_tarifa'])) {
        // Este aviso se imprimirá dentro del contenedor .woocommerce-notices-wrapper automáticamente
        wc_print_notice(__('Inicia sesión para continuar con la compra de tu tarifa.'), 'notice');

        // Borrar la cookie para que solo se muestre una vez
        setcookie('mensaje_login_tarifa', '', time() - 3600, '/');
    }
}

/********************************** */
// Ocultar opciones wordpress "Imagen del producto" y "Galería del producto" en productos
function lowgim_ocultar_elementos_editor_producto() {
    // 1. Ocultar imagen destacada
    remove_meta_box('postimagediv', 'product', 'side');

    // 2. Ocultar galería del producto
    remove_meta_box('woocommerce-product-images', 'product', 'side');

    // 3. Ocultar el editor de la descripción larga
    remove_post_type_support('product', 'editor');
}
add_action('add_meta_boxes', 'lowgim_ocultar_elementos_editor_producto', 100);


//COMPROBAR SI WP_MAIL() ESTA ENVIANDO CORREO
add_action('init', function () {
    if (isset($_GET['test_email'])) {
        $to = 'contact@example.com'; // cambia este correo si quieres probar con otro
        $subject = 'Prueba de wp_mail() desde WordPress';
        $message = 'Este es un correo de prueba enviado con la función wp_mail()';
        $headers = ['Content-Type: text/html; charset=UTF-8'];

        if (wp_mail($to, $subject, $message, $headers)) {
            echo '✅ El correo se ha enviado correctamente.';
        } else {
            echo '❌ Error: No se pudo enviar el correo.';
        }

        exit;
    }
});
/******************************************************************************* */
