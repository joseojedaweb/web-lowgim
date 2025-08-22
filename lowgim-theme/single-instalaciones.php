<?php get_header(); ?>

<style>
    .instalacion-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .instalacion-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center;
        margin-bottom: 20px;
    }

    .instalacion-galeria {
        margin-left: -7.5px;
        margin-right: -7.5px;
    }

    .instalacion-galeria .col-12 {
        padding-left: 7.5px;
        padding-right: 7.5px;
        margin-bottom: 15px;
    }

    .instalacion-galeria .card {
        border: none;
        transition: transform 0.3s ease;
    }

    .instalacion-galeria .card:hover {
        transform: scale(1.05);
    }

    .instalacion-galeria img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .instalacion-galeria .card a {
    display: block;
    height: 100%;
}

.instalacion-galeria .card img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<div class="container py-5">

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <div class="instalacion-header">
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                        alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
            </div>

            <?php
            $gallery = get_post_meta(get_the_ID(), '_instalaciones_gallery', true);
            if ($gallery): ?>
                <div class="row instalacion-galeria">
                    <?php foreach ($gallery as $image_id): ?>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="card">
                                <a href="<?php echo wp_get_attachment_url($image_id); ?>" class="glightbox"
                                    data-gallery="instalacion-<?php the_ID(); ?>">
                                    <img src="<?php echo wp_get_attachment_image_url($image_id, 'large'); ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center">No hay imágenes disponibles para esta instalación.</p>
            <?php endif; ?>

        <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
