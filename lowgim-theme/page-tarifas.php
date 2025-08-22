<?php
/* Template Name: Página de Tarifas */
get_header(); ?>

<main class="container-fluid p-0">
    <div class="header-section">
        <h1 class="precios-title">PRECIOS</h1>
    </div>

    <div class="container py-3">
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
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
                        <div class="card h-100">
                            <div class="card-header text-center">
                                <p id="titulo-card"><?php the_title(); ?></p>
                            </div>
                            <div class="card-body">
                                <?php if ($product->is_on_sale()): ?>
                                    <div class="original-price"><?php echo wc_price($product->get_regular_price()); ?></div>
                                <?php endif; ?>
                                <div class="current-price"><?php echo wc_price($product->get_price()); ?></div>
                                <div class="period">/ 1 mes</div>

                                <div class="promo-box">
                                    <?php echo $product->get_short_description(); ?>
                                </div>

                                <div class="includes-text">
                                    Lo que incluye la <span class="plan-name"><?php the_title(); ?></span>
                                </div>

                                <?php if (!empty($features)): ?>
                                    <ul class="feature-list">
                                        <?php foreach ($features as $feature): ?>
                                            <li class="feature-item">
                                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                                <span class="feature-text"><?php echo esc_html($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="?add-to-cart=<?php echo $product->get_id(); ?>" class="select-btn">
                                    Elegir plan
                                </a>

                                <div class="inscription-fee">
                                    <strong><?php echo wc_price($product->get_price()); ?></strong> cuota mensual
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>

        <!-- Sección Bonos -->
        <h2 class="text-center mt-5 mb-3">Bonos por días o semanas</h2>
        <div class="row">
            <?php
            $args_bonos = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'product_cat' => 'bonos'
            );
            $loop_bonos = new WP_Query($args_bonos);
            if ($loop_bonos->have_posts()):
                while ($loop_bonos->have_posts()):
                    $loop_bonos->the_post();
                    global $product;
                    $features = get_post_meta(get_the_ID(), '_tarifa_features', true);
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header text-center">
                                <p id="titulo-card"><?php the_title(); ?></p>
                            </div>
                            <div class="card-body">
                                <?php if ($product->is_on_sale()): ?>
                                    <div class="original-price"><?php echo wc_price($product->get_regular_price()); ?></div>
                                <?php endif; ?>
                                <div class="current-price"><?php echo wc_price($product->get_price()); ?></div>
                                <div class="period">/ acceso puntual</div>
                                <div class="promo-box"><?php echo $product->get_short_description(); ?></div>
                                <div class="includes-text">
                                    Lo que incluye el <span class="plan-name"><?php the_title(); ?></span>
                                </div>
                                <?php if (!empty($features)): ?>
                                    <ul class="feature-list">
                                        <?php foreach ($features as $feature): ?>
                                            <li class="feature-item">
                                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                                <span class="feature-text"><?php echo esc_html($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <a href="?add-to-cart=<?php echo $product->get_id(); ?>" class="select-btn">Comprar bono</a>
                                <div class="inscription-fee">
                                    <strong><?php echo wc_price($product->get_price()); ?></strong> precio único
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>