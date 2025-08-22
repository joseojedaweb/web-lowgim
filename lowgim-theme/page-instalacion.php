<?php
/* Template Name: Instalaciones */
get_header();
?>

<style>
    .fitness-item {
        text-align: center;
        margin-bottom: 20px;
    }

    .fitness-item img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .fitness-title {
        margin-top: 8px;
        font-weight: 600;
        font-size: 1rem;
    }

    .card-link {
        text-decoration: none;
        color: inherit;
    }

    .card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .card.h-100 {
        max-width: 600px;
        margin: 0 auto;
    }

    .card-img-top {
        height: 360px;
        object-fit: cover;
    }

    .card-title {
        font-size: 1rem;
        margin-bottom: 0;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-12">

            <h2 class="title text-center">Instalaciones</h2>

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'instalaciones',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $instalaciones = new WP_Query($args);

                if ($instalaciones->have_posts()):
                    while ($instalaciones->have_posts()):
                        $instalaciones->the_post();
                        $featured_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.co/800x500?text=Sin+imagen';
                ?>
                        <div class="col-12 col-md-6 mb-4">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card h-100">
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

        </div>
    </div>
</div>

<?php get_footer(); ?>
