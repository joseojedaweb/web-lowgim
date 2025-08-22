<?php
get_header();
?>

<style>
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
    }

    .class-card {
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
    height: 300px;
}

.class-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
    }

    .class-title {
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 10px;
    }

    .plus-icon {
        font-size: 24px;
        margin-bottom: 5px;
    }
</style>

<div class="container mt-4">
    <h2 class="title text-center">Actividades</h2>
    <div class="row justify-content-center">
        <div class="col-12">
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
                        <div class="col-md-3 mb-4">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <div class="class-card">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php else: ?>
                                        <img src="https://placehold.co/600x400/cccccc/FFFFFF?text=Sin+imagen" alt="Imagen no disponible">
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
        </div>
    </div>
</div>


<?php get_footer(); ?>